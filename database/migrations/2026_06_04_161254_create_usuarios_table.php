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
    Schema::create('usuarios', function (Blueprint $table) {

        $table->id('id_usuario');

        $table->string('nombre',100);
        $table->string('apellido',100);

        $table->string('correo',100)->unique();

        $table->string('contrasena_hash');

        $table->string('telefono',20)->nullable();

        $table->enum('estado',[
            'activo',
            'inactivo'
        ])->default('activo');

        $table->unsignedBigInteger('id_rol');

        $table->timestamp('fecha_creacion')
              ->useCurrent();

        $table->timestamp('fecha_actualizacion')
              ->useCurrent()
              ->useCurrentOnUpdate();

        $table->foreign('id_rol')
              ->references('id_rol')
              ->on('roles');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
