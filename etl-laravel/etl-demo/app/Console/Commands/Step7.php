<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Stopwatch\Stopwatch;

use App\Models\Item;
use App\Models\OldItem;
use App\Models\OldStore;
use App\Models\Store;

class Step7 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'step7';

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
        Store::whereIn('old_store_id', $oldStoreIds)
            ->delete();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // NEW THIS STEP: Handle deleting store records

        // INSERTING
        info('START');
        $stopwatch = new Stopwatch();
        $stopwatch->start(__FUNCTION__, 'Insert Data');

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

        // TODO: Update Store Data

        info($stopwatch->stop(__FUNCTION__));
    }
}
