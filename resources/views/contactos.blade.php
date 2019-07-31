@extends('layout')
@section('contenido')
<h1>Contactos</h1>
<h2>Escribeme</h2>

<form method="POST" action="contacto">
	{{ csrf_field() }}
	<p><label for="name">
		Nombre
		<input type="text" name="nombre" value="{{old('nombre')}}">
		{!! $errors->first('nombre','<small class="error">:message</small>') !!}
	</label></p>
	<p><label for="email">
		Email
		<input type="email" name="email" value="{{old('email')}}">
		{!! $errors->first('email','<small class="error">:message</small>') !!}
	</label></p>
	<p><label for="mensaje">
		Mensaje
		<textarea name="mensaje"> {{old('mensaje')}} </textarea>
		{!! $errors->first('mensaje','<small class="error">:message</small>') !!}
	</label></p>
	<input type="submit" name="Enviar">
</form>

@endsection
