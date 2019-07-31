@extends('layout')
@section('contenido')
<h1>Contactos</h1>
<h2>Escribeme</h2>

<form method="POST" action="contacto">
	{{ csrf_field() }}
	<p><label for="name">
		Nombre
		<input type="text" name="nombre">
	</label></p>
	<p><label for="email">
		Email
		<input type="email" name="email">
	</label></p>
	<p><label for="mensaje">
		Mensaje
		<textarea name="nombre"></textarea>
	</label></p>
	<input type="submit" name="Enviar">
</form>

@endsection
