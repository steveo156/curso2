<!DOCTYPE html>
<html>
<head>
	<title>Mi sitio</title>
<link rel="stylesheet"  href="/css/app.css">
</head>
<body>

	<header>
		<?php
			function activeMenu($url){
				return request()->routeIs($url) ? 'active' : '';
			}
		?>

		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="{{ activeMenu('home') }}">
							<a href="{{ route('home') }}">Inicio</a>
						</li>
						<li class="{{ activeMenu('saludos') }}">
							<a href="{{ route('saludos','Steve') }}">Saludos</a>
						</li>
						<li class="{{ activeMenu('mensajes/create') }}">
							<a href="{{ route('mensajes.create') }}">Contactos</a>
							{{-- {{Request::path()}} --}}
						</li>
						@auth
							<li class="{{ activeMenu('mensajes*') }}">
								<a href="{{ route('mensajes.index') }}">Mensajes</a>
							</li>
						@endauth
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@auth
							<li>
								<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
							</li>
						@else
							<li>
								<a href="{{ route('login') }}">{{ __('Login') }} </a>
							</li>
						@endauth
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
	</header>
	<div class="container">
		@auth
			BIENVENIDO {{ auth()->user()->name }}
		@else
			BIENVENIDO INVITADO
		@endauth

		@yield('contenido')

		<footer>Copyrigth {{ date('Y') }}</footer>
	</div>


<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>




</body>
</html>