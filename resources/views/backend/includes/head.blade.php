<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="/assets/ico/favicon.ico">
<title>@yield('title', 'Menellik QB Web App')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
@yield('meta')
{{-- To ensure proper rendering and touch zooming --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap core CSS -->
{!! Html::style('/css/butstrp_Cmpld/css/bootstrap.min.css') !!}
{!! Html::style('/css/butstrp_Cmpld/css/bootstrap-theme.min.css') !!}
<!-- Custome Appliction css -->
{!! Html::style('/css/app/global.css') !!}
{!! Html::style('/css/app/backend.css') !!}
@yield('styles')
@yield('head')
</head>


