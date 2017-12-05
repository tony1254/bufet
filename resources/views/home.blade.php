@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif @if(Auth::user()->hasRole('admin'))
                    <div>Acceso como administrador</div>
                    @else
                    <div>Acceso usuario</div>
                    @endif You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;">
    <a href="#top-section" class="btn-floating btn-large red">
        <i class="fa fa-arrow-up"></i>
    </a>
</div>
<div id="top-section" class="wow fadeInUp">
    <div class="form-group">
    <input type="checkbox" id="checkbox1">
    <label for="checkbox1">Classic checkbox</label>
</div>

<div class="form-group">
    <input type="checkbox" class="filled-in" id="checkbox2">
    <label for="checkbox2">Filled-in checkbox</label>
</div>
        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
<select class="selectpicker">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>

<select class="mdb-select" id="rol" name="rol">
    <option value="" disabled selected>Choose your option</option>
    <option value="admin">Administrador</option>
    <option value="user">Usuario</option>
</select>
<label>ROles</label>
<!--Blue select-->
<select class="mdb-select colorful-select dropdown-primary">
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
    <option value="4">Option 4</option>
    <option value="5">Option 5</option>
</select>
<label>Blue select</label>
eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee

              <!-- Switch -->
  <div class="switch">
    <label>
      Off
      <input type="checkbox">
      <span class="lever"></span>
      On
    </label>
  </div>
<!-- <a class="btn-floating btn-lg purple-gradient  button-collapse"><i class="fa fa-bolt"></i></a> -->
<a class="btn-floating peach-gradient"><i class="fa fa-leaf"></i></a>
<a class="btn-floating btn-sm blue-gradient"><i class="fa fa-star"></i></a>
<button class="btn peach-gradient btn-rounded">Peach</button>
<button class="btn purple-gradient btn-rounded">Purple</button>
<button class="btn blue-gradient btn-rounded">Blue</button>
<button class="btn aqua-gradient btn-rounded">Aqua</button>  
</div>

<div class="view intro hm-white-light jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2844%29.jpg); height: 1200px;">
    <div class="full-bg-img">
        <div class="container">
            <div class="d-flex align-items-center d-flex justify-content-center" style="height: 850px">
                <div class="row mt-5">
                    <div class="col-md-12 wow fadeIn mb-3">
                        <div class="intro-info-content text-center ">
                            <h1 class="display-1 mb-2 wow fadeInDown" data-wow-delay="0.3s">NATALIE <a class="indigo-text font-bold">SMITH</a></h1>
                            <h5 class="font-up mb-3 mt-1 font-bold wow fadeIn" data-wow-delay="0.4s">Web developer & graphic designer</h5>
                            <a class="btn btn-light-blue btn-lg wow fadeIn" data-wow-delay="0.4s">portfolio</a> <a class="btn btn-indigo btn-lg wow fadeIn" data-wow-delay="0.4s">About me</a> </div>
                            <button type="button" class="btn btn-outline-primary waves-effect">Primary</button>
<button type="button" class="btn btn-outline-white waves-effect">Default</button>
<button type="button" class="btn btn-outline-secondary waves-effect">Secondary</button>
<button type="button" class="btn btn-outline-success waves-effect">Success</button>
<button type="button" class="btn btn-outline-info waves-effect">Info</button>
<button type="button" class="btn btn-outline-warning waves-effect">Warning</button>
<button type="button" class="btn btn-outline-danger waves-effect">Danger</button>
                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 text-center mb-3">
    
            <h1 class="font-bold light-blue-text my-3">Lorem ipsum dolor sit amet, consectetur quis elit.</h1>
            <p align="justify">Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.</p>
    
        </div>
        <!--Grid column-->
    
    </div>
    <!--Grid row-->

</div>

<div class="view intro hm-white-light jarallax" data-jarallax-video="https://vimeo.com/groups/freehd/videos/153749651" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2844%30.jpg);">
    <div class="full-bg-img">
        <div class="container">
            <div class="d-flex align-items-center d-flex justify-content-center" style="height: 700px">
                <div class="row mt-5">
                    <div class="col-md-12 wow fadeIn mb-3">
                        <div class="intro-info-content text-center wow animated bounceInUp">
                            <h1 class="display-1 mb-2 wow fadeInDown" data-wow-delay="0.3s">ANNA'S <a class="white-text font-bold">BLOG</a></h1>
                            <h5 class="font-up mb-3 mt-1 font-bold wow fadeIn" data-wow-delay="0.4s">Interior designer & Nature lover</h5>
                            <a class="btn btn-elegant btn-lg wow fadeIn" data-wow-delay="0.4s">portfolio</a> <a class="btn btn-outline-white btn-lg wow fadeIn" data-wow-delay="0.4s">About me</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 text-center my-3">
    
            <h1 class="font-bold grey-text mb-3">Lorem ipsum dolor sit amet, consectetur quis elit.</h1>
            <p align="justify">Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.</p>
    
        </div>
        <!--Grid column-->
    
    </div>
    <!--Grid row-->

</div>

<div class="view intro hm-pink-slight jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/food2.jpg);">
    <div class="full-bg-img">
        
    </div>
</div>

<div class="view intro hm-purple-slight jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg);">
    <div class="full-bg-img">
        <div class="container">
            <div class="d-flex align-items-center d-flex justify-content-center" style="height: 700px">
                <div class="row mt-5">
                    <div class="col-md-12 wow fadeIn mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-1 white-text mb-2 wow fadeInDown" data-wow-delay="0.3s">Welcome on my page!</h1>
                            <h4 class="mb-3 mt-1 white-text font-bold wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet</h4>
                            <a class="btn btn-pink wow fadeIn" data-wow-delay="0.4s">Read more</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 text-center my-3">
    
            <h1 class="font-bold pink-text mb-3">Lorem ipsum dolor sit amet, consectetur quis elit.</h1>
            <p align="justify">Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.</p>
    
        </div>
        <!--Grid column-->
    
    </div>
    <!--Grid row-->

</div>        <div class="view intro hm-white-light jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2844%29.jpg); height: 1200px;">
    <div class="full-bg-img">
        <div class="container">
            <div class="d-flex align-items-center d-flex justify-content-center" style="height: 850px">
                <div class="row mt-5">
                    <div class="col-md-12 wow fadeIn mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-1 mb-2 wow fadeInDown" data-wow-delay="0.3s">NATALIE <a class="indigo-text font-bold">SMITH</a></h1>
                            <h5 class="font-up mb-3 mt-1 font-bold wow fadeIn" data-wow-delay="0.4s">Web developer & graphic designer</h5>
                            <a class="btn btn-light-blue btn-lg wow fadeIn" data-wow-delay="0.4s">portfolio</a> <a class="btn btn-indigo btn-lg wow fadeIn" data-wow-delay="0.4s">About me</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 text-center mb-3">
    
            <h1 class="font-bold light-blue-text my-3">Lorem ipsum dolor sit amet, consectetur quis elit.</h1>
            <p align="justify">Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.</p>
    
        </div>
        <!--Grid column-->
    
    </div>
    <!--Grid row-->

</div>

<div class="view intro hm-white-light jarallax" data-jarallax-video="https://vimeo.com/groups/freehd/videos/153749651" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2844%30.jpg);">
    <div class="full-bg-img">
        <div class="container">
            <div class="d-flex align-items-center d-flex justify-content-center" style="height: 700px">
                <div class="row mt-5">
                    <div class="col-md-12 wow fadeIn mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-1 mb-2 wow fadeInDown" data-wow-delay="0.3s">ANNA'S <a class="white-text font-bold">BLOG</a></h1>
                            <h5 class="font-up mb-3 mt-1 font-bold wow fadeIn" data-wow-delay="0.4s">Interior designer & Nature lover</h5>
                            <a class="btn btn-elegant btn-lg wow fadeIn" data-wow-delay="0.4s">portfolio</a> <a class="btn btn-outline-white btn-lg wow fadeIn" data-wow-delay="0.4s">About me</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 text-center my-3">
    
            <h1 class="font-bold grey-text mb-3">Lorem ipsum dolor sit amet, consectetur quis elit.</h1>
            <p align="justify">Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.</p>
    
        </div>
        <!--Grid column-->
    
    </div>
    <!--Grid row-->

</div>

<div class="view intro hm-pink-slight jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/food2.jpg);">
    <div class="full-bg-img">
        
    </div>
</div>

<div class="view intro hm-purple-slight jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background.jpg);">
    <div class="full-bg-img">
        <div class="container">
            <div class="d-flex align-items-center d-flex justify-content-center" style="height: 700px">
                <div class="row mt-5">
                    <div class="col-md-12 wow fadeIn mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-1 white-text mb-2 wow fadeInDown" data-wow-delay="0.3s">Welcome on my page!</h1>
                            <h4 class="mb-3 mt-1 white-text font-bold wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet</h4>
                            <a class="btn btn-pink wow fadeIn" data-wow-delay="0.4s">Read more</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 text-center my-3">
    
            <h1 class="font-bold pink-text mb-3">Lorem ipsum dolor sit amet, consectetur quis elit.</h1>
            <p align="justify">Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.</p>
    
        </div>
        <!--Grid column-->
    
    </div>
    <!--Grid row-->

</div>



@endsection
@section('script')
<script type="text/javascript">
</script>
@endsection