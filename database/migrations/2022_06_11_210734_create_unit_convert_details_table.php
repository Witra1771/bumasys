<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_unit_convert_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id')->unsigned();
            $table->bigInteger('default_item_unit_id')->unsigned();
            $table->integer('conversion_value');
            $table->bigInteger('to_item_unit_id')->unsigned();
            $table->json('price')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('default_item_unit_id')->references('id')->on('item_units');
            $table->foreign('to_item_unit_id')->references('id')->on('item_units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_convert_details');
    }
};
