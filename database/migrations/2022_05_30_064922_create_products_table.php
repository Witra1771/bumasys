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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku')->nullable();
            $table->bigInteger('product_units_id')->unsigned();
            $table->bigInteger('product_brands_id')->unsigned();
            $table->bigInteger('product_categories_id')->unsigned();
            $table->integer('product_sub_categories_id')->nullable();
            $table->integer('weight')->nullable();
            $table->boolean('is_sale')->default(1);
            $table->boolean('is_managed_stock')->default(0);
            $table->integer('alert_quantity')->nullable();
            $table->text('description')->nullable();
            $table->text('image_path')->nullable();
            $table->text('brochure_path')->nullable();
            $table->enum('product_type', ['single', 'variable', 'combo'])->default('single');
            $table->json('variants')->nullable(); // ['variant_id' => '1,2', 'variant_name_generate' => 'variant value 1 + 2' ]
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_brands_id')->references('id')->on('product_brands');
            $table->foreign('product_categories_id')->references('id')->on('product_categories');
            $table->foreign('product_units_id')->references('id')->on('product_units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
