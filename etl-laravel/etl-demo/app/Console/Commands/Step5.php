<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Stopwatch\Stopwatch;

use App\Models\Item;
use App\Models\OldItem;
use App\Models\OldStore;
use App\Models\Store;

class Step5 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'step5';

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

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // NEW THIS STEP: Refactor Store & Item Insertion Process

        // Delete Store and Items (via cascade) First.
        Store::truncate();

        info('START');
        $stopwatch = new Stopwatch();
        $stopwatch->start(__FUNCTION__, 'Process Data');

        $oldStores = OldStore::with('items')->get();

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

        info($stopwatch->stop(__FUNCTION__));
    }
}
