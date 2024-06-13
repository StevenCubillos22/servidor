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
        if (!Schema::hasTable('actividades_equipos')) {
            Schema::create('actividades_equipos', function (Blueprint $table) {
                $table->id();
                $table->foreignId('actividad_id')->constrained()->onDelete('cascade');
                $table->foreignId('equipo_id')->constrained()->onDelete('cascade');
                $table->timestamps();
            });

        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades_equipos');
    }
};
