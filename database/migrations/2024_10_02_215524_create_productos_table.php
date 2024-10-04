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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');          // Columna para el nombre del producto
            $table->text('descripcion')->nullable();  // Columna para la descripción (puede ser nula)
            $table->decimal('precio', 8, 2);   // Columna para el precio del producto
            $table->integer('stock');          // Columna para el stock del producto
            $table->timestamps();              // Columnas de timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

