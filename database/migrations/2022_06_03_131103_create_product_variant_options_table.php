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
        Schema::create('item_has_variant', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id')->unsigned();
            $table->bigInteger('item_variant_id')->unsigned();
            $table->json('possible_value');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('item_variant_id')->references('id')->on('item_variations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_has_variant');
    }
};
