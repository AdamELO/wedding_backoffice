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
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a class="nav-link" href="{{ url('/profil') }}">profil</a></li>
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
	<!-- End header -->