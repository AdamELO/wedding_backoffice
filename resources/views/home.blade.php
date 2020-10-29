@extends('templates.index')
@section('head')
   @include('templates.head')
@endsection
@section('loader')
    @include('templates.loader')
@endsection
@section('content')
<!-- Start header -->
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="images/logo.jpg" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link" href="/">Home</a></li>
                    <li><a class="nav-link" href="/#about">About Us</a></li>
                    <li><a class="nav-link" href="/#gallery">Gallery</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
                            @Admin
                            <li><a class="nav-link" href="{{ url('/admin') }}">admin</a></li>
                            @endAdmin
                        @else
                            <li><a class="nav-link" href="{{ route('login') }}">connection</a></li>
    
                            @if (Route::has('register'))
                                <li><a class="nav-link" href="{{ route('register') }}">S'inscrire</a></li>
                            @endif
                        @endauth
                @endif
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Bonjour {{Auth::user()->name}}</h2>
                    <h4>Voici votre rôle : {{Auth::user()->role->name}}</h4>
                    @Admin
                        <a class="btn btn-success" href="{{ url('/admin') }}">Acceder au Dashboard de l'admin</a>
                    @endAdmin
                    @if (Auth::user()->role_id != 1)
                        <p>Comme vous n'êtes pas Admin vous ne pouvez rien modifier <br> merci de vous être inscrit quand même</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
   @include('templates.script')
@endsection
