<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre1',25);
            $table->string('nombre2',45)->nullable();
            $table->string('apellido1',25);
            $table->string('apellido2',45)->nullable();
            $table->string('genero',1);
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento',70);
            $table->string('nacionalidad',50);
            $table->integer('usuario_reg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_personales');
    }
}
