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
        Schema::create('club_deporte', function (Blueprint $table) {
            $table->foreignId('club_id')
                ->constrained('club')
                ->onDelete('cascade')
            ;

            $table->foreignId('deporte_id')
                ->constrained('deporte')
                ->onDelete('cascade')
            ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club_deporte');
    }
};
