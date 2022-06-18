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
            $table->bigInteger('item_id')->unsigned();
            $table->bigInteger('warehouse_id')->unsigned();
            $table->bigInteger('item_unit_id')->unsigned();
            $table->bigInteger('contact_id')->unsigned();
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('stock');
            $table->integer('cost')->default(0);
            $table->integer('security_stock')->default(25);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('warehouse_id')->references('id')->on('warehousing_warehouses');
            $table->foreign('item_unit_id')->references('id')->on('item_units');
            $table->foreign('contact_id')->references('id')->on('contacts');
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
