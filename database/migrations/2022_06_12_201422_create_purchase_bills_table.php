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
        Schema::create('purchase_bills', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->string('bill_number');
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('payment_method');
            $table->enum('terms_type', ['days', 'days after status is completed', 'date']);
            $table->integer('terms')->nullable();
            $table->timestamp('partner_terms_date')->nullable();
            $table->enum('payment_status', ['unpaid', 'paid', 'partially']);
            $table->bigInteger('contact_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('bills');
    }
};
