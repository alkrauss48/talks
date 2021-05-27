<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->index('old_store_id');
        });

        Schema::table('items', function (Blueprint $table) {
            $table->index('old_item_id');
            $table->index('store_id');
        });

        Schema::table('old_items', function (Blueprint $table) {
            $table->index('old_store_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->dropIndex(['old_store_id']);
        });

        Schema::table('items', function (Blueprint $table) {
            $table->dropIndex(['old_item_id']);
            $table->dropIndex(['store_id']);
        });

        Schema::table('old_items', function (Blueprint $table) {
            $table->dropIndex(['old_store_id']);
        });
    }
}
