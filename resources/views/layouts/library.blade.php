@section('library')
<!-- library inicio -->
  <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


{{-- <link rel="shortcut icon" href="{{url("/content/favicon/favicon.png")}}" type="image/x-icon"> --}}
{{-- <link rel="icon" href="{{url("/content/favicon/favicon.png")}}" type="image/x-icon"> --}}
<link rel="apple-touch-icon" sizes="57x57" href="{{url("/content/favicon/apple-icon-57x57.png")}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{url("/content/favicon/apple-icon-60x60.png")}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{url("/content/favicon/apple-icon-72x72.png")}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{url("/content/favicon/apple-icon-76x76.png")}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{url("/content/favicon/apple-icon-114x114.png")}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{url("/content/favicon/apple-icon-120x120.png")}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{url("/content/favicon/apple-icon-144x144.png")}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{url("/content/favicon/apple-icon-152x152.png")}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{url("/content/favicon/apple-icon-180x180.png")}}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{url("/content/favicon/android-icon-192x192.png")}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{url("/content/favicon/favicon-32x32.png")}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{url("/content/favicon/favicon-96x96.png")}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{url("/content/favicon/favicon-16x16.png")}}">
<link rel="manifest" href="{{url("/content/favicon/manifest.json")}}">
<meta name="msapplication-TileColor" content="#3f51b5">
<meta name="msapplication-TileImage" content="{{url("/content/favicon/ms-icon-144x144.png")}}">
<meta name="theme-color" content="#3f51b5">


    <!--Import .css  https://mdbootstrap.com/support/side-nav-scrolling/-->

    <!-- Font Awesome -->
    <link type="text/css" rel="stylesheet" href="{{url("/css/font-awesome.min.css")}}" />
    <!-- Bootstrap core CSS -->
    <link href="{{url("/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Material Design Bootstrap  robe el compilado-->
    {{-- <link href="css/mdb.min.css" rel="stylesheet"> --}}
    {{-- <link href="css/compiled.min.css" rel="stylesheet"> --}}
    <link href="{{url("/css/compiled3.min.css")}}" rel="stylesheet">
    <!-- <link href="css/dashboard.bundle.css" rel="stylesheet"> -->
    <!-- Your custom styles (optional) -->
    {{-- <link href="css/style.css" rel="stylesheet"> --}}

    <style type="text/css">
       .mdb-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active, .mdb-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus, .mdb-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover{
            background-color: #3f51b5;
        }
.side-nav .logo-wrapper img
{
    padding:  10px;
                padding-left: 73px;
    height: 110px;
}


.select-wrapper input.select-dropdown {
        font-size: .8rem;
}
/*
 .form-group label.control-label{
    font-size: .9rem;
        color: #757575;
        transition: .2s ease-out;

    top: .8rem;
    left: 0;
    font-size: 1rem;
    cursor: text;
 }*/

    </style>

<style type="text/css">
/*
 style=" float:left; top: 60px; right: -75px; z-index: 1;"
*/
.todo{
  height: 100%;
  width:100%;
}
.topFix{
    top: 60px;
    right: 2%;
     z-index: 1
}
@media (min-width: 768px) {
  .topFix{
    position: absolute;
    top:-15px;
right: -70px;
z-index: -5;
  }
}


.pagination {
     /*display: inline-block;*/
}

.pagination span,.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination li.active span {
    background-color: #5c6bc0   ;
    color: white;
    border-radius: 33px 33px 33px 33px;
-moz-border-radius: 33px 33px 33px 33px;
-webkit-border-radius: 33px 33px 33px 33px;

}

.pagination a:hover:not(.active) {background-color: #ddd;}


</style>

</head>

    <!--Library FIN  -->
@endsection
