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
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_number')->unique();
            $table->string('customer_name');
            $table->string('telephone');
            $table->date('date');
            $table->string('type_service');
            $table->string('ruc_number');
            $table->string('workshop_name');
            $table->string('employee_name');
            $table->string('unit_price');
            $table->string('total');

            $table->integer('corrective_maintenance_id')->unsigned();
            $table->foreign('corrective_maintenance_id')->references('id')->on('corrective_maintenances')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('repair_id')->unsigned();
            $table->foreign('repair_id')->references('id')->on('repairs')->onDelete('cascade')->onUpdate('cascade');

          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
