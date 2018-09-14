<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoEstatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_estatus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_producto')->unsigned();
            $table->foreign('tipo_producto')
                  ->references('id')
                  ->on('tipo_productos')
                  ->onUpdate('cascade');

            $table->string('descripcion');
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
        Schema::dropIfExists('tipo_estatus');
    }
}
