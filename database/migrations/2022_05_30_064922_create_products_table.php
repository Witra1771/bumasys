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
            $table->bigInteger('company_id')->unsigned();
            $table->string('name');
            $table->string('sku')->nullable();
            $table->bigInteger('product_unit_id')->unsigned();
            $table->bigInteger('product_brand_id')->unsigned();
            $table->bigInteger('product_category_id')->unsigned();
            $table->bigInteger('product_sub_category_id')->unsigned();
            $table->bigInteger('product_warranty_id')->unsigned();
            $table->decimal('weight', 8, 2)->nullable();
            $table->boolean('is_sale')->default(true);
            $table->boolean('is_managed_stock')->default(false);
            $table->integer('alert_quantity')->nullable();
            $table->text('description')->nullable();
            $table->text('image_path')->nullable();
            $table->text('brochure_path')->nullable();
            $table->enum('product_type', ['single', 'variable', 'package'])->default('single');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_brand_id')->references('id')->on('product_brands');
            $table->foreign('product_category_id')->references('id')->on('product_categories');
            $table->foreign('product_sub_category_id')->references('id')->on('product_categories');
            $table->foreign('product_unit_id')->references('id')->on('product_units');
            $table->foreign('product_warranty_id')->references('id')->on('product_warranties');
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
        Schema::dropIfExists('products');
    }
};
