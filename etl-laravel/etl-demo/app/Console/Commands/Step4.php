<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Stopwatch\Stopwatch;

use App\Models\Item;
use App\Models\OldItem;
use App\Models\OldStore;
use App\Models\Store;

class Step4 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'step4';

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
        // NEW THIS STEP: Batch Query Items with Stores

        // Delete Store and Items (via cascade) First.
        Store::truncate();

        info('START');
        $stopwatch = new Stopwatch();
        $stopwatch->start(__FUNCTION__, 'Process Data');

        $oldStores = OldStore::with('items')->get();

        foreach($oldStores as $oldStore) {
            $newStoreData = $oldStore->transform();

            $store = Store::create($newStoreData);

            // Include items
            foreach($oldStore->items as $oldItem) {
                $newItemData = $oldItem->transform($store->id);

                Item::create($newItemData);
            }
        }

        info($stopwatch->stop(__FUNCTION__));
    }
}
