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
        Schema::create('tool', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('brand');
            $table->string('company');
            $table->string('supplier');
            $table->date('entry_date');
            $table->string('code', 20)->unique();
            $table->string('who_receives');

            $table->integer('inventory_id')->unsigned();
            $table->foreign('inventory_id')->references('id')->on('inventory')->onDelete('cascade')->onUpdate('cascade');






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tool');
    }
};
