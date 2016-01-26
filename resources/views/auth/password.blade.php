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
    	<div class="col-md-6 col-md-offset-3">
	    	<div class="panel panel-default">
			  <div class="panel-body">
			   	@include('pages.includes.errors')
    			@include('auth.partials.getEmailForm')
			  </div>
			</div>	
    	</div>
    </div>
 </div>
@stop