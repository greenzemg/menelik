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
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
	  		<li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
			<li><a href="#messages" data-toggle="tab">Activities</a></li>
			@can('editProfileGate', $profile)
				<a href="{{route('user.profile.edit', Auth::user()->id)}}" class="btn btn-default pull-right">
				  	<span class="glyphicon glyphicon-pencil"></span> Edit Profile
				</a>
			@endcan
		</ul>
		<!-- Tab panes -->
		</br>
		<div class="tab-content">
			<div class="tab-pane active" id="profile">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Public Information	</h3>
					</div>
					<div class="panel body">
						<hr/>
						
						{!! Form::open(['class' => 'form-horizontal'])!!}	
						<fieldset disabled>
								<!-- display_name Form input Your display name here. -->
								<div class="form-group" >
									{!! Form::label('regsiter-school', 'School Name', ['class' => 'col-md-2 control-label']) !!}
									<div class="col-md-8">
										{!! Form::text('school', $profile->school, ['class' => 'form-control', 'placeholder' => 'Your School name here']) !!}
									</div>
								</div>
								<!-- email Form input Your email here. -->
								<div class="form-group" >
									{!! Form::label('regsiter-region', 'Region', ['class' => 'col-md-2 control-label']) !!}
									<div class="col-md-8">
										{!! Form::text('region', $profile->region, ['class' => 'form-control', 'placeholder' => 'Addis Ababa']) !!}
									</div>
								</div>
								<!-- password Form input Your password here. -->
								<div class="form-group" >
									{!! Form::label('regsiter-division', 'Divsion', ['class' => 'col-md-2 control-label']) !!}
									<div class="col-md-3">
										{!! Form::text('division', $profile->division,['class' => 'form-control', 'placeholder' => 'Regular']) !!}
									</div>
									{!! Form::label('regsiter-stream', 'Stream', ['class' => 'col-md-2 control-label']) !!}
									<div class="col-md-3">
										{!! Form::text('stream', $profile->stream, ['class' => 'form-control', 'placeholder' => 'Nautral Science']) !!}
									</div>
								</div>

								<div class="form-group" >
									{!! Form::label('regsiter-bio', 'Short Bio', ['class' => 'col-md-2 control-label']) !!}
									<div class="col-md-8">
										{!! Form::textarea('bio', $profile->bio, ['class' => 'form-control', 'value' => 'Tell us about your self']) !!}
									</div>
								</div>
						</fieldset>
						<!-- ./ form actions -->
						{!! Form::close()!!}	
					</div>
				</div>
			</div>
			<div class="tab-pane" id="messages">...</div>
			<div class="tab-pane" id="settings">...</div>
		</div>
	@endsection

	@section('rightsideview')
		
	@endsection
@endsection