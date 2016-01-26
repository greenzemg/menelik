@extends('layouts.master')

{{-- Title of the current page --}}
@section('title', 'Login Page')

 {{-- meta --}}
@section('meta')
<meta name="robots" content="index, follow">
{{-- other meta --}}
@endsection

{{-- Page specfice style --}}
@section('styles')
{!! Html::style('/css/welcomehome.css') !!}
@stop

@section('mainbody')
 <div class="container" id="welcomview">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Pleas Enter you new password here</h2>
                </div>
                <div class="panel-body">
                     @include('pages.includes.errors')
                    {!! Form::open(['class' => 'form-horizontal'])!!}
                        {!! Form::hidden('token', $token)!!}
                        <!-- email Form input Your email here. -->
                        <div class="form-group" >
                            {!! Form::label('regsiter-email', 'E-mail', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::text('email', null, ['required', 'class' => 'form-control', 'placeholder' => 'Your email']) !!}
                            </div>
                        </div>
                        <!-- password Form input Your password here. -->
                        <div class="form-group" >
                            {!! Form::label('reset-password', 'Password', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::password('password',['required', 'class' => 'form-control', 'placeholder' => 'New password']) !!}
                            </div>
                        </div>

                        <div class="form-group" >
                            {!! Form::label('reset-confirm-password', 'Confirm Password', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::password('password_confirmation',['required', 'class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {!! Form::submit('Reset Password',['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>  
        </div>
    </div>
 </div>
@stop