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
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('code_staff',20)->unique();
            $table->string('position_company');
            $table->string('gender',10);
            $table->string('telephone');
            $table->string('identification',20)->unique();
            $table->string('birthday_date');
            $table->string('age');
            $table->string('academic_level');
            $table->string('address');
            $table->string('marital_status');
            $table->string('blood_type');
            $table->string('ethnicity');
            $table->string('nationality');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
