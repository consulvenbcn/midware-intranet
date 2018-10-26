@extends('welcome')

@section('title','Registrar Usuario del Sistema')

@section('maincontent')
           <div class="col-md-8 order-md-1">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="/menu/usuariosSys">Menú</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Registrar Usuario</li>
                        </ol>
                      </nav>
           @switch($alertType)
                      @case("danger")
                                 <div class="alert alert-{{$alertType}} alert-dismissible fade show" role="alert">
                                   <h4 class="alert-heading">{{$alertTitle}}</h4>
                                   <strong>{{$alertMessageStrong}}</strong> {{$alertMessage}}
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <h4 class="mb-3">Registro de Usuarios en el Sistema</h4>
                                 <form id="usuarioSysForm" action="/menu/usuariosSys" method="post">
                                   @csrf
                                   <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="nombre1">Primer Nombre</label>
                                        <input type="text" name='nombre1' class="form-control" id="nombre1" placeholder="ej. Pedro" value="{{$data->nombre1}}" />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="nombre2">Segundo Nombre</label>
                                        <input type="text" name='nombre2' class="form-control" id="nombre2" placeholder="ej. de Pablo" value="{{$data->nombre2}}" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="apellido1">Primer Apellido</label>
                                        <input type="text" name="apellido1" class="form-control" id="apellido1" placeholder="ej. Perez" value="{{$data->apellido1}}" />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="apellido2">Segundo Apellido</label>
                                        <input type="text" name="apellido2" class="form-control" id="apellido2" placeholder="ej. Paez" value="{{$data->apellido2}}" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-12 md-3">
                                        <label for="cargo">Cargo</label>
                                        <input type="text" name="cargo" class="form-control" id="cargo" placeholder="ej. Consul de Primera" value="{{$data->cargo}}" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-12 md-3">
                                        <label for="nombre_firma">Nombre de Firma</label>
                                        <input type="text" name="nombre_firma" class="form-control" id="nombre_firma" placeholder="ej. Pedro P. Perez P." value="{{$data->nombre_firma}}" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="nombre_usuario">Nombre de Usuario</label>
                                        <input type="text" name="nombre_usuario" class="form-control" id="nombre_usuario" placeholder="ej. pedro.perez" value="{{$data->nombre_usuario}}" />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="contraseña">Contraseña Temporal</label>
                                        <input type="text" name="contraseña" class="form-control" id="contraseña" placeholder="ej. cambiar1234" value="{{$data->contraseña}}" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-lg-12 md-3">
                                        <label for="email">Correo electronico</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="ej. p.perez@ejemplo.com" value="{{$data->email}}" />
                                      </div>
                                   </div>
                                   <h6 class="mb-3">Permisos</h6>
                                   <hr class="mb-4">
                                   <div class="row">
                                     <div class="col-md-4">
                                       <label for="adminPermisos">Administrador</label>
                                       @switch($data->adminPermisos)
                                           @case(0)
                                                      <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="1" />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="2" />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="0" checked />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                     </div>
                                               @break
                                          @case(1)
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="1" checked />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="2" />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="0" />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                     </div>
                                               @break

                                          @case(2)
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="1" />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="2" checked />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="0" />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                     </div>
                                               @break

                                          @default
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="1" />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="2" />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="0" />
                                                         <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                     </div>
                                          @endswitch
                                      </div>
                                      <div class="col-md-4">
                                        <label for="regPersonasPermisos">Registro de Personas</label>
                                        @switch($data->regPersonasPermisos)
                                        @case(0)
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="1" />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="2" />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="0" checked />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                    </div>
                                                    @break
                                        @case(1)
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="1" checked />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="2" />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="0" />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                    </div>
                                                    @break
                                        @case(2)
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="1" />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="2" checked />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="0" />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                    </div>
                                                    @break
                                        @default
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="1" />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="2" />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="0" />
                                                        <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                    </div>
                                        @endswitch
                                       </div>
                                       <div class="col-md-4">
                                        <label for="licenciasPermisos">Modulo de Licencias</label>
                                           @switch($data->licenciasPermisos)
                                                    @case(0)
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="1" />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                               </div>
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="2" />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                               </div>
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="0" checked />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                               </div>
                                                               @break
                                                    @case(1)
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="1" checked />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                               </div>
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="2" />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                               </div>
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="0" />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                               </div>
                                                               @break
                                                    @case(2)
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="1" />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                               </div>
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="2" checked />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                               </div>
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="0" />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                               </div>
                                                               @break
                                                    @default
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="1" />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                                               </div>
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="2" />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                                               </div>
                                                               <div class="form-check">
                                                                   <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="0" />
                                                                   <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                                               </div>
                                           @endswitch
                                        </div>
                                   </div>
                                   <hr class="mb-4">
                                   <button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>
                                 </form>

                                </div>
                                <script src="../../js/validation.js"></script>
                                 @break
                      @case("success")
                                 <div class="alert alert-{{$alertType}} alert-dismissible fade show" role="alert">
                                   <h4 class="alert-heading">{{$alertTitle}}</h4>
                                   <strong>{{$alertMessageStrong}}</strong> {{$alertMessage}}
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <h4 class="mb-3">Registro de Usuarios en el Sistema</h4>
                                 <form id="usuarioSysForm" action="/menu/usuariosSys" method="post">
                                   @csrf
                                   <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="nombre1">Primer Nombre</label>
                                        <input type="text" name='nombre1' class="form-control" id="nombre1" placeholder="ej. Pedro" value="" />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="nombre2">Segundo Nombre</label>
                                        <input type="text" name='nombre2' class="form-control" id="nombre2" placeholder="ej. de Pablo" value="" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="apellido1">Primer Apellido</label>
                                        <input type="text" name="apellido1" class="form-control" id="apellido1" placeholder="ej. Perez" value="" />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="apellido2">Segundo Apellido</label>
                                        <input type="text" name="apellido2" class="form-control" id="apellido2" placeholder="ej. Paez" value="" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-12 md-3">
                                        <label for="cargo">Cargo</label>
                                        <input type="text" name="cargo" class="form-control" id="cargo" placeholder="ej. Consul de Primera" value="">
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-12 md-3">
                                        <label for="nombre_firma">Nombre de Firma</label>
                                        <input type="text" name="nombre_firma" class="form-control" id="nombre_firma" placeholder="ej. Pedro P. Perez P." value="">
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="nombre_usuario">Nombre de Usuario</label>
                                        <input type="text" name="nombre_usuario" class="form-control" id="nombre_usuario" placeholder="ej. pedro.perez" value="" />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="contraseña">Contraseña Temporal</label>
                                        <input type="text" name="contraseña" class="form-control" id="contraseña" placeholder="ej. cambiar1234" value="" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-lg-12 md-3">
                                        <label for="email">Correo electronico</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="ej. p.perez@ejemplo.com" value="">
                                      </div>
                                   </div>
                                   <h6 class="mb-3">Permisos</h6>
                                   <hr class="mb-4">
                                   <div class="row">
                                    <div class="col-md-4">
                                       <label for="adminPermisos">Administrador</label>
                                         <div class="form-check">
                                             <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="1">
                                             <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                         </div>
                                         <div class="form-check">
                                             <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="2">
                                             <label for="adminPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                         </div>
                                         <div class="form-check">
                                             <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="0">
                                             <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                         </div>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="regPersonasPermisos">Registro de Personas</label>
                                         <div class="form-check">
                                              <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="1">
                                              <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                         </div>
                                         <div class="form-check">
                                              <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="2">
                                              <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                         </div>
                                         <div class="form-check">
                                              <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="0">
                                              <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                         </div>
                                       </div>
                                       <div class="col-md-4">
                                         <label for="licenciasPermisos">Modulo de Licencias</label>
                                           <div class="form-check">
                                               <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="1">
                                               <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                           </div>
                                           <div class="form-check">
                                               <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="2">
                                               <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                           </div>
                                           <div class="form-check">
                                               <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="0">
                                               <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                           </div>
                                        </div>
                                   </div>
                                   <hr class="mb-4">
                                   <button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>
                                 </form>

                                </div>
                                <script src="../../js/validation.js"></script>
                                 @break
                      @default
                                 <h4 class="mb-3">Registro de Usuarios en el Sistema</h4>
                                 <form id="usuarioSysForm" action="/menu/usuariosSys" method="post">
                                   @csrf
                                   <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="nombre1">Primer Nombre</label>
                                        <input type="text" name='nombre1' class="form-control" id="nombre1" placeholder="ej. Pedro" value="" />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="nombre2">Segundo Nombre</label>
                                        <input type="text" name='nombre2' class="form-control" id="nombre2" placeholder="ej. de Pablo" value="" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="apellido1">Primer Apellido</label>
                                        <input type="text" name="apellido1" class="form-control" id="apellido1" placeholder="ej. Perez" value="" />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="apellido2">Segundo Apellido</label>
                                        <input type="text" name="apellido2" class="form-control" id="apellido2" placeholder="ej. Paez" value="" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-12 md-3">
                                        <label for="cargo">Cargo</label>
                                        <input type="text" name="cargo" class="form-control" id="cargo" placeholder="ej. Consul de Primera" value="">
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-12 md-3">
                                        <label for="nombre_firma">Nombre de Firma</label>
                                        <input type="text" name="nombre_firma" class="form-control" id="nombre_firma" placeholder="ej. Pedro P. Perez P." value="">
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="nombre_usuario">Nombre de Usuario</label>
                                        <input type="text" name="nombre_usuario" class="form-control" id="nombre_usuario" placeholder="ej. pedro.perez" value="" />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="contraseña">Contraseña Temporal</label>
                                        <input type="text" name="contraseña" class="form-control" id="contraseña" placeholder="ej. cambiar1234" value="" />
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-lg-12 md-3">
                                        <label for="email">Correo electronico</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="ej. p.perez@ejemplo.com" value="">
                                      </div>
                                   </div>
                                   <h6 class="mb-3">Permisos</h6>
                                   <hr class="mb-4">
                                   <div class="row">
                                    <div class="col-md-4">
                                       <label for="adminPermisos">Administrador</label>
                                         <div class="form-check">
                                             <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="1">
                                             <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                         </div>
                                         <div class="form-check">
                                             <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="2">
                                             <label for="adminPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                         </div>
                                         <div class="form-check">
                                             <input type="radio" class="form-check-input" name="adminPermisos" id="adminPermisos" value="0">
                                             <label for="adminPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                         </div>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="regPersonasPermisos">Registro de Personas</label>
                                         <div class="form-check">
                                              <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="1">
                                              <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                         </div>
                                         <div class="form-check">
                                              <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="2">
                                              <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                         </div>
                                         <div class="form-check">
                                              <input type="radio" class="form-check-input" name="regPersonasPermisos" id="regPersonasPermisos" value="0">
                                              <label for="regPersonasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                         </div>
                                       </div>
                                       <div class="col-md-4">
                                         <label for="licenciasPermisos">Modulo de Licencias</label>
                                           <div class="form-check">
                                               <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="1">
                                               <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-tie"></i> Admin</label>
                                           </div>
                                           <div class="form-check">
                                               <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="2">
                                               <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user"></i> Usuario</label>
                                           </div>
                                           <div class="form-check">
                                               <input type="radio" class="form-check-input" name="licenciasPermisos" id="licenciasPermisos" value="0">
                                               <label for="licenciasPermisos" class="form-check-label"><i class="fas fa-user-slash"></i> Sin Permiso</label>
                                           </div>
                                        </div>
                                   </div>
                                   <hr class="mb-4">
                                   <button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>
                                 </form>

                                </div>
                                <script src="{{ URL::asset('js/validation.js') }}"></script>
           @endswitch

@endsection
