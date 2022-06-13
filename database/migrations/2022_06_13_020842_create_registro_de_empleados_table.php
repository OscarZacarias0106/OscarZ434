<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroDeEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_de_empleados', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_empleado');
            $table->string('nombre_empleado');
            $table->string('numero_telefono');
            $table->string('correo');
            $table->string('direccion', 100);
            $table->string('departamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_de_empleados');
    }


}
