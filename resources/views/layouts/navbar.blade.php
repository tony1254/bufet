@section('navbar')
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark indigo fixed-top scrolling-navbar double-nav">
    <!-- SideNav slide-out button -->
    <a href="#" data-activates="slide-out" class="nav-link white-text button-collapse">
        <!--     <i class="fa fa-bars"></i> -->
        <span class="navbar-toggler-icon"></span>
    </a>
    <!-- Navbar brand -->
    <a class="navbar-brand " href="/">
        <img src="{{url("/content/T.png")}}" height="40" alt="">
        
    </a>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
        </ul>
        <!-- Links -->
        <!-- iconos -->
        <ul class="navbar-nav ml-auto nav-flex-icons align-self-end">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">1 <i class="fa fa-envelope"></i></a>
            </li>
            @guest
            <li><a class="nav-link  waves-effect waves-light" href="{{ route('login') }}">Login</a></li>
            <li><a class="nav-link  waves-effect waves-light" href="{{ route('register') }}">Register</a></li>
            @else
            <li class="nav-item avatar dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} 
                    <img  src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="img-fluid rounded-circle z-depth-0">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-purple" aria-labelledby="navbarDropdownMenuLink-5" style="position: absolute;">
                    <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                    <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                    <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
                    <a class="dropdown-item waves-effect waves-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off red-text" aria-hidden="true"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
    <!-- Collapsible content -->
</nav>
<!--/.Navbar-->
<!-- Sidebar navigation -->
<!-- <div id="slide-out" class="side-nav fixed">
  <ul class="custom-scrollbar list-unstyled ps ps--theme_default ps--active-y"> -->
    <div id="slide-out" class="side-nav sn-bg- fixed indigo darken-3">
        <ul class="custom-scrollbar list-unstyled ps  ps--active-y" style="max-height:100vh;">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light" style=" height: 100px;">
                    <a href="#"><img src="{{url("/content/T.png")}}" height="20px"  class="img-fluid flex-center">
                    <br></a>
                </div>
            </li>
            <!--/. Logo -->
            <!--Social-->
        <li>
    <ul class="social">
        <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
        <li><a href="#" class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
        <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
        <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
    </ul>
</li>
<!--/Social-->
<!--Search Form-->
<li>
    <form class="search-form" role="search">
        <div class="form-group waves-light">
            <input type="text" class="form-control" placeholder="Buscar">
        </div>
    </form>
</li>
<!--/.Search Form-->
<!-- Side navigation links -->
<li>
    <ul class="collapsible collapsible-accordion">
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Administracion<i class="fa fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="{{url("/users")}}" class="waves-effect">Usuarios</a>
                    </li>
                    <li><a href="#" class="waves-effect">Registration form</a>
                    </li>
                </ul>
            </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Instruction<i class="fa fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#" class="waves-effect">For bloggers</a>
                    </li>
                    <li><a href="#" class="waves-effect">For authors</a>
                    </li>
                </ul>
            </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#" class="waves-effect">Introduction</a>
                    </li>
                    <li><a href="#" class="waves-effect">Monthly meetings</a>
                    </li>
                </ul>
            </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact me<i class="fa fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#" class="waves-effect">FAQ</a>
                    </li>
                    <li><a href="#" class="waves-effect">Write a message</a>
                    </li>
                    <li><a href="#" class="waves-effect">FAQ</a>
                    </li>
                    <li><a href="#" class="waves-effect">Write a message</a>
                    </li>
                    <li><a href="#" class="waves-effect">FAQ</a>
                    </li>
                    <li><a href="#" class="waves-effect">Write a message</a>
                    </li>
                    <li><a href="#" class="waves-effect">FAQ</a>
                    </li>
                    <li><a href="#" class="waves-effect">Write a message</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</li>
<!--/. Side navigation links -->
</ul>
</div>
<!--/. Sidebar navigation -->
@endsection