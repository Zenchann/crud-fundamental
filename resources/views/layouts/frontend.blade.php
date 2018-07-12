<!doctype html>
<html lang="en">
  <head>
    <title>SMK Assalaam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/style.css')}}">
  </head>
  <body>
    


    @include('partials.frontend.header')
    <!-- END header -->

    <section class="site-section pt-5">
      @yield('content')
    </section>
    {{-- <section class="site-section py-sm">
    @include('partials.frontend.side')
    </section> --}}
      <!-- END section -->

    <section class="site-section py-sm">
    </section>
  
    @include('partials.frontend.footer')
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{ asset('assets/frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.stellar.min.js')}}"></script>
    @yield('js')
    @stack('scripts')
    
    <script src="{{ asset('assets/frontend/js/main.js')}}"></script>
  </body>
</html>