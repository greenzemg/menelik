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
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#"><span class="glyphicon glyphicon-user">Home</span></a></li>  
			<li><a href="{{ route('user.profile.show', Auth::user()->id) }}"><span class="glyphicon glyphicon-user">Profile</span></a></li>  
			<li><a href="#"><span class="glyphicon glyphicon-user">Message</span></a></li>  
			<li><a href="#"><span class="glyphicon glyphicon-user">Notifications</span></a></li>  
		</ul>
	@endsection

	@section('centerview')
		<h4>Main content</h4>		
	@endsection

	@section('rightsideview')
		
	@endsection
@endsection