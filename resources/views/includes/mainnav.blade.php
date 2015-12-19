@if(false)
<nav class="navbar navbar-default" id="sub-navbar" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#subnav">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="subnav">
    <ul class="nav navbar-nav">
	  	<li{!! (Request::is("/dashboard") ? ' class="active"' : '') !!}><a href="{{ route('dash.index')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        @if(Auth::guest())
        
        @else
          <li {!! (Request::is("questions") ? ' class="active"' : '') !!}><a href="{!! URL::to('/questions') !!}">Model Ques</a></li>
          <li{!! (Request::is("nationalexame") ? ' class="active"' : '') !!}><a href="{URL::route('nationalexame.index') }"><span class="glyphicon glyphicon-globe"></span> National Exam</a></li>
        @endif
        
    </ul>
    <div id="search" class="pull-right">
        {!! Form::open(['route'=>'home', 'class'=>'navbar-form navbar-left', 'role'=>'search']) !!}

            {!! Form::token() !!}

            <div class="form-group">
                {!! Form::text('keyword', 'Search', array('class'=>'form-control', 'required' =>'required',  'placeholder'=>'search', 'id'=>'keyword')) !!}
                {!! Form::submit('Search', ['class' =>'btn btn-default form-control']) !!}
            </div>
        {!! Form::close()!!}
    </div> <!-- end of seach -->
  </div><!-- /.navbar-collapse -->
</nav>
@endif

