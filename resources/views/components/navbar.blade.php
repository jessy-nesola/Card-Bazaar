<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><span class="fs-3">C</span>ard<span class="fs-3">B</span>azaar.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item @if (Route::currentRouteName() == 'homepage') border-bottom border-2 @endif">
                    <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() == 'announcements.index') border-bottom border-2 @endif">
                    <a class="nav-link" href="{{ route('announcements.index') }}">Esplora</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if (Route::currentRouteName() == 'categories.index') border-bottom border-2 @endif"
                        href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                    <a class="nav-link @if (Route::currentRouteName() == 'announcements.create') border-bottom border-2 @endif" href="{{ route('announcements.create') }}" tabindex="-1"
                        aria-disabled="true">Inserisci annuncio</a>
                </li>
                @endauth
            </ul>

                {{-- FORM SEARCH --}}

            <form action="{{route('announcements.search')}}" method="GET" class="d-flex" role="search">
                <input name="searched" class="form-control me-2" type="search" placeholder="Cerca..." aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Cerca!</button>
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
