@extends('layout')
@section('contenido')
	<h1>Todos los mensajes</h1>

	<table class="table">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Mensaje</th>
			@auth
			<th>Acciones</th>
			@endauth
		</thead>
		<tbody>
			@foreach($messages as $message)
				<tr>
					<td>{{$message->id}}</a>
					</td>
					@if($message->user_id)
						<td>
							<a href="{{ route('usuarios.show', $message->user_id) }}">
								{{$message->user->name}}
							</a>
						</td>
						<td> {{$message->user->email}} </td>
					@else
						<td> {{$message->nombre}} </td>
						<td> {{$message->email}} </td>
					@endif
					<td>
						<a href="{{route('mensajes.show',$message->id)}}">
								{{$message->mensaje}}
						</a>
					</td>
					@auth
					<td>
						<a class="btn btn-info btn-xs" href="{{route('mensajes.edit',$message->id)}}">
							Editar
						</a>

						<form style="display: inline;" action="{{route('mensajes.destroy',$message->id)}}" method="post">
							{!! csrf_field() !!}
							{!! method_field('DELETE') !!}
							<button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
						</form>
					</td>
					@endauth
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
