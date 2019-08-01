@extends('layout')
@section('contenido')
<h1>Editar Mensaje</h1>

<form method="POST" action="{{route('mensajes.update',$message->id)}}">
	{!! method_field('PUT') !!}
	{{ csrf_field() }}
	<p><label for="name">
		Nombre
		<input type="text" name="nombre" value="{{$message->nombre}}" class="form-control">
		{!! $errors->first('nombre','<small class="error">:message</small>') !!}
	</label></p>
	<p><label for="email">
		Email
		<input type="email" name="email" value="{{$message->email}}" class="form-control">
		{!! $errors->first('email','<small class="error">:message</small>') !!}
	</label></p>
	<p><label for="mensaje">
		Mensaje
		<textarea name="mensaje" class="form-control">{{$message->mensaje}}</textarea>{!! $errors->first('mensaje','<small class="error">:message</small>') !!}
	</label></p>
	<input type="submit" name="Enviar" class="btn btn-primary">
</form>
@endsection
