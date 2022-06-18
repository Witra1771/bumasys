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
        Schema::create('sales_invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->string('invoice_number');
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('customer_contact_id')->unsigned();
            $table->bigInteger('customer_payment_method_id')->unsigned();
            $table->enum('customer_terms_type', ['days', 'days after status is completed', 'date']);
            $table->integer('customer_terms')->nullable();
            $table->timestamp('customer_terms_date')->nullable();
            $table->enum('customer_payment_status', ['unpaid', 'paid', 'partially']);
            $table->bigInteger('partner_contact_id')->unsigned();
            $table->bigInteger('partner_payment_method_id')->unsigned();
            $table->enum('partner_terms_type', ['days', 'days after status is completed', 'date']);
            $table->integer('partner_terms')->nullable();
            $table->timestamp('partner_terms_date')->nullable();
            $table->enum('partner_payment_status', ['unpaid', 'paid', 'partially']);
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('customer_payment_method_id')->references('id')->on('payment_methods');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
