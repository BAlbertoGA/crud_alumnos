<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ url('/') }}">Inicio</a>
          <a class="dropdown-item" href="{{ url('/alumnos/create') }}">Agregar alumno</a>
          <a class="dropdown-item" href="{{ url('/escuelas') }}">Lista Escuelas</a>
          <a class="dropdown-item" href="{{ url('/escuelas/create') }}">Agregar Escuela</a>
        </div>
      </div>  
    </li>
  </ul>
</nav>
<!-- /.navbar -->