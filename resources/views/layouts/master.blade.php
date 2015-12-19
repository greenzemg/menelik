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
@section('mainbody')
@yield('leftsidenav')
@yield('centerview')
@yield('rightsideview')
@show
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