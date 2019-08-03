@extends('layout')


@section('contenido')
	Usuarios

	<table class="table">
		<thead>
			<th>ID</th>
			<th>Usuario</th>
			<th>Email</th>
			<th>Role</th>
			<th>Acciones</th>

		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td> {{$user->id}} </td>
					<td> {{$user->name}} </td>
					<td> {{$user->email}} </td>
					<td>
						{{$user->roles->pluck('display_name')->implode(' - ')}}
					</td>
					<td>
						<a class="btn btn-info btn-xs"
							href="{{route('usuarios.edit',$user->id)}}">
								Editar
						</a>

						<form style="display: inline;"
							method="post"
							action="{{route('usuarios.destroy',$user->id)}}">

							{!! csrf_field() !!}
							{!! method_field('DELETE') !!}
							<button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
						</form>
					</td>
				</tr>
			@endforeach

		</tbody>
	</table>
@endsection