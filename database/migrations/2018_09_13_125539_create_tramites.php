<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTramites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('datos_personales_id')->unsigned();
            $table->foreign('datos_personales_id')
                  ->references('id')
                  ->on('datos_personales')
                  ->onUpdate('cascade');
            $table->integer('tipo_tramite')->unsigned();
            $table->foreign('tipo_tramite')
                  ->references('id')
                  ->on('tipo_tramites')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('numero_salida');

            $table->integer('usuario_firma')->unsigned();
            $table->foreign('usuario_firma')
                  ->references('id')
                  ->on('usuarios_sys')
                  ->onUpdate('cascade');

            $table->longtext('texto_pdf');

            $table->integer('destino')->unsigned();
            $table->foreign('destino')
                  ->references('id')
                  ->on('destinos')
                  ->onUpdate('cascade');


            $table->integer('estatus')->unsigned();
            $table->foreign('estatus')
                  ->references('id')
                  ->on('tipo_estatus')
                  ->onUpdate('cascade');


            $table->binary('objeto');
            $table->longtext('observaciones');
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
        Schema::dropIfExists('tramites');
    }
}
