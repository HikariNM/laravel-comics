<header>
    <nav class="navbar navbar-expand-lg bg-white py-2">
        <div class="container px-4">
    
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#dcNav">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-center" id="dcNav">
                <ul class="navbar-nav gap-1">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold small {{ Route::is('characters') ? 'text-primary border-bottom border-primary border-2' : 'text-dark' }}" href="">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold small {{ Route::is('comics') ? 'text-primary border-bottom border-primary border-2' : 'text-dark' }}" href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold small {{ Route::is('movies') ? 'text-primary border-bottom border-primary border-2' : 'text-dark' }}" href="">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold small {{ Route::is('tv') ? 'text-primary border-bottom border-primary border-2' : 'text-dark' }}" href="">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold small {{ Route::is('games') ? 'text-primary border-bottom border-primary border-2' : 'text-dark' }}" href="">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold small {{ Route::is('collectibles') ? 'text-primary border-bottom border-primary border-2' : 'text-dark' }}" href="">Collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold small {{ Route::is('videos') ? 'text-primary border-bottom border-primary border-2' : 'text-dark' }}" href="">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold small {{ Route::is('fans') ? 'text-primary border-bottom border-primary border-2' : 'text-dark' }}" href="}">Fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold small {{ Route::is('news') ? 'text-primary border-bottom border-primary border-2' : 'text-dark' }}" href="">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold small {{ Route::is('shop') ? 'text-primary border-bottom border-primary border-2' : 'text-dark' }}" href="{{ route('shop') }}">Shop</a>
                    </li>
                </ul>
            </div>
    
        </div>
    </nav>
</header>