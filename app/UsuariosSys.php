<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosSys extends Model
{
    //
    protected $table = 'usuarios_sys';
    protected $fillable = array('nombre1','nombre2', 'apellido1','apellido2','cargo','nombre_firma', 'iniciales', 'estatus','nombre_usuario', 'contraseña', 'email', 'permisos');
    protected $hidden = array('contraseña');
    public $timestamps = true;
    //falta poner la relaciones con la tabla tramites

}
