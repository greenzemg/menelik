<!doctype Html>
<html lang="en">
@include('includes.head')
<body>

@section('navbarhead')
<!-- navbar -->
@include('includes.navbar')		
<!-- ./ navbar -->
@show

<!-- mainnav -->
@section('mainnav')
@if(Auth::check())
@include('includes.mainnav')		
@endif	
@show
<!-- ./ mainnav -->

<!-- Notifications -->
@section('notifcation')
@include('includes.notifcations')
@show
<!-- ./ notifications -->

<div id="wrap">
	<div class="container-fluid">
		<div class="row">
			<!-- mainbody -->
			@section('mainbody')
				
				@yield('leftsideview')
				@yield('centerview')
				@yield('rightsideview')
			@show
			<!-- ./ mainbody -->
		</div>
	</div>
</div>


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