@extends("layout")

@section('contenido')
	<h1>Editar usuario</h1>
	@if(session()->has('info'))
		<div class="alert-success"><h2>{{session('info')}}</h2></div>
	@endif
	<form method="POST" action="{{route('usuarios.update',$user->id)}}">
		{!! method_field('PUT') !!}
		{{ csrf_field() }}
		<p><label for="name">
			Nombre
			<input type="text" name="name" value="{{$user->name}}" class="form-control">
			{!! $errors->first('name','<small class="error">:message</small>') !!}
		</label></p>
		<p><label for="email">
			Email
			<input type="email" name="email" value="{{$user->email}}" class="form-control">
			{!! $errors->first('email','<small class="error">:message</small>') !!}
		</label></p>
		<input type="submit" name="Enviar" class="btn btn-primary">
	</form>


@endsection