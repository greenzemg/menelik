@extends('layouts.nationalxam_template')

{{-- Title of the current page --}}
@section('title', $title)

 {{-- meta --}}
@section('meta')
<meta name="robots" content="index, follow">
{{-- other meta --}}
@endsection

{{-- Page specfice style --}}
@section('styles')
{!! Html::style('/css/app/nationalexam.css') !!}
<script type="text/javascript">
    $(document).ready(function(){
	    $("#vans1").click(function(){
	        $("#ans").toggle();
	    });
	});
</script>
@stop

@section('mainbody')
	@parent
	
	@section('leftsideview')

	@endsection

	@section('centerview')
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
	  		<li class="active"><a href="" data-toggle="tab">{{$title}}</a></li>
		</ul>
		<br/>
		<div class="panel panel-default">
			
			<div class="panel-body">
				{{-- @include('nationalexams.partials.booklet') --}}
				@include('nationalexams.partials.booklet_001')
			</div>
      		<hr>
		</div>
		
		<!-- Tab panes -->		
	@endsection

	@section('rightsideview')
	@endsection
@endsection

@section('footscripts')
<!-- scripts from CDN-->
{{-- {!! Html::script('//code.jquery.com/jquery-2.1.4.min.js') !!} --}}
{!! Html::script('/js/jquery-2.1.4.min.js') !!}

{{-- {!! Html::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!} --}}
{!! Html::script('/css/butstrp_Cmpld/js/bootstrap.min.js') !!}
<!-- ./ scripts from CDN-->
<!-- Page Specfi scripts -->
<script type="text/javascript">
    $(document).ready(function(){
	    $("#vans1").click(function(){
	        $("#ans").toggle();
	    });
	});
</script>
@show