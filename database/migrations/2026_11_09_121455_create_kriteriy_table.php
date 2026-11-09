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
        Schema::create('kriteriy', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_konkursa')->constrained('konkurs')->cascadeOnDelete();

            $table->string('naimenovanie_kriteriya', 255);
            
            $table->decimal('maksimalnyy_ball', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteriy');
    }
};
