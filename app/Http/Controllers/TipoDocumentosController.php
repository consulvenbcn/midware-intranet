<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDocumentos;

class TipoDocumentosController extends Controller
{
    //
  public function index()
  {
    $tipoDocumentos = TipoDocumentos::all();
    $result ='<option value=0>Seleccione...</option>';
    foreach ($tipoDocumentos as $tipoDocumento) {
      $result .= '<option value='.$tipoDocumento->id.'>'.$tipoDocumento->descripcion.'</option>';
    }
    echo $result;
  }
  public function show($id)
  {
    $tipoDocumentos = TipoDocumentos::findOrFail($id);
    $result ='<option value=0>Seleccione...</option>';
    foreach ($tipoDocumentos as $tipoDocumento) {
      $result .= '<option value='.$tipoDocumento->id.'>'.$tipoDocumento->descripcion.'</option>';
    }
    echo $result;
  }
}
