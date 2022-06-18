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
            $table->boolean('is_verified')->default(false);
            $table->enum('contact_type', ['Suppliers', 'Customers', 'Partner', 'Employee']);
            $table->boolean('is_individual')->default(true);
            $table->string('name');
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('sub_district');
            $table->string('zip_code');
            $table->text('address');
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
