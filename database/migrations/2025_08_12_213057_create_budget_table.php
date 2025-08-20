<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('budget', function (Blueprint $table) {
            $table->increments('id');
            $table->string('workshop_name');
            $table->string('address');
            $table->string('telephone');
            $table->string('registration_code', 20)->unique();
            $table->string('customer_name');
            $table->string('vehicle_brand');
            $table->year('year');
            $table->string('mileage');
            $table->string('model');
            $table->string('tuition');
            $table->string('description_repairs');
            $table->string('parts_list');
            $table->string('labour');
            $table->string('budget_validity');
            $table->string('delivery_time');
            $table->string('total_price');

            $table->integer('vehicle_information_id')->unsigned();
            $table->foreign('vehicle_information_id')->references('id')->on('vehicle_information')->onDelete('cascade')->onUpdate('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budget');
    }
};
