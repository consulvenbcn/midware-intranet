@extends('layouts.app')

@section('title','Inicio de Sesión')

@section('maincontent')
<div class="mx-auto text-center" style="width: 40%; margin-top: 10%;">
  <form class="form-signin">
      <img class="mb-4" src="/images/logo.png" alt="" width="72" height="72">
      <h6>Consulado General de la <strong>República Bolivariana de Venezuela</strong> en <strong>Barcelona Reino de España</strong></h3>
      <h1 class="h3 mb-3 font-weight-normal">Por Favor Inicie Sesión</h1>
      <label for="username" class="sr-only">Nombre de usuario</label>
      <input type="text" id="username" class="form-control" placeholder="Nombre de usuario" required autofocus>
      <label for="password" class="sr-only">Contraseña</label>
      <input type="password" id="password" class="form-control" placeholder="Contraseña" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recuerdame
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar <i class="fas fa-sign-in-alt"></i></button>
      <p class="mt-5 mb-3 text-muted">&copy; ConsulVenBCN V2.0 - 2018</p>
    </form>
</div>

@endsection
