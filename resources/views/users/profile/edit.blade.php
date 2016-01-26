@extends('layouts.user_tempalte')

{{-- Title of the current page --}}
@section('title', $title)

 {{-- meta --}}
@section('meta')
<meta name="robots" content="index, follow">
{{-- other meta --}}
@endsection

@section('mainbody')
	@parent
	
	@section('leftsideview')
		@include('users.profile.partials.profile_pic');
	@endsection

	@section('centerview')
		
			<ul class="nav nav-tabs"><!-- Tabs -->
				<li class="active"><a href="#tab-profile" data-toggle="tab">Profile Setting</a></li>
			</ul><!-- ./ tabs -->
			<br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Editing Your Public Information	</h3>
			</div>
			{!! Form::model($profile, ['method' => 'PATCH', 'route' => ['user.profile.update', $profile->user_id],  'enctype' => 'multipart/form-data', 'class' => 'form-horizontal'])!!}
				@include('users.profile.partials.profile_form', ['submitButtonText' => 'Update Profile']);
			{!! Form::close()!!}
		</div>
		
	@endsection

	@section('rightsideview')
		
	@endsection
@endsection