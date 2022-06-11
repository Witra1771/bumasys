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
        Schema::create('warehousing_inventories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('product_detail_id')->unsigned();
            $table->bigInteger('warehouse_id')->unsigned();
            $table->bigInteger('product_unit_id')->unsigned();
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('stock');
            $table->integer('security_stock')->default(2);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('product_detail_id')->references('id')->on('product_details');
            $table->foreign('warehouse_id')->references('id')->on('warehousing_warehouses');
            $table->foreign('product_unit_id')->references('id')->on('product_units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
};
