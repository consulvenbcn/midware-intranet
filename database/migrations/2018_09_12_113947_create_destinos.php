<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_destino')->unsigned();
            $table->foreign('tipo_destino')
                  ->references('id')
                  ->on('tipo_destinos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('nombre',50);
            $table->string('localidad',45);
            $table->longtext('direccion',250)->nullable();
            $table->string('email',100)->nullable();
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
        Schema::dropIfExists('destinos');
    }
}
