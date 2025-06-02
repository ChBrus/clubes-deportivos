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
        Schema::create('contacto_club', function (Blueprint $table) {
            $table->id();
            $table->foreignId('club_id')
                ->constrained('club')
                ->onDelete('cascade')
            ;

            $table->enum('tipo', ['telefono', 'email', 'web', 'otro'])
                ->default('telefono')
                ->comment('Tipo de contacto: telefono, email, web u otro');
            $table->char('contacto', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacto_club');
    }
};
