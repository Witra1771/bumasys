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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('group_id')->unsigned();
            $table->bigInteger('company_id')->unsigned();
            $table->boolean('is_can_login')->default(false);
            $table->boolean('is_active')->default(true);
            $table->enum('contact_type', ['Suppliers', 'Customers', 'Advertisers']);
            $table->boolean('is_individual')->default(true);
            $table->string('contact_id');
            $table->string('name');
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('address_provincy_id');
            $table->string('address_city_id');
            $table->string('address_district_id');
            $table->string('address_subdistrict_id');
            $table->text('address')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('group_id')->references('id')->on('contact_groups');
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
        Schema::dropIfExists('contacts');
    }
};
