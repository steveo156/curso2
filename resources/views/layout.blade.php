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
							@if( auth()->user()->hasRoles(['admin','mod']))
								</li>
								<li class="{{ activeMenu('usuarios*') }}">
									<a href="{{ route('usuarios.index') }}">Usuarios</a>
								</li>
							@endif
						@endauth
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@auth
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									{{ auth()->user()->name }} | {{ auth()->user()->role->display_name }}
									<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
									</li>
								</ul>
							</li>
						@else
							<li>
								<a href="{{ route('login') }}">{{ __('Login') }} </a>
							</li>

						@endauth

					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
	</header>
	<div class="container">


		@yield('contenido')

		<footer>Copyrigth {{ date('Y') }}</footer>
	</div>


<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>




</body>
</html>