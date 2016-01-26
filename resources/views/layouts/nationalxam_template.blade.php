<!doctype Html>
<html lang="en">
@include('includes.head')

<body>
@section('navbarhead')
<!-- navbar -->
@include('includes.navbar')
<!-- ./ mainnav -->
@show
@section('mainnav')
@if(Auth::check())
<!-- navbar -->
@include('includes.mainnav')		
<!-- ./ mainnav -->
@endif	
@show
<!-- Notifications -->
@include('includes.notifcations')
<!-- ./ notifications -->
<!-- mainbody -->
<div id="wrap">
	<div class="container">
		<div class="row">
			@section('mainbody')

				<div class="col-md-2 main-col" style="background-colorg:black">
					@yield('leftsideview')
				</div>
				<div class="col-md-8 main-col">
					@yield('centerview')
				</div>
				<div class="col-md-2 main-col">
					@yield('rightsideview')
				</div>
			@show
		</div>
	</div>
</div>

<!-- ./ mainbody -->

@section('footer')
@include('includes.footer')
@show

@section('footscripts')
<!-- scripts from CDN-->
{{-- {!! Html::script('//code.jquery.com/jquery-2.1.4.min.js') !!} --}}
{!! Html::script('/js/jquery-2.1.4.min.js') !!}

{{-- {!! Html::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!} --}}
{!! Html::script('/css/butstrp_Cmpld/js/bootstrap.min.js') !!}
<!-- ./ scripts from CDN-->
@show
</body>
</html>