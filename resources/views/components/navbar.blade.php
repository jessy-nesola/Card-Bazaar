<nav class="navbar navbar-expand-lg fixed-top shadow-lg border-nav">
    <div class="container-fluid col-11">
        <a class="navbar-brand text-light" href="{{ route('homepage') }}">CardBazaar.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item @if (Route::currentRouteName() == 'homepage') @endif">
                    <a class="nav-link text-white-50" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() == 'announcements.index') @endif">
                    <a class="nav-link text-white-50" href="{{ route('announcements.index') }}">Esplora</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white-50 @if (Route::currentRouteName() == 'categories.index') @endif"
                        href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu drop-nav shadow" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{ route('categories.show', $category->name) }}">{{$category->name}}</a></li>
                        @endforeach
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="item"><a class="dropdown-item" href="{{ route('categories.index') }}">Visualizza tutto</a></li>
                    </ul>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link text-white-50 @if (Route::currentRouteName() == 'announcements.create') @endif" href="{{ route('announcements.create') }}" tabindex="-1"
                        aria-disabled="true">Inserisci annuncio</a>
                </li>
                @endauth
            </ul>

                {{-- FORM SEARCH --}}

            <form action="{{route('announcements.search')}}" method="GET" class="d-flex" role="search">
                <input name="searched" class="form-control me-2" type="search" placeholder="Nome carta.." aria-label="Search">
                <button class="btn btn-warning" type="submit">Cerca!</button>
            </form>

            <ul class="navbar-nav">
                @guest
                    <div class="nav-item">
                        <a class="btn btn-warning m-2" href="{{ route('login') }}">Accedi</a>
                    </div>
                @else
                    <div class="nav-item">
                        <a class="btn btn-warning m-2">
                            Utente: {{ Auth::user()->name }}
                        </a>
                    </div>
                    <div class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-warning m-2"
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
