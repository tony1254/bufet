<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @yield('library')
    @yield('head')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}
        @yield('title')
    </title>
</head>

<body class="grey  lighten-2  fixed-sn mdb-skin">
    @yield('alert')
    @yield('navbar')
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="display:none">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <p></p>
        <!-- main -->
        <!--Main layout-->
        <main>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif {!! Alert::render() !!}
            <!--Error message-->
            <div class="container card cascading-admin-card " style="width:100%; height:100%;">
                @yield('content')
                <br>
                <br>
            </div>
        </main>
        <!-- /main -->
    </div>
    <!-- FOOTER -->
    @yield('footer')
    <!-- /FOOTER -->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{url("/js/jquery.min.js")}}"></script>
    <!-- <script type="text/javascript" src="node_modules/MDB/js/jquery-3.2.1.min.js"></script> -->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{url("/js/popper.min.js")}}"></script>
    <script type="text/javascript" src="{{url("/js/compiled.min.js")}}"></script>
    <!-- Bootstrap core JavaScript -->
    <!-- <script type="text/javascript" src="node_modules/MDB/js/bootstrap.min.js"></script> -->
    <!-- MDB core JavaScript -->
    <!-- <script type="text/javascript" src="node_modules/MDB/js/mdb.min.js"></script> -->
    <script type="text/javascript">
    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').material_select();
    });
    new WOW().init();
    // $(".button-collapse").sideNav();
    $('.button-collapse').sideNav({ edge: 'left', closeOnClick: true });
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
    $(function() {
        console.log("ready!");
    });
    </script>
    @yield('script')
</body>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <script type="text/javascript">
        $(function() {
            toastr.error('{{ $error }}.')
        });
        </script>
        @endforeach
    </ul>
</div>
@endif

</html>
