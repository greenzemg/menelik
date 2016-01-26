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
		<h4>Left side Nave</h4>
	@endsection

	@section('centerview')
		<h4>Main content</h4>		
	@endsection

	@section('rightsideview')
		<h4>right side view</h4>
	@endsection
@endsection