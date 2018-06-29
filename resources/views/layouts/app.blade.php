<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE-edge">

	<title>{{ config('app.name') }} - @yield('title')</title>
	
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/materialize.min.css">
	<link rel="stylesheet" href="/css/material-icons.css">
	<link rel="stylesheet" href="/css/sweetalert2.css">
	<link rel="stylesheet" href="/css/select2-materialize.css">
	
</head>
<header>

		<!-- Dropdown Structure -->
	<ul id="dropdownMaestros" class="dropdown-content">
	  <li><a href="/maestros/" class="black-text"><i class="material-icons black-text left">list</i>Lista</a></li>
	  <li><a href="/maestros/create" class=" black-text"><i class="material-icons black-text left">add</i>Crear</a></li>
	  <li class="divider"></li>
	  <li><a href="#!" class=" black-text">Otros</a></li>
	</ul>

	<ul id="dropdownAlumnos" class="dropdown-content">
	  <li><a href="/students/" class="black-text"><i class="material-icons black-text left">list</i>Lista</a></li>
	  <li><a href="/students/create" class=" black-text"><i class="material-icons black-text left">add</i>Crear</a></li>
	  <li class="divider"></li>
	  <li><a href="#!" class=" black-text">Otros</a></li>
	</ul>

	<ul id="dropdownAcudientes" class="dropdown-content">
	  <li><a href="/attendants/" class="black-text"><i class="material-icons black-text left">list</i>Lista</a></li>
	  <li><a href="/attendants/create" class=" black-text"><i class="material-icons black-text left">add</i>Crear</a></li>
	  <li class="divider"></li>
	  <li><a href="#!" class=" black-text">Otros</a></li>
	</ul>

	<ul id="dropdownCinturones" class="dropdown-content">
	  <li><a href="/belts/" class="black-text"><i class="material-icons black-text left">list</i>Lista</a></li>
	  <li><a href="/belts/create" class=" black-text"><i class="material-icons black-text left">add</i>Crear</a></li>
	  <li class="divider"></li>
	  <li><a href="#!" class=" black-text">Otros</a></li>
	</ul>

	<ul id="dropdownHorarios" class="dropdown-content">
	  <li><a href="/schedules/" class="black-text"><i class="material-icons black-text left">list</i>Lista</a></li>
	  <li><a href="/schedules/create" class=" black-text"><i class="material-icons black-text left">add</i>Crear</a></li>
	  <li class="divider"></li>
	  <li><a href="#!" class=" black-text">Otros</a></li>
	</ul>

	<div class="navbar-fixed">
		<nav class="black">
		  <div class="nav-wrapper">
		    <a href="/" class="brand-logo">{{ config('app.name') }}</a>
		    <a href="#" data-target="mobile-demo" class="sidenav-trigger white-text"><i class="material-icons">menu</i></a>
		    <ul class="right hide-on-med-and-down">
		      <!-- Dropdown Trigger -->
		      <li><a class="dropdown-trigger" data-target="dropdownMaestros">Maestros<i class="material-icons right">arrow_drop_down</i></a></li>
		      <li><a class="dropdown-trigger" data-target="dropdownAlumnos">Alumnos<i class="material-icons right">arrow_drop_down</i></a></li>
		      <li><a class="dropdown-trigger" data-target="dropdownAcudientes">Acudientes<i class="material-icons right">arrow_drop_down</i></a></li>
		      <li><a class="dropdown-trigger" data-target="dropdownCinturones">Cinturones<i class="material-icons right">arrow_drop_down</i></a></li>
		      <li><a class="dropdown-trigger" data-target="dropdownHorarios">Horarios<i class="material-icons right">arrow_drop_down</i></a></li>
		    </ul>
		  </div>
		</nav>
	</div>

	  <ul class="sidenav" id="mobile-demo">
	    <!-- Dropdown Trigger -->
	    <li><a class="dropdown-trigger" data-target="dropdownMaestrosRes">Maestros<i class="material-icons right">arrow_drop_down</i></a></li>
	    <li><a class="dropdown-trigger" data-target="dropdownAlumnosRes">Alumnos<i class="material-icons right">arrow_drop_down</i></a></li>
	    <li><a class="dropdown-trigger" data-target="dropdownAcudientesRes">Acudientes<i class="material-icons right">arrow_drop_down</i></a></li>
	    <li><a class="dropdown-trigger" data-target="dropdownCinturonesRes">Cinturones<i class="material-icons right">arrow_drop_down</i></a></li>
	    <li><a class="dropdown-trigger" data-target="dropdownHorariosRes">Horarios<i class="material-icons right">arrow_drop_down</i></a></li>
	  </ul>

	 <!-- Dropdown Structure -->
	<ul id="dropdownMaestrosRes" class="dropdown-content">
	  <li><a href="/maestros/" class=" black-text"><i class="material-icons black-text left">list</i>Lista</a></li>
	  <li><a href="/maestros/create" class=" black-text"><i class="material-icons black-text left">add</i>Crear</a></li>
	  <li class="divider"></li>
	  <li><a href="#!" class=" black-text">Otros</a></li>
	</ul>

	<ul id="dropdownAlumnosRes" class="dropdown-content">
	  <li><a href="/students/" class=" black-text"><i class="material-icons black-text left">list</i>Lista</a></li>
	  <li><a href="/students/create" class=" black-text"><i class="material-icons black-text left">add</i>Crear</a></li>
	  <li class="divider"></li>
	  <li><a href="#!" class=" black-text">Otros</a></li>
	</ul>
	
	<ul id="dropdownAcudientesRes" class="dropdown-content">
	  <li><a href="/attendants/" class=" black-text"><i class="material-icons black-text left">list</i>Lista</a></li>
	  <li><a href="/attendants/create" class=" black-text"><i class="material-icons black-text left">add</i>Crear</a></li>
	  <li class="divider"></li>
	  <li><a href="#!" class=" black-text">Otros</a></li>
	</ul>
	
	<ul id="dropdownCinturonesRes" class="dropdown-content">
	  <li><a href="/belts/" class=" black-text"><i class="material-icons black-text left">list</i>Lista</a></li>
	  <li><a href="/belts/create" class=" black-text"><i class="material-icons black-text left">add</i>Crear</a></li>
	  <li class="divider"></li>
	  <li><a href="#!" class=" black-text">Otros</a></li>
	</ul>
	
	<ul id="dropdownHorariosRes" class="dropdown-content">
	  <li><a href="/schedules/" class=" black-text"><i class="material-icons black-text left">list</i>Lista</a></li>
	  <li><a href="/schedules/create" class=" black-text"><i class="material-icons black-text left">add</i>Crear</a></li>
	  <li class="divider"></li>
	  <li><a href="#!" class=" black-text">Otros</a></li>
	</ul>

</header>
<body>

	<div class="container">
		<div class="row">
		    @yield('content')			
		</div>   
    </div>

    <footer class="page-footer transparent">
    <div class="footer-copyright black">
    	<div class="container">
    		© 2018 Copyright <b>{{ config('app.name') }}</b> Todos los derechos reservados.
    	</div>
    </div>
    </footer>

	<script src="/js/app.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script src="/js/sweetalert2.min.js"></script>
	{{-- <script src="/js/select2-materialize.js"></script> --}}
	<script src="/js/select2.min.js"></script>

	<script>
		$(document).ready(function () {
			M.AutoInit();
		});

		
		$('#attendant').select2();
		
	</script>

	@yield('scripts')
</body>
</html>
		