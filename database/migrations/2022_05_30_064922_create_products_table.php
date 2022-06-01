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
            $table->bigInteger('companies_id')->unsigned();
            $table->string('name');
            $table->string('sku')->nullable();
            $table->bigInteger('product_units_id')->unsigned();
            $table->bigInteger('product_brands_id')->unsigned();
            $table->bigInteger('product_categories_id')->unsigned();
            $table->bigInteger('product_sub_categories_id')->nullable();
            $table->bigInteger('warranties_id')->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->boolean('is_sale')->default(true);
            $table->boolean('is_managed_stock')->default(false);
            $table->integer('alert_quantity')->nullable();
            $table->text('description')->nullable();
            $table->text('image_path')->nullable();
            $table->text('brochure_path')->nullable();
            $table->enum('product_type', ['single', 'variable', 'package'])->default('single');
            $table->json('variants')->nullable(); // ['variant_id' => '1,2', 'variant_name_generate' => 'variant value 1 + 2' ]
            $table->json('list_product_id')->nullable(); // if product_type == combo
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_brands_id')->references('id')->on('product_brands');
            $table->foreign('product_categories_id')->references('id')->on('product_categories');
            $table->foreign('product_units_id')->references('id')->on('product_units');
            $table->foreign('warranties_id')->references('id')->on('warranties');
            $table->foreign('companies_id')->references('id')->on('companies');
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
