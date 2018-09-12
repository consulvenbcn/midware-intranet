<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoDocumentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('documentos');
      Schema::create('tipo_documentos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('descripcion');
      });
      Schema::create('documentos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('datos_personales_id')->unsigned();
          $table->foreign('datos_personales_id')
                ->references('id')
                ->on('datos_personales')
                ->onDelete('cascade')
                ->onUpdate('cascade');
          $table->integer('tipo_documento');
          $table->string('numero_documento',10);
          $table->string('letra',1)->nullable();
          $table->date('fecha_expedicion')->nullable();
          $table->date('fecha_vencimiento');
          $table->date('fecha_origen');
          $table->binary('archivo_pdf')->nullable();
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
        //
        Schema::dropIfExists('documentos');
        Schema::dropIfExists('tipo_documentos');
    }
}
