<ul class="nav nav-sidebar">
    <li class="active"><a href="{{route('backend.dashboard.index')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
    <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Setting</a></li>
</ul>
<ul class="nav nav-sidebar">
    <li>
        <a href="#" data-toggle="collapse" data-target="#usermenu"> <span class="glyphicon glyphicon-user"></span> Users <span class="caret"></span></a>
        <ul id="usermenu" class="collapse nav nav-subnav">
            <li><a href="{{route('backend.users.index')}}">All Users</a></li>
            <li><a href="http://lara5example.app/user/create">Create</a></li>
            <li><a href="http://lara5example.app/user/roles">Roles</a></li>
         </ul>
    </li>
    <li><a href="">Posts</a></li>
</ul>
