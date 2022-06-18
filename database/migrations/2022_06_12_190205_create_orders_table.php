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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->enum('order_type', ['selling', 'purchasing']);
            $table->bigInteger('create_by_id')->unsigned();
            $table->bigInteger('contact_id')->unsigned();
            $table->bigInteger('logistic_id')->unsigned();;
            $table->bigInteger('logistic_service_id')->unsigned();;
            $table->integer('discount_amount');
            $table->boolean('is_repeat_order')->default(0);
            $table->string('order_number');
            $table->string('receipt');
            $table->integer('shipping_fee');
            $table->string('shipping_province');
            $table->string('shipping_city');
            $table->string('shipping_district');
            $table->string('shipping_sub_district');
            $table->string('shipping_zip_code');
            $table->text('shipping_address');
            $table->integer('cod_fee')->nullable();
            $table->enum('status', ['draft', 'order placed', 'packed', 'shipping', 'awaiting receipt', 'delivered', 'awaiting payment', 'completed', 'cancelled', 'declined', 'refunded', 'returns'])->default('order placed');
            $table->text('message_for_packer');
            $table->text('message_for_logistic');
            $table->integer('qty_amount');
            $table->decimal('weight');
            $table->bigInteger('amount');
            $table->text('note')->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('create_by_id')->references('id')->on('contacts');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->foreign('logistic_id')->references('id')->on('logistics');
            $table->foreign('logistic_service_id')->references('id')->on('logistic_services');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('order_has_taxes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('tax_id')->unsigned();
            $table->integer('tax_amount');
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('tax_id')->references('id')->on('taxes');
        });

        Schema::create('order_has_discount', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('discount_id')->unsigned();
            $table->integer('discount_amount');
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('discount_id')->references('id')->on('order_discounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_has_taxes');
        Schema::dropIfExists('order_has_discount');
    }
};
