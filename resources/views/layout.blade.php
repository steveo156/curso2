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
			<a class="{{ activeMenu('mensajes/create') }}" href="{{ route('mensajes.create') }}">Contactos</a>
			@auth
			<a class="{{ activeMenu('mensajes') }}" href="{{ route('mensajes.index') }}">Mensajes</a>
			<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
		@else
			<a href="{{ route('login') }}">{{ __('Login') }} </a>
		@endauth


		</nav>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
	</header>

	@yield('contenido')
	<footer>Copyrigth {{ date('Y') }}</footer>

</body>
</html>