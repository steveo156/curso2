<!DOCTYPE html>
<html>
<head>
	<title>mi sitio</title>
</head>
<body>

	<header>
		<nav>
			<a href="{{ route('home') }}">Inicio</a>
			<a href="{{ route('saludos','Steve') }}">Saludos</a>
			<a href="{{ route('contactos') }}">Contactos</a>
		</nav>
	</header>

	@yield('contenido')
	<footer>Copyrigth {{ date('Y') }}</footer>

</body>
</html>