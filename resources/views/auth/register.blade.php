@extends('layouts.master')

{{-- Title of the current page --}}
@section('title', $title)

 {{-- meta --}}
@section('meta')
<meta name="robots" content="index, follow">
{{-- other meta --}}
@endsection

{{-- Page specfice style --}}
@section('styles')
{!! Html::style('/css/welcomehome.css') !!}
@stop

@section('mainbody')
 <div class="container" id="welcomview">
    <div class="row">
        <div class="col-md-5" id="motto" style="padding:80px 50px">
            <h1><strong>Menelik Question Bank</strong></h1>
            <p><strong>Aweb Application for a Repositoring (storing) Ethiopian National Exam and Model Question paper on cloude</strong></p>
            
            <p>powered by realPower</p>
        </div>
        <div class="col-md-6" id="menu" style="padding:40px 10px">
            {!! Form::open(['route' => 'get.register', 'class' => 'form-horizontal']) !!}
                @include('pages.includes.errors')
                @include("auth.partials.regisForm")
            {!! Form::close()!!}
        </div>
    </div>
 </div>
@stop