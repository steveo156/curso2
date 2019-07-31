@extends('layout')
@section('contenido')
<h1>Contactos</h1>
<h2>Escribeme</h2>
@if(session('info'))
<h3>{{session('info')}}<h3>
@else

<form method="POST" action="{{route('messages.store')}}">
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
		<textarea name="mensaje">{{old('mensaje')}}</textarea>{!! $errors->first('mensaje','<small class="error">:message</small>') !!}
	</label></p>
	<input type="submit" name="Enviar">
</form>
@endif
<hr>
@endsection
