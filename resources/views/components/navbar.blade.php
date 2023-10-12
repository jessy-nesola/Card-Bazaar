    <!-- Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top"
        arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="{{ route('homepage') }}">CardBazaar<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li><a class="nav-link" href="about.html">Explore</a>
                    </li>
                    <li><a class="nav-link" href="{{route('announcements.index')}}"> All Announcements</a>
                    </li>
                    {{-- COLLEGAMENTO TEMPORANEO ALLA PAGINA CATEGORIES.INDEX --}}
                    <li><a class="nav-link" href="{{route('categories.index')}}">Categories</a>
                    </li>
                    
                    {{-- NON FUNZIONA STO CAZZO DI DROPDROWN --}}
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            <a class="dropdown-item" href="#">Category 1</a>
                            <a class="dropdown-item" href="#">Category 2</a>
                            <a class="dropdown-item" href="#">Category 3</a>
                            <!-- INSERT OTHER CATEGORIES -->
                        </div>
                    </li> --}}


                </ul>
                    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}"><img src="assets/images/user.svg"></a></li>
                        @else
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="nav-link active"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Logout
                                    </button>
                                </form>
                            </li>
                            <li><a href="{{ route('announcements.create') }}" class="btn btn-secondary btn-sm">Inserisci
                                    annuncio</a></li>
                        @endguest
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->
