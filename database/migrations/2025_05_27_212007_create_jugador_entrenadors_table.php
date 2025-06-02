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
        Schema::create('jugador_entrenador', function (Blueprint $table) {
            $table->foreignId('jugador_id')
                ->constrained('jugador')
                ->onDelete('cascade')
            ;

            $table->foreignId('entrenador_id')
                ->constrained('entrenador')
                ->onDelete('cascade')
            ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugador_entrenador');
    }
};
