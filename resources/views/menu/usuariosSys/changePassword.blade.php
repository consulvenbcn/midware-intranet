@extends('welcome')

@section('title','Restablecer Contraseña de Usuario del Sistema')

@section('maincontent')
<div class="col-md-8 order-md-1">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/menu/usuariosSys">Menú</a></li>
      <li class="breadcrumb-item"><a href="/menu/search/usuariosSys">Buscar Usuario</a></li>
      <li class="breadcrumb-item active" aria-current="page">Restablecer Contraseña</li>
    </ol>
  </nav>
  @isset($alertType)
  <div class="alert alert-{{$alertType}} alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">{{$alertTitle}}</h4>
    <strong>{{$alertMessageStrong}}</strong> {{$alertMessage}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endisset
  <h4 class="mb-3">Restablecer Contraseña de Usuario en el Sistema</h4>
  <form id="passwordUsuarioSysForm" action="/menu/password/usuariosSys/{{$id}}" method="post">
    @csrf
    @method('PUT')
    <h5 class="mb-3"><strong>Nombre de Usuario:</strong> {{$nombre_usuario}}</h5>
    <div class="row">
       <div class="col-md-6 mb-3">
         <label for="contraseña">Contraseña Temporal</label>
         <input type="text" name='contraseña' class="form-control" id="contraseña" placeholder="ej. cambiar1234" value="" />
       </div>
       <div class="col-md-6 mb-3">
         <label for="reContraseña">Repetir Contraseña</label>
         <input type="text" name='reContraseña' class="form-control" id="reContraseña" placeholder="ej. cambiar1234" value="" />
       </div>
    </div>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Cambiar</button>
  </form>
 </div>
 <script src="{{ URL::asset('js/validation.js') }}"></script>
</div>
@endsection
