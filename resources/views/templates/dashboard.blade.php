<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TheRealWedding</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="/assets/css/mdb.min.css">

    <!-- Your custom styles (optional) -->
    <!-- Site Icons -->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="/css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">
</head>

<body class="fixed-sn white-skin">
    <!-- Main Navigation -->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-3 fixed">
            <ul class="custom-scrollbar">

                <!-- Logo -->
                <li class="logo-sn waves-effect py-3">
                    <div class="text-center">
                        <a href="/" class="pl-0"><img src="/images/logo.jpg" alt="image"></a>
                    </div>
                </li>

                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a href="/admin" class="collapsible-header waves-effect">
                                <i class="w-fa fas fa-tools pink-text"></i>Admin Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="/header" class="collapsible-header waves-effect">
                                <i class="w-fa fas fa-window-maximize text-info"></i>Header
                            </a>
                        </li>
                        <li>
                            <a href="/about" class="collapsible-header waves-effect">
                                <i class="w-fa fas fa-user-friends pink-text"></i>Us
                            </a>
                        </li>
                        <li>
                            <a href="/gallery" class="collapsible-header waves-effect">
                                <i class="w-fa fas fa-images text-info"></i>Gallery
                            </a>
                        </li>
                        <li>
                            <a href="/mail" class="collapsible-header waves-effect">
                                <i class="w-fa fas fa-envelope pink-text"></i>Mail
                            </a>
                        </li>
                        <li>
                            <a href="/adminpro" class="collapsible-header waves-effect">
                                <i class="w-fa fas fa-key text-info"></i>Admin profil
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Side navigation links -->

            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!-- Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link text-info" href="/">Home</a></li>
                        <li><a class="nav-link pink-text" href="/#about">About Us</a></li>
                        <li><a class="nav-link text-info" href="/#gallery">Gallery</a></li>
                        @if (Route::has('login'))
                        @auth
                        <li><a class="nav-link pink-text" href="{{ url('/profil') }}">Profil</a></li>
                        @else
                        <li><a class="nav-link" href="{{ route('login') }}">connection</a></li>

                        @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">S'inscrire</a></li>
                        @endif
                        @endauth
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-info" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!-- Main Navigation -->
    {{-- layout --}}
    <main class="card-body">
        @yield('content')
    </main>
    {{-- endlayout --}}
    <!-- Footer -->
    {{-- <footer class="footer-box">
        <div class="container mt-1">
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">The Real Wedding</a>
                        Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- end Footer -->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/assets/js/mdb.min.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    
        var container = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(container, {
          wheelSpeed: 2,
          wheelPropagation: true,
          minScrollbarLength: 20
        });
    
        // Material Select Initialization
        $(document).ready(function () {
          $('.mdb-select').materialSelect();
        });
    
      </script>
</html>