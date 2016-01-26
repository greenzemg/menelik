<div class="tab-content"><!-- Tabs Content -->
	<!-- Profile tab -->
	<div class="tab-pane active" id="settings">
		<!-- full_name Form input Your first name here. -->
		<div class="form-group" >
			{!! Form::label('register-profile-pic', 'Profile Picture', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-2">
		     	{!! Html::image($profile->profile_pic, 'profilepic', ['class' => 'img-thumbnail']) !!}
				{!! Form::file('profile_pic', ['placeholder' => 'Profile pic']) !!}
			</div>
		</div>

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
	</div>
	<!-- ./ permissions tab -->
</div>
<!-- ./ tabs content -->
<!-- Form Actions -->
<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		@can('updateProfileGate', $profile)
			{!! Form::submit($submitButtonText,['class' => 'btn btn-primary']) !!}
		@endcan
	</div>
</div>
<!-- ./ form actions -->