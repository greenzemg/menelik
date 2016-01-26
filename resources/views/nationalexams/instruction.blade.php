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
	  		<li class="active"><a href="" data-toggle="tab">{{$title }}</a></li>
		</ul>
		<br/>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="text-center ">NATIONAL EDUCATIONAL ASSEMENT AND EXAMINATIONS AGENCY (NEAEA)</h4>
				<h4 class="text-center">ETHIOPIAN GENERAL SECONDARY EDUCATIONS CERTIFICATE {{ $subject}} EXAMINATION</h4>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<h3>General Direction</h3>
						<p>
							THIS BOOKLET CONTAINS <code>{{$subject}}</code>EXAMINATION THE SUBJECT CODE FOR THIS EXAMINATION IS {BOOKLET-SUBJEC-COD} AND THE CODE FOR THIS PARTICULAR BOOKLET IS {BOOKLET->BOOKLET-COD}. PLEASE COPY THESE CODE ON YOUR ANSWER SHEET WHERE IT READS BOOKLET CODE AND SUBJECT CODE. THEN, BLACKEN THE CORRESPONDING BOXE IN THE COLUMNS BELOW EACH NUMBER.
						</p>

						<p>
							THE EXAMINATION CONTAINS {BOOKLET-NUMBER OF ITEMS}. ATTEMPT ALL THE ITEMS FOLLOW THE INSTRUCTIONS ON THE ANSWER SHEET AND THE EXAMINATION PAPER EXACTLY. USE ONLY PENCIL TO MARK YOUR ANSWERS.
						</p>

						<p>
							THERE IS ONLY ONE CORRECT OR BEST ANSWER FOR EACH ITEM CHOOSE THE CORRECT OR BEST ANSWER FROM THE SUGGESTED OPTIONS AND BLACKEN THE LETTER OF YOUR CHOICE ON THE ANSWER SHEET. YOUR ANSWER MARK SHOULD BE HEAVY AND DARK, COVERING THE ANSWER SPACE COMPLETELY. PLEASE ERASE ALL UNNECESSARY PENCIL MARKS COMPLETELY FROM YOUR ANSWER SHEET. THE OPTICAL MARK READER(OMR) REJECTS ALL ANSWER SHEETS WITH UNNECESSARY PENCIL MARKS.
						</p>
						<p>
							YOU WILL BE ALLOWED TO WORK FOR {BOOKLET-TILME-ALLOWED}. IF YOU FINISH BEFORE TIME IS CALLED, YOU MAY GO BACK AND REVIEW. WHEN TIME IS CALLED, YOU MUST IMMEDIATELY STOP WORKING, LAY YOUR PENCIL DOWN, AND WAIT FOR FURTHER FINSTRUCTIONS. 
						</p>

						<p>
							ANY FORM OF CHEATING OR AN ATTEMPT TO CHEAT IN THE EXAMINATION HALL WILL RESULT IN AN AUTOMATIC DISMISSAL FROM THE EXAMINATIONS HALL AND CANCELLATION OF YOUR SCORE(S)
						</p>
						<h3><b>DO NOT TURN THIS PAGE UNTIL YOUI ARE TOLD TO DO SO</b></h3>
						<a href="{{route('nationalexam.show', [$year, $grade, $subject])}}" class="btn btn-default pull-right"><span class="glyphicon glyphicon-share-alt"></span> TURN PAGE</a>
					</div>

				</div>
			</div>
      		<hr>
		</div>
		
		<!-- Tab panes -->		
	@endsection

	@section('rightsideview')
	@endsection
@endsection