@extends('welcome')

@section('title','Buscar Usuario del Sistema')

@section('maincontent')
<div class="col-md-8 order-md-1">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/menu/usuariosSys">Menú</a></li>
      <li class="breadcrumb-item active" aria-current="page">Buscar Usuario</li>
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
  <h4 class="mb-3">Registro de Usuarios en el Sistema</h4>
  <form id="searchUsuarioSysForm" action="/menu/search/usuariosSys" method="POST">
    @csrf
    <div class="row">
       <div class="col-md-6 mb-3">
         <label for="nombre1">Primer Nombre</label>
         <input type="text" name='nombre1' class="form-control" id="nombre1" placeholder="ej. Pedro" value="" />
       </div>
       <div class="col-md-6 mb-3">
         <label for="apellido1">Primer Apellido</label>
         <input type="text" name='apellido1' class="form-control" id="apellido1" placeholder="ej. Perez" value="" />
       </div>
    </div>
    <div class="row">
       <div class="col-md-12 mb-3">
         <label for="nombre_usuario">Nombre de Usuario</label>
         <input type="text" name="nombre_usuario" class="form-control" id="nombre_usuario" placeholder="ej. pedro.perez" value="" />
       </div>
    </div>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Buscar</button>
  </form>
  @isset($results)
  <h4 class="mb-3">Resultado de la Busqueda</h4>
  <div class="table table-striped table-responsive-md">
    <table class="table">
      <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Primer Nombre</th>
         <th scope="col">Primer Apellido</th>
         <th scope="col">Nombre de Usuario</th>
         <th scope="col">Estatus</th>
         <th scope="col">Opciones</th>
       </tr>
     </thead>
      <tbody>
        @foreach ($results as $result)
          <tr>
            <th scope="row">{{$result->id}}</th>
            <td>{{$result->nombre1}}</td>
            <td>{{$result->apellido1}}</td>
            <td>{{$result->nombre_usuario}}</td>
            @if($result->estatus === 1)
              <td>Activo</td>
            @else
              <td>Inactivo</td>
            @endif
            <td>
              <a href="/menu/usuariosSys/{{$result->id}}/edit" class="btn btn-outline-primary btn-sm" title="Modificar"><i class="far fa-edit"></i></a>
              <a href="/menu/password/usuariosSys/{{$result->id}}" class="btn btn-outline-primary btn-sm" title="Restablecer contraseña"><i class="fas fa-key"></i></a>
              <a href="/menu/usuariosSys/{{$result->id}}" class="btn btn-outline-primary btn-sm" title="Reporte"><i class="fas fa-print"></i></a>
              @if($result->estatus === 1)
                <form action="{{action('UsuariosSysController@destroy', $result->id)}}" method="post">
                  @csrf
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-outline-primary btn-sm" type="submit" title="Eliminar"><i class="far fa-trash-alt"></i></button>
                </form>
              @else
                <form action="{{action('UsuariosSysController@destroy', $result->id)}}" method="post">
                  @csrf
                  <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-outline-primary btn-sm" type="submit" title="Reactivar"><i class="far fa-thumbs-up"></i></button>
                </form>
                <a href="#" id="deleteUsuariosSys" data-id="{{$result->id}}" ></a>
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endisset
 </div>
 <script src="{{ URL::asset('js/validation.js') }}"></script>
</div>
@endsection
