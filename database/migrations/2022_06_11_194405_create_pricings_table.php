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
        Schema::create('item_pricings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id')->unsigned();
            $table->integer('price'); // For Customer
            $table->json('group_price'); // For Group Sale or Partner
            $table->enum('price_is', ['inc.tax', 'exc.tax']);
            $table->bigInteger('selling_account_id')->unsigned();
            $table->bigInteger('purchase_account_id')->unsigned();
            $table->bigInteger('default_tax_id')->nullable();
            $table->timestamps();
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('selling_account_id')->references('id')->on('accounting_accounts');
            $table->foreign('purchase_account_id')->references('id')->on('accounting_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricings');
    }
};
