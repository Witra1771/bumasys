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
        Schema::create('company_settings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->enum('date_format', ['mm/dd/yy', 'dd/mm/yy', 'mm-dd-yy', 'dd-mm-yy'])->default('dd/mm/yy');
            $table->enum('time_format', ['24 hour', '12 hour'])->default('24 hour');
            $table->string('time_zone')->default('Asia/Jakarta');
            $table->string('currencies')->default('IDR');
            $table->string('ccy_symbol');
            $table->enum('ccy_symbol_plcmt', ['before amount', 'after amount'])->default('before amount');
            $table->enum('trx_editable_type', ['by days', 'by status'])->default('by status');
            $table->integer('trx_editable_by_days')->default('7');
            $table->string('trx_editable_by_status')->nullable('completed');
            $table->string('item_sku_prefix')->nullable();
            $table->bigInteger('item_default_unit_id')->unsigned();
            $table->json('invoice_format')->nullable();
            $table->json('bill_format')->nullable();
            $table->json('payment_format')->nullable();
            $table->bigInteger('def_acc_sale_id')->unsigned();
            $table->bigInteger('def_acc_purchase_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('item_default_unit_id')->references('id')->on('item_units');
            $table->foreign('def_acc_sale_id')->references('id')->on('accounting_accounts');
            $table->foreign('def_acc_purchase_id')->references('id')->on('accounting_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
