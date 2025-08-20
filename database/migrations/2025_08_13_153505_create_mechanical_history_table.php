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
        Schema::create('mechanical_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('vehicle_brand');
            $table->string('maintenance_list');
            $table->string('last_check');
            $table->string('repair_log');
            $table->string('accident_damage');
            $table->string('odometer_reading');

            $table->integer('record_id')->unsigned();
            $table->foreign('record_id')->references('id')->on('record')->onDelete('cascade')->onUpdate('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanical_history');
    }
};
