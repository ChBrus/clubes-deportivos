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
        Schema::create('posicion', function (Blueprint $table) {
            $table->id();

            $table->char('nombre', 35);
            $table->foreignId('deporte_id')
                ->constrained('deporte')
                ->onDelete('cascade')
            ;

            $table->timestamps();

            $table->unique(['nombre', 'deporte_id'], 'unique_nombre_deporte');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posicion');
    }
};
