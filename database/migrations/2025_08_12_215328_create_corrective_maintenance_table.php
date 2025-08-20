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
        Schema::create('corrective_maintenance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('telephone');
            $table->string('vehicle_brand');
            $table->string('tuition');
            $table->date('maintenance_date');
            $table->string('faults_found');
            $table->string('maintenance_manager');
            $table->string('total');

            $table->integer('staff_id')->unsigned();
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corrective_maintenance');
    }
};
