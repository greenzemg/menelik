<!doctype Html>
<html lang="en">
@include('backend.includes.head')

<body>
@section('navbarhead')
<!-- navbar -->
@include('backend.includes.navbar')
<!-- ./ mainnav -->
@show

<!-- mainbody -->
<div id="wrap">
	<div class="container-fluid">
		<div class="row">
			@section('mainbody')

				<div class="col-md-2 sidebar">
					@include('backend.includes.sideboard')
				</div>
				<div class="col-md-10 col-md-offset-2">
					
					@yield('centerview')
				</div>
				{{-- <div class="col-md-2 main-col">
					@yield('rightsideview')
				</div> --}}
			@show
		</div>
	</div>
</div>

<!-- ./ mainbody -->
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