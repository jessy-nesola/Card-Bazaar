<header>
    <div class="px-5 shadow-lg" style="background-color: #5BC0F8">
        @if (session()->has('access.denied'))
            <div>
                <div class="text-center pt-5">
                    <h3 class="text-decoration-underline">{{ session()->get('access.denied') }}</h3>
                </div>
            </div>
        @endif
        @if (session()->has('send.ok'))
            <div>
                <div class="text-center pt-5">
                    <h3 class="text-decoration-underline">{{ session()->get('send.ok') }}</h3>
                </div>
            </div>
        @endif
        <div class="container">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="animate__animated animate__rubberBand">Benvenuto in CardBazaar.</h1>
                        <hr class="my-4" />
                        <p class="lead">Il tuo sito di riferimento per comprare e vendere giochi di carte</p>
                        @guest
                            <p><a href="{{ route('register') }}" class="btn btn-secondary me-2">Entra nella famiglia!</a>
                            @endguest
                            {{-- TASTO "REVISOR" --}}
                            @if (Auth::user() && Auth::user()->is_revisor)
                                <p><a href="{{ route('revisor.index') }}" class="btn btn-yellow me-2">Revisor!</a>
                            @endif
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 text-center">
                    <img class="img-fluid rounded-3 my-5" src="/assets/images/cardhomepage.png" alt="Library" />
                </div>
            </div>
        </div>
    </div>
</header>
