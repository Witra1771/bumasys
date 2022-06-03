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
        Schema::create('product_package_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('products_id_package')->unsigned();
            $table->bigInteger('products_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('products_id_package')->references('id')->on('products');
            $table->foreign('products_id')->references('id')->on('products');
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
