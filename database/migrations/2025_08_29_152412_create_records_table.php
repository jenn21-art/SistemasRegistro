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
        Schema::create('records', function (Blueprint $table) {
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
            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('customer_information_id')->unsigned();
            $table->foreign('customer_information_id')->references('id')->on('customer_informations')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
