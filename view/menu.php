<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!-- <img class="rounded-3" id="logo" src="img/logo.ico"  style=" max-width: 80px; max-height: 80px"> -->
<div class="container-fluid">
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="<?php echo constant('URL'); ?>main">Inicio</a>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Cursos
      </a>
      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
        <li> <a class="dropdown-item" href="<?php echo constant('URL'); ?>cursos">Consulta</a></li>
        <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>cursos/crear">Crear</a></li>
      </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Grupos
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <li> <a class="dropdown-item" href="<?php echo constant('URL'); ?>grupos">Consulta</a></li>
          <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>grupos/crear">Crear</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Estudiantes
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>estudiantes">Consulta</a></li>
          <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>estudiantes/crear">Crear</a></li>
        </ul>
      </li>  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Profesores
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <li> <a class="dropdown-item" href="<?php echo constant('URL'); ?>profesores">Consulta</a></li>
          <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>profesores/crear">Crear</a></li>
        </ul>
      </li>  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Users
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <li> <a class="dropdown-item" href="<?php echo constant('URL'); ?>usuarios">Consulta</a></li>
          <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>usuarios/crear">Crear</a></li>
        </ul>
      </li>  

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Users
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>iniciarSesion">Crear</a></li>
          <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>usuarios/logout">Logout</a></li>
        </ul>
       
      </li>  
    </div>
    
  </div>
</div>
</nav>



<!-- <ul class="nav nav-tabs" id="">
  <li class="nav-item">
    <a href="<?php echo constant('URL'); ?>main/index" class="nav-link active" data-bs-toggle="tab" aria-current="page">Home</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cursos</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo constant('URL'); ?>cursos">Consulta</a>
      <a class="dropdown-item" href="<?php echo constant('URL'); ?>cursos/crear">Crear</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grupos</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo constant('URL'); ?>grupos">Consulta</a>
      <a class="dropdown-item" href="<?php echo constant('URL'); ?>grupos/crear">Crear</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo constant('URL'); ?>estudiantes">Consulta</a>
      <a class="dropdown-item" href="<?php echo constant('URL'); ?>estudiantes/crear">Crear</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profesores</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo constant('URL'); ?>profesores">Consulta</a>
      <a class="dropdown-item" href="<?php echo constant('URL'); ?>profesores/crear">Crear</a>
    </div>
  </li>
</ul> -->