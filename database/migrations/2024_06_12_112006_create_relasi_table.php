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
        Schema::create('relasi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_stress',4);
            $table->string('kode_gejala',4);
            $table->double('mb');
            $table->double('md');
            $table->timestamps();

            // Define Foreign Key
            $table->foreign('kode_stress')->references('kode_stress')->on('tingkat_stress')->onDelete('cascade');
            $table->foreign('kode_gejala')->references('kode_gejala')->on('gejala')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relasi');
    }
};
