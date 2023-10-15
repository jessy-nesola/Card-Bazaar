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
                {{-- COLLEGAMENTO TEMPORANEO ALLA PAGINA CATEGORIES.INDEX --}}
                <li class="nav-item @if (Route::currentRouteName() == 'categories.index')  @endif">
                    <a class="nav-link text-light" href="{{ route('categories.index') }}">Categorie</a>
                </li>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-md-0">
                <li><a href="{{ route('announcements.create') }}" class="nav-link text-light m-2">Inserisci
                        annuncio</a>
                </li>
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}"><img src="/assets/images/user.svg"
                                style="width: 29px; height: 30;"></a></li>
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
