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
        Schema::create('logistic_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('logistic_id')->unsigned();
            $table->string('name');
            $table->boolean('is_require_receipt')->default(false);
            $table->integer('cod_fee');
            $table->integer('discount_fee');
            $table->text('return_fee_formula');
            $table->foreign('logistic_id')->references('id')->on('logistics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logistic_services');
    }
};
