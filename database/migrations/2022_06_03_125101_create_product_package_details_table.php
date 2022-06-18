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
        Schema::create('item_package_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('items_id_package')->unsigned();
            $table->json('items_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('items_id_package')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_details');
    }
};
