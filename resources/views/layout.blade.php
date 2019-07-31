<!DOCTYPE html>
<html>
<head>
	<title>mi sitio</title>
	<style>
		.active{
			color: green;
			text-decoration: none;
		}
	</style>
</head>
<body>

	<header>
		<?php
			function activeMenu($routeName){
				return request()->routeIs($routeName) ? 'active' : '';
			}
		?>
		<nav>
			<a class="{{ activeMenu('home') }}" href="{{ route('home') }}">Inicio</a>
			<a class="{{ activeMenu('saludos') }}" href="{{ route('saludos','Steve') }}">Saludos</a>
			<a class="{{ activeMenu('contactos') }}" href="{{ route('contactos') }}">Contactos</a>
		</nav>
	</header>

	@yield('contenido')
	<footer>Copyrigth {{ date('Y') }}</footer>

</body>
</html>