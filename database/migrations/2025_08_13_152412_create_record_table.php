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
        Schema::create('record', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('telephone');
            $table->string('identification',20)->unique();
            $table->string('vehicle_brand');
            $table->date('date');
            $table->string('tution');
            $table->string('type_service');
            $table->string('who_register');

            $table->integer('inventory_id')->unsigned();
            $table->foreign('inventory_id')->references('id')->on('inventory')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoice')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('customer_information_id')->unsigned();
            $table->foreign('customer_information_id')->references('id')->on('customer_information')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('record');
    }
};
