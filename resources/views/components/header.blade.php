<header class="text-light py-5" style="background-color: ">
    <div class="container px-5 rounded-5 shadow" style="background-color: #272e3c">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start text-light">
                    <h1 class="animate__animated animate__heartBeat">Benvenuto in CardBazaar.</h1>
                    <hr class="my-4" />
                    <p class="lead">Il tuo sito di riferimento per comprare e vendere giochi di carte</p>
                    @guest
                        <p><a href="{{ route('register') }}" class="btn btn-primary me-2">Entra nella famiglia!</a>
                        @endguest
                        {{-- TASTO "LAVORA CON NOI" --}}
                        @if (Auth::user() && !Auth::user()->is_revisor)
                            <p><a href="{{ route('workWithUs') }}" class="btn btn-primary me-2">Lavora con noi!</a>
                        @endif
                        {{-- TASTO "REVISOR" --}}
                        @if (Auth::user() && Auth::user()->is_revisor)
                            <p><a href="{{ route('revisor.index') }}" class="btn btn-primary me-2">Revisor!</a>
                        @endif
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 text-center">
                <img class="img-fluid rounded-3 my-5" src="/assets/images/cardhomepage.png" alt="Library" />
            </div>
        </div>
    </div>
</header>
