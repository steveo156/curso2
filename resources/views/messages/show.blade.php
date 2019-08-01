@extends('layout')
@section('contenido')
	<h1>Mensaje</h1>
	<hr>
	<p>Enviado por {{$message->nombre}} - {{$message->email}}</p>
	<p>{{$message->mensaje}}</p>
	<p>
		@if(($message->updated_at)>($message->created_at))
			Actualizado: {{$message->updated_at->diffForHumans()}}<br>
		@endif
		Enviado: {{$message->created_at->diffForHumans()}}
	</p>
@endsection