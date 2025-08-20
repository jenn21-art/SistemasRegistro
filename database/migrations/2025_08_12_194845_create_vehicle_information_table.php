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
        Schema::create('vehicle_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('brand');
            $table->string('chassis_number');
            $table->string('tuition');
            $table->string('type_suspension');
            $table->string('weight');
            $table->string('repairs');
            $table->year('year');
            $table->string('maintenance');
            $table->string('mileage');
            $table->string('type_paint');
            $table->string('body_type');
            $table->string('type_parts');
            $table->string('engine');
            $table->string('transmission');
            $table->string('brakes');

         

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_information');
    }
};
