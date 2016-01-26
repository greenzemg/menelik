<div class="panel panel-default">
	<ul class="nav nav-tabs"><!-- Tabs -->
		<li class="active"><a href="#tab-profile" data-toggle="tab">Grade {{$booklet->grade}} {{$booklet->subject}}</a></li>
	</ul><!-- ./ tabs -->
	<div class="row" id="booklet-header">
		<div class="col-md-2">
			<h4><a href="{!! $nationalexams->previousPageUrl()!!}">Previous</a></h4>
		</div>
		<div class="col-md-3">
			<h4><span class="badge">BookLet Code:{{$booklet->booklet_code}}</span></h4>
		</div>
		<div class="col-md-2">
			<h4><span class="badge">{!! $nationalexams->currentPage()!!}</span></h4>
		</div>
		<div class="col-md-3">
			<h4><span class="badge">Subject Code: {{$booklet->subject_code}}</span></h4>
		</div>
		<div class="col-md-2">
			<h4><a href="{!! $nationalexams->nextPageUrl()!!}">Next</a></h4>
		</div>
	</div>
	<hr/>

	<div class="tab-content" id="booklet-content"><!-- Tabs Content -->
		<div class="tab-pane active" id="tab-profile">
			@foreach($nationalexams as $nationalexam)
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-1" id="booklet-qnumber">
								{{$nationalexam->qnumber}}. 
							</div>
							<div class="col-md-10" id="booket-question">
								<p>{{ $nationalexam->question }}</p>
							</div>
						</div>
					</div>
					{{-- <div class="col-md-12 qchoice"><a href="#">A.</a> {{ $nationalexam->ca }}</div>
					<div class="col-md-12 qchoice"><a href="#">B.</a> {{ $nationalexam->cb }}</div>
					<div class="col-md-12 qchoice"><a href="#">C.</a> {{ $nationalexam->cc }}</div>
					<div class="col-md-12 qchoice"><a href="#">D.</a>{{ $nationalexam->cd }}</div>
					<div class="col-md-12 hor-line"> --}}
						<hr/>
					</div>
					<div class="colo-md-12 booklet-footer">
						<div class="btn-grp">
							<button id="answer" class="btn btn-sm btn-default" type="button"><span class="glyphicon glyphicon-book"></span> Answer</button>
							<button id="disc" class="btn btn-sm btn-default" type="button"><span class="glyphicon glyphicon-user"></span> Discussion</button>
							<button id="report" class="btn btn-sm btn-default" type="button"><span class="glyphicon glyphicon-comment"></span> Report</button>	
						</div>
						
						<div id="ansDiv" class="well well-sm" >
						    	{{-- <p>Answer:{{ $nationalexam->answer}}</p>
						    	<p>Explanation: {{ $nationalexam->explanation}}</p> --}}
						</div>
						<div id="disDiv" class="well well-sm">
						    	<p>Disscussion</p>
						</div>
					</div>
				</div> <!-- End of row -->
				<hr/>
				@endforeach
		</div><!-- ./ tab-pane active -->
	</div> <!-- ./ tab-content -->
	<hr class="colorgraph" />
	<div class="row">
		<div class="col-md-3">
			<h6>NEAEA, EGSECE {{$booklet->year}}</h6>
		</div>
		<div class="col-md-2">
			<h6>{{ $booklet->subject }}</h6>
		</div>
	</div>
	<div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
	  	{!!  ($nationalexams->currentPage()/$nationalexams->lastPage())*100!!}%
	  </div>
	</div>	
	{!! $nationalexams->render() !!}	
</div><!-- ./ panel-->
