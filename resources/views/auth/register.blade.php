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
                            <li><a class="nav-link" href="{{ url('/profil') }}">profil</a></li>
                            <li><a class="nav-link" href="{{ url('/admin') }}">admin</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('login') }}">connection</a></li>
    
                            @if (Route::has('register'))
                                <li><a class="nav-link active" href="{{ route('register') }}">S'inscrire</a></li>
                            @endif
                        @endauth
                @endif
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control disabled" value="{{ $name }}" disabled>
                                <input id="name" type="hidden" class="form-control disabled" name="name" value="{{ $name }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control disabled" value="{{ $email }}" disabled>
                                <input id="email" type="hidden" class="form-control disabled" name="email" value="{{ $email }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
@endsection
@section('footer')
   @include('templates.footer')
@endsection

@section('script')
   @include('templates.script')
@endsection
