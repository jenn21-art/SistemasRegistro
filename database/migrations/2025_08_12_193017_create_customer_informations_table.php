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
        Schema::create('customer_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('vehicle_brand');
            $table->string('code');
            $table->string('tuition');
            $table->string('identification',20)->unique();
            $table->string('address');
            $table->string('telephone',16)->unique();
            $table->string('gender',10);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_informations');
    }
};
