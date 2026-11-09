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
        Schema::create('uchastnik', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_persony')->constrained('persona')->restrictOnDelete();

            $table->foreignId('id_konkursa')->constrained('konkurs')->cascadeOnDelete();

            $table->string('naimenovanie_konkursnoy_raboty', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uchastnik');
    }
};
