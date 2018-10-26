@extends('welcome')

@section('title','Menú para Gestión de Usuario del Sistema')

@section('maincontent')
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Menú</h4>
    <div class="list-group">
      <a href="/menu/usuariosSys/create" class="list-group-item list-group-item-action"><i class="fas fa-user-plus"></i> Añadir Nuevo Usuario</a>
      <a href="/menu/search/usuariosSys" class="list-group-item list-group-item-action"><i class="fas fa-search"></i> Buscar Usuarios Existentes</a>
    </div>
  </div>
@endsection
