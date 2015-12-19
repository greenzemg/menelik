<div class="panel panel-default">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab-login" data-toggle="tab">Login</a></li>
	</ul>
	<hr/>
	{!! Form::open(['url' => 'auth/login', 'class' => 'form-horizontal']) !!}
		@include("pages.partials.loginform")
	{!! Form::close()!!}
</div> <!-- ./ panel -->