<div class="form-group">
    <div class="col-md-12 control">
        <div style="border-bottom: 1px solid#888; padding-top:15px; font-size:135%" > 
        	<strong>Login here</strong>
        </div>
    </div>
</div>  
<div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    {!! Form::text('email', null, ['required', 'id' =>'login-email', 'class' => 'form-control', 'placeholder' => 'abebe33@gmail.com']) !!}

</div> 
<div style="margin-bottom: 25px" class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	{!! Form::password('password', ['required', 'id' => 'login-password', 'class' => 'form-control', 'placeholder' => 'password']) !!}
</div>

<div class="input-group">
  	<div class="checkbox">
      	<label>{!! Form::checkbox('remember', 'remember', false,  ['class' => 'remember-me', 'id' => 'remember-me']) !!} Remember Me</label>
  	</div>
</div>
<div style="margin-top:10px" class="form-group">
    <!-- Button -->
    <div class="col-sm-12 controls">
      	{!! Form::submit('Login',['class' => 'btn btn-default']) !!}
      	<a href="/password/email">Forgot Your Password?</a>
    </div>
</div>
<div class="form-group">
    <div class="col-md-12 control">
        <div style="border-top: 2px solid#888; padding-top:15px; font-size:125%" >Don't have an account!<br/>
        	<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()"><button type="button" class="btn btn-warning">Login as Guest</button></a>
        	or
        	<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()"><button type="button" class="btn btn-success">Register Here</button></a>
        </div>
    </div>
</div>    
