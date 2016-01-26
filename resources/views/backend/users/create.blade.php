@extends('layouts.backend_template')

{{-- Title of the current page --}}
@section('title', $title)

 {{-- meta --}}
@section('meta')
<meta name="robots" content="index, follow">
{{-- other meta --}}
@endsection

{{-- Page specfice style --}}
@section('styles')
{{-- {!! Html::style('/css/welcomehome.css') !!} --}}
@stop

@section('centerview')
	<div class="col-md-12" style="background-color:white;">
		<h1 class="page-header">
			User Mangement<a href="{{ route('backend.users.create')}}" class="btn btn-info pull-right">Add a user</a>
		</h1>
		<ol class="breadcrumb">
			<li class="active">
				<span class="fa fa-user"></span> users
			</li>
		</ol>
	</div>
	<div class="col-md-12" style="background-color:white;">
		<!-- Notifications -->
		@include('includes.notifcations')
		@if($errors->count() > 0)
			<div class="alert alert-danger">
				There was an error submiting the form
				@foreach($errors->all() as $error)
					<ul>
						<li> {{ $error }}</li>
					</ul>
				@endforeach
			</div>
		@endif
		<!-- ./ notifications -->
		@include('backend.partials.users_form')
	</div>
	
@endsection

