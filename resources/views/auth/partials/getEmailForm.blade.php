{!! Form::open(array('url' => '/password/email', 'class' => 'form')) !!}
	<h1>Recover Your Password</h1>
	{{-- @include('includes.errors') --}}

	<div class="form-group">
	{!! Form::label('email', 'Your E-mail Address') !!}
	{!! Form::text('email', null,
	['class'=>'form-control', 'placeholder'=>'E-mail']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('E-mail Password Reset Link',['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}