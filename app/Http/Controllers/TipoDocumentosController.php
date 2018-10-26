<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDocumentos;

class TipoDocumentosController extends Controller
{
    //
  public function index()
  {
    $tipoDocumentos = TipoDocumentos::all()->sortBy('descripcion');
    $result ='<option value=0>Seleccione...</option>';
    foreach ($tipoDocumentos as $tipoDocumento) {
      $result .= '<option value='.$tipoDocumento->id.'>'.$tipoDocumento->descripcion.'</option>';
    }
    return $result;
  }
  public function show($id)
  {
    $tipoDocumento = TipoDocumentos::findOrFail($id);
    $result = '<option value='.$tipoDocumento->id.'>'.$tipoDocumento->descripcion.'</option>';
    $tipoDocumentos = TipoDocumentos::all()->whereNotIn('id',$id)->sortBy('descripcion');
    foreach ($tipoDocumentos as $tipoDocumento) {
      $result .= '<option value='.$tipoDocumento->id.'>'.$tipoDocumento->descripcion.'</option>';
    }
    return $result;
  }
  public function __call($method, $arguments)
  {
    abort(404);
  }
}
