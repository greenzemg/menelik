@extends('layouts.master')

{{-- Title of the current page --}}
@section('title', $title)

 {{-- meta --}}
@section('meta')
<meta name="robots" content="index, follow">
{{-- other meta --}}
@endsection

{{-- Page specfice style --}}
@section('styles')
{!! Html::style('/css/welcomehome.css') !!}
@endsection

@section('mainnav')

@endsection

@section('mainbody')
	<div class="col-md-12" id={{ Auth::guest()?"guest-welcome-view":"memeber-welcome-view" }}>
		<div class="col-md-6" id="motto">
	        <h1><strong>Menelik Question Bank</strong></h1>
	        <p><strong>Aweb Application for a Repositoring (storing) Ethiopian National Exam and Model Question paper on cloude</strong></p>
	        
	        <p>powered by realPower</p>
	    </div>
	    @if(Auth::guest())
	    <div class="col-md-6" id="home-login-form">
	        {!! Form::open(['url' => 'auth/login', 'class' => 'form-horizontal']) !!}
	            @include('pages.includes.errors')
	            @include("pages.partials.loginform")
	        {!! Form::close()!!}
	    </div>
	    @endif
	</div>
@endsection
