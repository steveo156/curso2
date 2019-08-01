@extends('layout')
@section('contenido')
<h1>Contactos</h1>
<h2>Escribeme</h2>
@if(session('info'))
<h3>{{session('info')}}<h3>
@else

<form method="POST" action="{{route('mensajes.store')}}">
	{{ csrf_field() }}
	<p><label for="name">
		Nombre
		<input type="text" name="nombre" value="{{old('nombre')}}" class="form-control">
		{!! $errors->first('nombre','<small class="error">:message</small>') !!}
	</label></p>
	<p><label for="email">
		Email
		<input type="email" name="email" value="{{old('email')}}" class="form-control">
		{!! $errors->first('email','<small class="error">:message</small>') !!}
	</label></p>
	<p><label for="mensaje">
		Mensaje
		<textarea name="mensaje" class="form-control">{{old('mensaje')}}</textarea>{!! $errors->first('mensaje','<small class="error">:message</small>') !!}
	</label></p>
	<input type="submit" name="Enviar" class="btn btn-primary">
</form>
@endif
<hr>
@endsection
