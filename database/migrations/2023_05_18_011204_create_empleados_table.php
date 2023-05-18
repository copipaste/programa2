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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('cedula', 100);
            $table->string('telefono', 20);
            $table->string('direccion', 100);
            $table->string('email', 50);
          //  $table->string('especialidad', 100);
          $table->unsignedBigInteger('especialidad_id');
            $table->date('fecha_ingreso', 100);
            $table->timestamps();
            $table->foreign('especialidad_id')->references('id')->on('especialidads')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
