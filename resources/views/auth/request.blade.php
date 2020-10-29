@extends('templates.index')

@section('head')
   @include('templates.head')
@endsection
@section('content')
<!-- Start header -->
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/images/logo.jpg" alt="image"></a>
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
                            <li><a class="nav-link" href="{{ url('/profil') }}">profil</a></li>
                            <li><a class="nav-link" href="{{ url('/admin') }}">admin</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('login') }}">connection</a></li>
    
                            @if (Route::has('register'))
                                <li><a class="nav-link" href="{{ route('register') }}">S'inscrire</a></li>
                            @endif
                        @endauth
                    @endif  
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container mt-5 border">
    <div class="row">
        <div class="col-md-12 col-md-offset-2 mt-2 mb-2">
            @if (session('error'))
                <div class="alert alert-danger">
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="panel panel-default text-center">
                <div class="panel-heading">Demande d'invitation</div>

                <div class="panel-body text-center">
                    <p>{{ config('app.name') }} est une communauté fermée. Vous devez avoir un lien d'invitation pour vous inscrire. Vous pouvez demander votre lien ci-dessous.</p>

                    <form class="form-horizontal text-center" method="POST" action="{{ route('storeInvitation') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Nom : </label>

                            <div class="col">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail : </label>

                            <div class="col">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">
                                    Demande d'invitation
                                </button>

                                <a class="btn btn-link" href="{{ route('login') }}">
                                    Vous avez déjà un compte?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
@endsection

@section('footer')
   @include('templates.footer')
@endsection

@section('script')
   @include('templates.script')
@endsection