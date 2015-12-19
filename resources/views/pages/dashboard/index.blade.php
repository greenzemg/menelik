@extends('layouts.dashboard')

{{-- Title of the current page --}}
@section('title', $title)

 {{-- meta --}}
@section('meta')
<meta name="robots" content="index, follow">
{{-- other meta --}}
@endsection

@section('mainbody')
	@parent
	<h1>Contet goes hear</h1>
	<hr>
@endsection