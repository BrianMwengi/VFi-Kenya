<!DOCTYPE html>
<html lang="en">
  <head>
    <title>VFi Kenya</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">
   
    <link rel="stylesheet" href="{{ secure_asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ secure_asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ secure_asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    

    

  </head>

  <body>
   
        @include('inc.navbar')
        
        
            @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><!--<i class="flaticon-cross">--><a href="#"></i><span>VFi</span><span>Nairobi</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <!--<li><a href="#" class="py-2 d-block">Church kids</a></li>-->
                <li><a href="#" class="py-2 d-block">Community</a></li>
                <li><a href="#" class="py-2 d-block">Ministries</a></li>
                <li><a href="#" class="py-2 d-block">Message</a></li>
                <li><a href="#" class="py-2 d-block">Sermons</a></li>
                <li><a href="#" class="py-2 d-block">Events</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <!--<li><a href="#" class="py-2 d-block"></a>Tumain house opposite kenya commercial bank</li>-->
                <li><a href="#" class="py-2 d-block">0748882969</a></li>
                <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                <li><a href="#" class="py-2 d-block">email@email.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Tumain house opposite kenya commercial bank</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0748882969</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	                <li><span class="icon icon-clock-o"></span><span class="text"> &mdash; Sunday 3:00pm - 5:00pm</span></li>
	              </ul>
	            </div>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy; 2020 All rights reserved. 
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
  <script src="{{ asset ('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset ('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset ('js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('js/aos.js')}}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
  <script src="{{ asset('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset ('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/google-map.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
</body>
</html>
   
