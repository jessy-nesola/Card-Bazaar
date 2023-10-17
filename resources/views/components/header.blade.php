<header class="text-light py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start text-light">
                    <h1 class="animate__animated animate__heartBeat">Benvenuto in CardBazaar.</h1>
                    <h5 class="animate__animated animate__heartBeat">Il tuo mondo, le tue carte!</h5>
                    <p class="mb-4 ">Qua puoi creare il tuo mazzo dei sogni.. Magia, Collezione, Azione!</p>
                    <p><a href="{{route('register')}}" class="btn btn-primary me-2">Entra nella famiglia!</a>
                        {{-- TASTO REVISOR --}}
                        @if (Auth::user() && Auth::user()->is_revisor)
                            <p><a href="{{route('revisor.index')}}" class="btn btn-primary me-2">Revisor!</a>
                        @endif
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 text-center">
                <img class="img-fluid rounded-3 my-5" src="/assets/images/cardhomepage.png" alt="Library" />
            </div>
        </div>
    </div>
</header>