{{ csrf_field() }}
	@unless($message->user_id)
		<p><label for="name">
			Nombre
			<input type="text" name="nombre" value="{{ $message->nombre or old('nombre')}}" class="form-control">
			{!! $errors->first('nombre','<small class="error">:message</small>') !!}
		</label></p>
		<p><label for="email">
			Email
			<input type="email" name="email" value="{{ $message->email or old('email')}}" class="form-control">
			{!! $errors->first('email','<small class="error">:message</small>') !!}
		</label></p>
	@endunless
	<p><label for="mensaje">
		Mensaje
		<textarea name="mensaje" class="form-control">{{ $message->mensaje or old('mensaje')}}</textarea>{!! $errors->first('mensaje','<small class="error">:message</small>') !!}
	</label></p>
	<input type="submit" name="Enviar" class="btn btn-primary" value="{{ $btnText or 'Guardar'}}">