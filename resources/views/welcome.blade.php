@extends('layouts.app')

@section('title','Bienvenido')

@section('navbar')
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ConsulVenBCN V2.0</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> Hola Username
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Configuración</a>
            <a class="dropdown-item" href="#"><i class="fas fa-key"></i> Cambiar Contraseña</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fas fa-sign-in-alt"></i> Cerrar Sesión</a></a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
@endsection

@section('sidebar')
  <nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="welcome">
            <i class="fas fa-home"></i>
            Dashboard <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/menu/usuariosSys">
            <i class="fas fa-users-cog"></i>
            Gestión de Usuarios del Sistema
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Gestión de Datos de Venezolanos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="far fa-id-card"></i>
            Modulo de Licencias
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="bar-chart-2"></span>
            Reportes
          </a>
        </li>
      </ul>

      <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Saved reports</span>
        <a class="d-flex align-items-center text-muted" href="#">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Year-end sale
          </a>
        </li>
      </ul> -->
    </div>
  </nav>
@endsection

@section('maincontent')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
      </div>
    </div>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    <h2>Section title</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Header</th>
            <th>Header</th>
            <th>Header</th>
            <th>Header</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1,001</td>
            <td>Lorem</td>
            <td>ipsum</td>
            <td>dolor</td>
            <td>sit</td>
          </tr>
          <tr>
            <td>1,002</td>
            <td>amet</td>
            <td>consectetur</td>
            <td>adipiscing</td>
            <td>elit</td>
          </tr>
          <tr>
            <td>1,003</td>
            <td>Integer</td>
            <td>nec</td>
            <td>odio</td>
            <td>Praesent</td>
          </tr>
          <tr>
            <td>1,003</td>
            <td>libero</td>
            <td>Sed</td>
            <td>cursus</td>
            <td>ante</td>
          </tr>
          <tr>
            <td>1,004</td>
            <td>dapibus</td>
            <td>diam</td>
            <td>Sed</td>
            <td>nisi</td>
          </tr>
          <tr>
            <td>1,005</td>
            <td>Nulla</td>
            <td>quis</td>
            <td>sem</td>
            <td>at</td>
          </tr>
          <tr>
            <td>1,006</td>
            <td>nibh</td>
            <td>elementum</td>
            <td>imperdiet</td>
            <td>Duis</td>
          </tr>
          <tr>
            <td>1,007</td>
            <td>sagittis</td>
            <td>ipsum</td>
            <td>Praesent</td>
            <td>mauris</td>
          </tr>
          <tr>
            <td>1,008</td>
            <td>Fusce</td>
            <td>nec</td>
            <td>tellus</td>
            <td>sed</td>
          </tr>
          <tr>
            <td>1,009</td>
            <td>augue</td>
            <td>semper</td>
            <td>porta</td>
            <td>Mauris</td>
          </tr>
          <tr>
            <td>1,010</td>
            <td>massa</td>
            <td>Vestibulum</td>
            <td>lacinia</td>
            <td>arcu</td>
          </tr>
          <tr>
            <td>1,011</td>
            <td>eget</td>
            <td>nulla</td>
            <td>Class</td>
            <td>aptent</td>
          </tr>
          <tr>
            <td>1,012</td>
            <td>taciti</td>
            <td>sociosqu</td>
            <td>ad</td>
            <td>litora</td>
          </tr>
          <tr>
            <td>1,013</td>
            <td>torquent</td>
            <td>per</td>
            <td>conubia</td>
            <td>nostra</td>
          </tr>
          <tr>
            <td>1,014</td>
            <td>per</td>
            <td>inceptos</td>
            <td>himenaeos</td>
            <td>Curabitur</td>
          </tr>
          <tr>
            <td>1,015</td>
            <td>sodales</td>
            <td>ligula</td>
            <td>in</td>
            <td>libero</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
@endsection
