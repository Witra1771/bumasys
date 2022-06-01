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
            $table->boolean('is_can_login')->default('false');
            $table->boolean('is_active')->default('true');
            $table->bigInteger('users_id')->unsigned();
            $table->enum('contact_type', ['Suppliers', 'Customers', 'Advertisers']);
            $table->boolean('is_individual')->default('true');
            $table->string('contact_id');
            $table->string('name');
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->bigInteger('groups_id')->unsigned();
            $table->bigInteger('address_provinces_id')->unsigned();
            $table->bigInteger('address_cities_id')->unsigned();
            $table->bigInteger('address_districts_id')->unsigned();
            $table->bigInteger('address_subdistricts_id')->unsigned();
            $table->text('address')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('address_provinces_id')->references('id')->on('address_provinces');
            $table->foreign('address_cities_id')->references('id')->on('address_cities');
            $table->foreign('address_districts_id')->references('id')->on('address_districts');
            $table->foreign('address_subdistricts_id')->references('id')->on('address_subdistricts');
            $table->foreign('groups_id')->references('id')->on('groups');
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
