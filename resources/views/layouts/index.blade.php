<!DOCTYPE html>
<html lang="en">
  <head>
    <title>freechild</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <!-- <div class="img img-about align-self-stretch" style="background-image: url(images/logo.jpg); width: 100%;"></div> -->
    <a class="navbar-brand" href="{{ route('index') }}"><img style="border-radius: 500px; width='100px' height='100px'" src="{{url('images/logo6.jpg')}}">fcf</a>
      <!-- <a class="navbar-brand" href="{{ route('index') }}">fcf</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ route('index')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ route('about')}}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ route('preamble')}}" class="nav-link">Preamble</a></li> 
          <!-- <li class="nav-item"><a href="#" class="nav-link">Blog</a></li> -->
          <!-- <li class="nav-item"><a href="#" class="nav-link">Gallery</a></li> -->
          <li class="nav-item"><a href="{{ route('team')}}" class="nav-link">Team</a></li>
          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact</a></li>
         
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
  @yield('content')
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>The Organization has been registered as a Non - Governmental Organization under the Non - Governmental Organizations Act, No. 24 of 2002 as amended from time to time with license No.
                .</p>
            </div>
          </div>
           <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <!-- <h2 class="ftco-heading-2"></h2> -->
              <div class="block-21 mb-4 d-flex">
                <!-- <a class="blog-img mr-4" style="background-image: url(images/jamb-3.jpg);"></a> -->
                <div class="text">
                  <p></p>
                  <!-- <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> </a></div>
                    <div><a href="#"><span class="icon-person"></span> </a></div>
                    <div><a href="#"><span class="icon-chat"></span></a></div>
                  </div> -->
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <!-- <a class="blog-img mr-4" style="background-image: url(images/talent2.jpg);"></a> -->
                <div class="text">
                  <p></p>
                  <!-- <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> </a></div>
                    <div><a href="#"><span class="icon-person"></span> </a></div>
                    <div><a href="#"><span class="icon-chat"></span> </a></div>
                  </div> -->
                </div>
              </div>
            </div>
          </div> 
          
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Question?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Kibaha in Pwani Region - Tanzania</span></li>
	                <li><a href="tel://1234567920"><span class="icon icon-phone"></span><span class="text">+255735319764</span></a></li>
	                <li><a href="mailto:freechildtz@gmail.com"><span class="icon icon-envelope"></span><span class="text">freechildtz@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is developed by <a href="https://kuolmarko24.github.io" target="_blank">Kuol Marko</a>
 </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('js/popper.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('js/aos.js')}}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  {{-- <script src="{{ asset('js/google-map.js')}}"></script> --}}
  <script src="{{ asset('js/main.js')}}"></script>
    
    
  </body>
</html>