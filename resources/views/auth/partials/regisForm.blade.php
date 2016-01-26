<div class="form-group">
    <div class="col-md-12 control">
        <div style="border-bottom: 1px solid#888; padding-top:15px; font-size:135%" > 
            <strong>Registraion</strong>
            <small class="pull-right" >Do you have an acount <a href="{{ route('get.login')}}">login here</a></small>
        </div>
    </div>
</div>  
<!-- First name Form input Your first name here. -->
<div class="form-group" >
    {!! Form::label('register-first-name', 'First Name', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('firstname', null, ['required', 'class' => 'form-control', 'placeholder' => 'Abebe']) !!}
    </div>
</div>
<!-- Last Name Form input Your first name here. -->
<div class="form-group" >
    {!! Form::label('register-last-name', 'Last Name', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('lastname', null, ['required', 'class' => 'form-control', 'placeholder' => 'Kebede']) !!}
    </div>
</div>


<!-- display_name Form input Your display name here. -->
<div class="form-group" >
    {!! Form::label('regsiter-user-name', 'User Name', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('username', null, ['required', 'class' => 'form-control', 'placeholder' => 'abekebe']) !!}
    </div>
</div>
<!-- email Form input Your email here. -->
<div class="form-group" >
    {!! Form::label('regsiter-email', 'E-mail', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('email', null, ['required', 'class' => 'form-control', 'placeholder' => 'abekebe33@gmail.com']) !!}
    </div>
</div>
<!-- password Form input Your password here. -->
<div class="form-group" >
    {!! Form::label('regsiter-password', 'Your Password', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::password('password',['required', 'class' => 'form-control', 'placeholder' => 'Your password here']) !!}
    </div>
</div>

<div class="form-group" >
    {!! Form::label('regsiter-confirm-password', 'Confirm Password', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::password('password_confirmation',['required', 'class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-12 control">
        <div style="border-top: 2px solid#888; padding-top:15px; font-size:125%" >
            <!-- Form Actions -->
<div class="form-group">
    <div class="col-md-8 col-md-offset-3">
        {!! Form::reset('Reset',['class' => 'btn btn-warning']) !!}
        {!! Form::submit('Create acount',['class' => 'btn btn-primary']) !!}
    </div>
</div>
<!-- ./ form actions -->
        </div>
    </div>
</div>    
