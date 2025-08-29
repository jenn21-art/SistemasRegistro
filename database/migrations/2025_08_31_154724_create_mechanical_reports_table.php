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
        Schema::create('mechanical_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('code', 20)->unique();
            $table->string('engine');
            $table->string('transmission_system');
            $table->string('brake_system');
            $table->string('suspension');
            $table->string('electrical_system');
            $table->string('bodywork');
            $table->string('chassis');
            $table->string('repairs');
            $table->string('equipment_used');
            $table->string('recommendations');
            $table->string('in_charge');

            $table->integer('record_id')->unsigned();
            $table->foreign('record_id')->references('id')->on('records')->onDelete('cascade')->onUpdate('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanical_reports');
    }
};
