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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('item_id')->unsigned();
            $table->bigInteger('item_unit_id')->unsigned();
            $table->string('item_note')->nullable();
            $table->integer('customer_rate');
            $table->integer('partner_rate');
            $table->integer('qty');
            $table->decimal('weight');
            $table->integer('customer_amount');
            $table->integer('partner_amount');
            $table->bigInteger('tax_id')->nullable();
            $table->integer('tax_amount')->nullable();
            $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('order_details');
    }
};
