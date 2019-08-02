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
					<td> {{$user->role}} </td>
					<td></td>
				</tr>
			@endforeach

		</tbody>
	</table>
@endsection