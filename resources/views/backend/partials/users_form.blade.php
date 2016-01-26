{!! Form::model($user, [
	'method' => $user->exists ? 'PATCH' : 'POST',
	'route'  => $user->exists ? ['backend.users.update', $user->id] : 'backend.users.store'
]) !!}
	<div class="form-group">
		{!! Form::label('First Name')!!}
		{!! Form::text('firstname', null, ['class' => 'form-control']) !!}
	</div>
	
	
	<div class="form-group">
		{!! Form::label('Last Name')!!}
		{!! Form::text('lastname', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('User Name')!!}
		{!! Form::text('username', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('E-mail')!!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Password')!!}
		{!! Form::password('password', ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Password Confirmation')!!}
		{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit($user->exists ? 'Update user' : 'Create New User', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
