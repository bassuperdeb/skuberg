<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('cypto_id');
            $table->decimal('No',19,8);
            $table->decimal('price',19,2);
            $table->foreignId('fiat_id');
            $table->string('limit');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sell_lists');
    }
}
