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
        Schema::create('club', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pais_id')
                ->constrained('pais')
                ->onDelete('cascade')
            ;

            $table->char('nombre', 50)->unique();
            $table->char('direccion', 100);
            $table->char('telefono', 20)->nullable();
            $table->char('email', 50)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club');
    }
};
