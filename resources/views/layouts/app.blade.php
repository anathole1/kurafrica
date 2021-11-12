<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
  
        {{-- <script src="{{ asset('js/scripts.js') }}" ></script> --}}
    <!-- Styles -->
    <link rel="icon" href="{{asset('images/krafrica.png')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-main text-second shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('images/krafrica.png')}}" alt="KURAFRICA"  width="100" height="50">
                   
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/staffs">Staff</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Services
                            </a>
                            <div class="dropdown-menu dropdown-menu-right bg-main" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/hoc">Home/Online Coaching</a>
                                <a class="dropdown-item" href="/elibrary">E-library</a>
                                <a class="dropdown-item" href="/lendbook">Lending Books</a>
                                <a class="dropdown-item" href="/childmentorship">Children Mentorship</a>
                                <a class="dropdown-item" href="/ethical">Ethical Training</a>
                                <a class="dropdown-item" href="/internship">Internship</a>
                                <a class="dropdown-item" href="/schorlaship">Schorlaship</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/mentee_application/create">Mentee Application</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/impact">Impact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact_us/create">Contact</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.kurafrica.com/webmail" target="_blank">Webmail</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                               
                                    <a class="nav-link" href="{{ route('login') }}">&#11177; {{ __('Login') }}</a>
                                </li>
                            @endif

                          @if (Route::has('register')) 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif 
                        @else
                            <li class="nav-item">
                                <a href="/home" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-2 " style="min-height: 23rem">
            @include('inc.messages')
            @yield('content')



    
        </main>
                 <!-- footer section -->
    <footer class="pt-4 bg-second text-white">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <h4 class="space-1">Links</h4>
                    <li class="nav-item">
                        <a class="list" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="list" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="list" href="/staffs">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="list" href="/contact/create">Contact us</a>
                    </li>
                </div>
                <div class="col">
                    <h4 class="space-1">Our Address</h4>
                    <address>
          Kigali,Rwanda<br>
          KN03 st<br>
          <i class="fa fa-phone fa-lg"></i> +250 785 383 595<br>
          
          <i class="fa fa-envelope fa-lg"></i> <a href="mailto:info@kurafrica.com">info@kurafrica.com</a>
       </address>
                </div>
                <div class="col">
                    <h4 class="space-1">Social media</h4>
                    <div class="text-white w-100">
                        <a class="btn btn-social-icon btn-facebook text-white" href="https://web.facebook.com/profile.php?id=100064527130970"><i class="fa fa-facebook"></i> kurafrica</a>
                        <a class="btn btn-social-icon btn-linkedin text-white" href="https://www.linkedin.com/in/kurafrica-rw-b80899219/"><i class="fa fa-linkedin"></i> kurafrica</a>
                        <a class="btn btn-social-icon btn-twitter text-white" href="https://twitter.com/kurafrica1"><i class="fa fa-twitter"></i> kurafrica</a>
                        <a class="btn btn-social-icon btn-twitter text-white" href="https://www.instagram.com/kurafricarw/"><i class="fa fa-instagram"></i> kurafrica</a>
                        <a class="btn btn-social-icon btn-google text-white" href="http://youtube.com/"><i class="fa fa-youtube"></i> kurafrica</a>
                        <a class="btn btn-social-icon text-white " href="mailto:info@kurafrica.com"><i class="fa fa-envelope"></i> info@kurafrica.com</a>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center border-top">
                <div class="col-auto py-2">
                    <p>© kurafrica | <a href="#">Powered by KendGroup Ltd</a> </p>
                </div>
            </div>
        </div>

    </footer>
    </div>



    <style>
        .owl-carousel .item {
          height: 13rem;
          background: #025a6c;
          padding: 1rem;
        }
        .owl-carousel .item img {
          color: #FFF;
          font-weight: 400;
          margin-top: 0rem;
          height: 150px;
          object-fit: cover;
         }
        </style>    
        <script>
            jQuery(document).ready(function($){
          $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
              0:{
                items:1
              },
              600:{
                items:3
              },
              1000:{
                items:5
              }
            }
          })
        })
        </script>
</body>
</html>
