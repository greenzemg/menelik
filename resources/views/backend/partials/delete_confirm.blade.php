{!! Form::open(['method' => 'delete', 'route' => ['backend.users.destroy', $user->id]])!!}
	<div class="alert alert-danger">
		<strong>warning</strong> you are about to delete <strong>{{ $user->username}}</strong>user. The action cannot be undone. Are you sure to continue.
	</div>

	{!! Form::submit('Yes Delete!', ['class' => 'btn btn-danger']) !!}
	<a href="{{route('backend.users.index')}}" class="btn btn-success"> Back</a>
{!! Form::close() !!} 