<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>HOME</h1>
	<header>
		<nav>
			<a href="{{ route('home') }}">Inicio</a>
			<a href="{{ route('saludos','Steve') }}">Saludos</a>
			<a href="{{ route('contactos') }}">Contacto</a>
		</nav>
	</header>

</body>
</html>