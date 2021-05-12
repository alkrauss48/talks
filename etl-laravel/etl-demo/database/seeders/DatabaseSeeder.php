<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\OldStore::factory(1000)->create();
        \App\Models\OldItem::factory(5000)->create();
    }
}
