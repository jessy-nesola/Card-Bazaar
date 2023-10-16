<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand text-light" href="{{ route('homepage') }}">
            <h3>CardBazaar.</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item @if (Route::currentRouteName() == 'homepage')  @endif">
                    <a class="nav-link text-light" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() == 'announcements.index')  @endif">
                    <a class="nav-link text-light" href="{{ route('announcements.index') }}">Esplora</a>
                </li>
                {{-- DROPDOWN CATEGORIES --}}
                <div class="dropdown">
                    <li class="nav-item @if (Route::currentRouteName() == 'categories.index')  @endif">
                        <a class="nav-link text-light" href="{{ route('categories.index') }}">Categorie</a>
                    </li>
                    <div class="menu">
                        <a href="">Pokémon</a>
                        <a href="#">Yu-Gi-Oh!</a>
                        <a href="#">Flesh and Blood</a>
                        <a href="#">Digimon</a>
                        <a href="#">Force of will</a>
                        <a href="#">One Piece</a>
                        <a href="#">Dragon Ball Super</a>
                        <a href="#">Disney Lorcana</a>
                        <a href="#">Final Fantasy</a>
                    </div>
                </div>    
            </ul>
            <ul class="navbar-nav mb-2 mb-md-0">
                <li><a href="{{ route('announcements.create') }}" class="btn btn-outline-light m-2">Inserisci
                        annuncio</a>
                </li>
                @guest
                    <li><a class="btn btn-outline-light m-2" href="{{ route('login') }}">Login/Logout</a></li>
                @else
                    <li class="btn btn-outline-light m-2">Utente: {{ Auth::user()->name }}</li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-light m-2"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
