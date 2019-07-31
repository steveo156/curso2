<!DOCTYPE html>
<html>
<head>
	<title>mi sitio</title>
	<style>
		.active{
			color: green;
			text-decoration: none;
		}
		.error{
			color:red;
			text-decoration: none;
		}
	</style>
</head>
<body>

	<header>
		<?php
			function activeMenu($url){
				return request()->routeIs($url) ? 'active' : '';
			}
		?>
		<nav>
			<a class="{{ activeMenu('home') }}" href="{{ route('home') }}">Inicio</a>
			<a class="{{ activeMenu('saludos') }}" href="{{ route('saludos','Steve') }}">Saludos</a>
			<a class="{{ activeMenu('mensajes/create') }}" href="{{ route('messages.create') }}">Contactos</a>
			<a class="{{ activeMenu('mensajes') }}" href="{{ route('messages.index') }}">Mensajes</a>

		</nav>
	</header>

	@yield('contenido')
	<footer>Copyrigth {{ date('Y') }}</footer>

</body>
</html>