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
        Schema::create('ocenka', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_uchastnika')->constrained('uchastnik')->cascadeOnDelete();

            $table->foreignId('id_jury')->constrained('jury')->cascadeOnDelete();

            $table->foreignId('id_kriteriya')->constrained('kriteriy')->cascadeOnDelete();

            $table->decimal('ball', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocenka');
    }
};
