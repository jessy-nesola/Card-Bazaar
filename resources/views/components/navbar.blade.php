<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">CardBazaar.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item @if (Route::currentRouteName() == 'homepage')  @endif">
                    <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() == 'announcements.index')  @endif">
                    <a class="nav-link" href="{{ route('announcements.index') }}">Esplora</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Pokémon</a></li>
                        <li><a class="dropdown-item" href="#">Yu-Gi-Oh!</a></li>
                        <li><a class="dropdown-item" href="#">Flesh and Blood</a></li>
                        <li><a class="dropdown-item" href="#">Digimon</a></li>
                        <li><a class="dropdown-item" href="#">Force of will</a></li>
                        <li><a class="dropdown-item" href="#">One Piece</a></li>
                        <li><a class="dropdown-item" href="#">Dragon Ball Super</a></li>
                        <li><a class="dropdown-item" href="#">Disney Lorcana</a></li>
                        <li><a class="dropdown-item" href="#">Final Fantasy</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Visualizza pagina</a></li>
                    </ul>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('announcements.create') }}" tabindex="-1"
                        aria-disabled="true">Inserisci annuncio</a>
                </li>
                @endauth
                
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                @guest
                    <div class="nav-item">
                        <a class="btn btn-outline-light m-2" href="{{ route('login') }}">Login/Register</a>
                    </div>
                @else
                    <div class="nav-item">
                        <a class="btn btn-outline-light m-2">
                            Utente: {{ Auth::user()->name }}
                        </a>
                    </div>
                    <div class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-outline-light m-2"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </button>
                        </form>
                    </div>
                @endguest
            </ul>
        </div>
    </div>
</nav>
