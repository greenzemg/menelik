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
<div id="booklet_body">
	@foreach($nationalexams as $nationalexam)
		<div class="row" style="background-colors:red">
			<div class="col-md-1 qnumber" style="background-colors:blue">
				<strong>{{$nationalexam->qnumber}}.</strong>
			</div>
			<div class="col-md-11" style="background-colors:black">
				<div class="row" style="background-colors:gray">
					<div class="col-md-12">
						<p>{{ $nationalexam->question }}</p>
					</div>
				</div>
				<div class="row" style="background-colors:green">
					@foreach($nationalexam->choices as $choice)
						<div class="col-md-12">
							<div class="row" style="background-colors:yellow">
								<div class="col-md-1 cnumber" style="background-colors:black">
									<b>{{ $choice->cnumber }}.</b>
								</div>
								<div class="col-md-11" style="background-colors:red">
									{{$choice->choice}}
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<br>
				<div class="row" style="background-colors:yellow">
					<div class="col-md-10">
						<table class="table">
							<thead>
								<tr>
									<p id="ans{{$nationalexam->qnumber}}">Answer goes here</p>
									<td><a href="" id="vans{{$nationalexam->qnumber}}"><span class="glyphicon glyphicon-book"></span> <b>view Answer</b></a></td>
									<td><a href=""><span class="glyphicon glyphicon-file"></span> <b>workspace<b></a></td>
									<td><a href=""><span class="glyphicon glyphicon-bullhorn"></span> <b>Report</b></a></td>
									<td><a href=""><span class="glyphicon glyphicon-user"></span> <b>Discuss in forum</b></a></td>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<hr/>
	@endforeach
</div>
<hr/>
<div class="row">
	<div class="col-md-10 col-mo-offset-2">
		{!! $nationalexams->render() !!}	
	</div>
</div>
