    <!-- Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="{{route('homepage')}}">CardBazaar<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li><a class="nav-link" href="shop.html">Shop</a></li>
                    <li><a class="nav-link" href="about.html">About us</a></li>
                    <li><a class="nav-link" href="services.html">Services</a></li>
                    <li><a class="nav-link" href="contact.html">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    @guest
                    <li><a class="nav-link" href="{{route('login')}}"><img src="assets/images/user.svg"></a></li>
                    @else

                    {{-- PULSANTE CON DROPDOWN DA SISTEMARE --}}

                    {{-- <li class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto, {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"></a>Action 1</li>
                            <li><a class="dropdown-item" href="#"></a>Action 2</li>
                        </ul>
                    </li> --}}
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                        @csrf
                            <button class="nav-link active" onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </button>
                        </form>
                    </li>
                    <li><a href="{{route('announcements.create')}}" class="btn btn-secondary btn-sm">Inserisci annuncio</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->
