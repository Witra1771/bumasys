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
            $table->bigInteger('companies_id')->unsigned();
            $table->bigInteger('currencies_id')->unsigned();
            $table->text('currencies_symbol_placement', ['Before amount', 'After amount'])->default('Before amount');
            $table->text('logo_path');
            $table->enum('date_format', ['mm/dd/yy', 'dd/mm/yy', 'mm-dd-yy', 'dd-mm-yy'])->default('mm/dd/yy');
            $table->enum('time_format', ['24 Hour', '12 Hour'])->default('24 Hour');
            $table->string('time_zone')->default('Asia/Jakarta');
            $table->enum('trx_editable_type', ['By Days', 'By Status'])->default('By Days');
            $table->integer('trx_editable_by_days')->nullable();
            $table->string('trx_editable_by_status')->nullable();
            $table->string('product_sku_prefix')->nullable();
            $table->bigInteger('product_default_unit_id')->unsigned();
            $table->string('invoice_prefix')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('companies_id')->references('id')->on('companies');
            $table->foreign('currencies_id')->references('id')->on('currencies');
            $table->foreign('product_default_unit_id')->references('id')->on('product_units');
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
