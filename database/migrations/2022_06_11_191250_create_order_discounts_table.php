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
        Schema::create('order_discounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->string('name');
            $table->string('code');
            $table->enum('discount_type', ['coupon_code', 'promotion']);
            $table->boolean('is_unlimited')->default(false);
            $table->integer('discount_limit')->nullable();
            $table->integer('remaining')->nullable();
            $table->enum('coupon_type', ['flat', 'percentage', 'free shipping', 'same price']);
            $table->integer('discount_amount')->nullable();
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->boolean('is_never_expired')->default(false);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_discounts');
    }
};
