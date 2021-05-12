<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Item;
use App\Models\OldItem;
use App\Models\OldStore;
use App\Models\Store;

class Step1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'step1';

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
        // Delete Store and Items (via cascade) First.
        Store::truncate();

        // INSERTING
        info('START');
        $oldStores = OldStore::all();

        foreach($oldStores as $oldStore) {
            $newStoreData = $oldStore->transform();

            Store::create( $newStoreData );
        };
    }
}
