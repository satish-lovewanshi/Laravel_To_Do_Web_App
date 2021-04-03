<!DOCTYPE html>
<html lang="en">
<head>

     <title>Digital Trend HTML Template</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/aos.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('css/templatemo-digital-trend.css')}}">

</head>
<body>

     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg mb-5">
        <div class="container">
            <a class="navbar-brand" href="/">
              <i class="fa fa-line-chart"></i>
              Let's Do Now !
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link smoothScroll">Home</a>
                    </li>
                    
                    <!-- Html links simple way  -->
                    <li class="nav-item">
                        <a href="{{route('blog')}}" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact')}}" class="nav-link contact">Contact</a>
                    </li>
                     <!-- Authentication Links -->
                     @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <!-- Try Url method -->
                            <li class="nav-item">
                                <a href="{{url('todo')}}" class="nav-link smoothScroll">Upcomming Work</a>
                            </li>
                            <!-- Try route  to url  -->
                            <li class="nav-item">
                                <a href="{{ route('todo.create')}}" class="nav-link smoothScroll">Add New Works</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Str::upper(Auth::user()->name) }}
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
    @yield('content')

     <!-- SCRIPTS -->
     <script src="{{asset('js/jquery.min.js')}}"></script>
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
     <script src="{{asset('js/aos.js')}}"></script>
     <script src="{{asset('js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('js/smoothscroll.js')}}"></script>
     <script src="{{asset('js/custom.js')}}"></script>

</body>
</html>