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
	  		<li class="active"><a href="" data-toggle="tab">Select National Exam Paper</a></li>
		</ul>
		<br/>
		<div class="panel panel-default">
			<!-- <ul class="nav nav-pills nav-stacked">
					  		<li><a href="#"><span class="glyphicon glyphicon-play">Simulator</a></li>
					  		<p>this is a place where you test your know</p>
					  		<li><a href="#"><span class="glyphicon glyphicon-play">Random Exam</a></li>
				 	 		<li><a href="#"><span class="glyphicon glyphicon-play">Contest</a></li>
			</ul> -->
			<div class="panel-body">
				{!! Form::open(['method' => 'POST', 'route' => ['nationalexam.select.post'], 'class' => 'form-horizontal'])!!}	
					<div class="form-group" >
						<div class="col-md-3">
							{!! Form::label('select-year', 'Year', ['class' => 'control-label']) !!}
							 <select name="year" class="form-control">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
							</select>
						</div>
						<div class="col-md-3">
							{!! Form::label('select-grade', 'Grade', ['class' => 'control-label']) !!}
							<select name="grade" class="form-control">
								  <option>8</option>
								  <option>10</option>
								  <option>12</option>
							</select>
						</div>
						<div class="col-md-3">
							{!! Form::label('select-subject', 'Subject', ['class' => 'control-label']) !!}
							<select name="subject" class="form-control">
								  <option>Amharic</option>
								  <option>English</option>
								  <option>Mathimatics</option>
								  <option>Phics</option>
								  <option>Biology</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-8">
							{!! Form::reset('Reset',['class' => 'btn btn-warning']) !!}
							{!! Form::submit('Show me',['class' => 'btn btn-primary']) !!}
						</div>
					</div>
				{!! Form::close()!!}	
			</div>
      		<hr>
		</div>
		
		<!-- Tab panes -->		
	@endsection

	@section('rightsideview')
	@endsection
@endsection