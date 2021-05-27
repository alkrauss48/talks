<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Stopwatch\Stopwatch;

use App\Models\Item;
use App\Models\OldItem;
use App\Models\OldStore;
use App\Models\Store;

class Step9 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'step9';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertStores($oldStoreIds)
    {
        if(count($oldStoreIds) === 0) {
            return;
        }

        $oldStores = OldStore::with('items')
            ->whereIn('id', $oldStoreIds)
            ->get();

        $newStoreData = $oldStores
            ->map( fn($s) => $s->transform() )
            ->toArray();

        Store::insert($newStoreData);

        $storeToLegacyStoreMap = Store::pluck('id', 'old_store_id');

        $newItemData = $oldStores
            ->map( fn($s) => $s->items )
            ->flatten()
            ->map( function($i) use ($storeToLegacyStoreMap) {
                $storeId = $storeToLegacyStoreMap[$i->old_store_id];

                return $i->transform($storeId);
            })->toArray();

        Item::insert($newItemData);
    }

    public function deleteStores($oldStoreIds)
    {
        if(count($oldStoreIds) === 0) {
            return;
        }

        Store::whereIn('old_store_id', $oldStoreIds)
            ->delete();
    }

    public function updateStores($oldStoreIds)
    {
        if(count($oldStoreIds) === 0) {
            return;
        }

        $oldStores = OldStore::whereIn('id', $oldStoreIds)->get();
        $oldItems = OldItem::whereIn('old_store_id', $oldStoreIds)->get();

        $stores = Store::whereIn('old_store_id', $oldStoreIds)
            ->get()
            ->groupBy('old_store_id');

        $items = Item::whereIn('old_item_id', $oldItems->pluck('id'))
            ->get()
            ->groupBy('old_item_id');

        foreach($oldStores as $oldStore) {
            $store = $stores[$oldStore->id][0];

            $store->update( $oldStore->transform() );
        }

        foreach($oldItems as $oldItem) {
            $item = $items[$oldItem->id][0];

            $item->update( $oldItem->transform() );
        }
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // NEW THIS STEP: Refactor Store & Item Update Process
        Store::truncate();

        info('START');
        $stopwatch = new Stopwatch();
        $stopwatch->start(__FUNCTION__, 'Process Data');

        $oldStoreIds = OldStore::pluck('id');
        $existingOldStoreIds = Store::pluck('old_store_id');

        $storeIdsToAdd = $oldStoreIds->diff($existingOldStoreIds);
        $storeIdsToRemove = $existingOldStoreIds->diff($oldStoreIds);
        $storeIdsToUpdate = $oldStoreIds->diff(
            $storeIdsToAdd->merge($storeIdsToRemove)
        );

        info('Insert: ' . count($storeIdsToAdd));
        info('Delete: ' . count($storeIdsToRemove));
        info('Update: ' . count($storeIdsToUpdate));

        $this->insertStores($storeIdsToAdd);
        $this->deleteStores($storeIdsToRemove);
        $this->updateStores($storeIdsToUpdate);

        info($stopwatch->stop(__FUNCTION__));
    }
}
