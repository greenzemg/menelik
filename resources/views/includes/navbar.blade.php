@if (Auth::guest()) 
    <div class="container navbar-fixed-top" id="head-banner">
        <div class="row">
            <div class="col-md-4">
                 {!! Html::image('/images/neo.png') !!}
            </div>
            <div class="col-md-4 pull-right" style="text-align:right; padding: 10px">
                <p>Protected by <strong>cron</strong><strong style="color:red">App</strong> <small>and </small><strong> cron</strong><strong style="color:yellow">Sec</strong> Companies</p>
                <p>Powered by <strong>RealPower</strong></p>
            </div>    
        </div>       
    </div>
@else
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand active" href="{{ route('home')}}">Minilik QB</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav pull-center">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('user.profile.show', Auth::user()->id) }}">Profile</a></li>
            <li><a href="{{route('user.profile.edit', Auth::user()->id) }}">Settings</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::guest())
            <li {!! (Request::is('login') ? ' class="active"' : '') !!}><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li {!! (Request::is('users/register') ? ' class="active"' : '') !!}><a href="#"><span class="glyphicon glyphicon-registration-mark"></span> Registration</a></li>   
        @else
            <li {!! (Request::is('user/profile/*') ? ' class="active"' : '') !!}><a href="{{route('user.profile.show', Auth::user()->id) }}"><span class="glyphicon glyphicon-user">({{Auth::user()->username}})<span></a></li>                
            <li><a href="{{ route('get.logout') }}"><span class="glyphicon glyphicon-log-out">Logout<span></a></li>
            <li {!! (Request::is('user/dashboard') ? ' class="active"' : '') !!}><a href="{{ route('user.dashboard.index') }}"><span class="glyphicon glyphicon-home">Dasheboard<span></a></li>
        @endif
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">help <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
      <div id="search" class="">
          {!! Form::open(['route'=>'home', 'class'=>'navbar-form navbar-left', 'role'=>'search']) !!}

              {!! Form::token() !!}

              <div class="form-group">
                  {!! Form::text('keyword', 'Search', array('class'=>'form-control', 'required' =>'required',  'placeholder'=>'search', 'id'=>'keyword')) !!}
                  {!! Form::submit('Search', ['class' =>'btn btn-default form-control']) !!}
              </div>
          {!! Form::close()!!}
      </div> <!-- end of seach -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
@endif