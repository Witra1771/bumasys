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
        Schema::create('contact_groups', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('companies_id')->unsigned();
            $table->enum('group_type', ['Suppliers', 'Customers', 'Advertisers']);
            $table->string('name');
            $table->text('description')->nullable();
            $table->bigInteger('selling_price_groups_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('selling_price_groups_id')->references('id')->on('selling_price_groups');
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
        Schema::dropIfExists('groups');
    }
};
