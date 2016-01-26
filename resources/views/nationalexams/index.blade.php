@extends('layouts.nationalxam_template')

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

	@endsection

	@section('centerview')
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
	  		<li class="active"><a href="" data-toggle="tab">National Exam Paper</a></li>
		</ul>
		<br/>
		<div class="panel panel-default">
			<!-- <ul class="nav nav-pills nav-stacked">
					  		<li><a href="#"><span class="glyphicon glyphicon-play">Simulator</a></li>
					  		<p>this is a place where you test your know</p>
					  		<li><a href="#"><span class="glyphicon glyphicon-play">Random Exam</a></li>
				 	 		<li><a href="#"><span class="glyphicon glyphicon-play">Contest</a></li>
			</ul> -->
			<div class="row panel-body">
		        <div class="col-md-4">
			          <h3><p class="text-primary">National Exam</p></h3>
			           <p>Are you ready!!.Test your self how well you are prepare for National Exam </p>
			          <p><a class="btn btn-default" href="{{route('nationalexam.select')}}"><span class="glyphicon glyphicon-play"></span> Go there &raquo;</a></p>
		        </div>
		        <div class="col-md-4">
			          <h3><p class="text-primary">Random Questions</p></h3>
			           <p>By generating a random national exam questions from your repostory you can test your self:</p>
			          <p><a class="btn btn-default" href="{{route('nationalexam.show')}}"><span class="glyphicon glyphicon-play"></span>Go there &raquo;</a></p>
		       </div>
		        <div class="col-md-4">
			          <h3><p class="text-primary">Contest Room</p></h3>
			          <p>Measure your self against other ethiopan student</p>
			          <p><a class="btn btn-default" href="tabs-pills.html"><span class="glyphicon glyphicon-play"></span> Go there &raquo;</a></p>
		        </div>
		    </div><!-- end row 1 -->
      	<hr>
		</div>
		
		<!-- Tab panes -->		
	@endsection

	@section('rightsideview')
	@endsection
@endsection