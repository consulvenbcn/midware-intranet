<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosSys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_sys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre1',45);
            $table->string('nombre2',45)->nullable();
            $table->string('apellido1',45);
            $table->string('apellido2',45)->nullable();
            $table->string('cargo',45);
            $table->string('nombre_firma',180);
            $table->string('iniciales',8);
            $table->boolean('estatus');
            $table->string('nombre_usuario',20);
            $table->string('contraseña',16);
            $table->string('email',100);
            $table->binary('permisos');
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
        Schema::dropIfExists('usuarios_sys');
    }
}
