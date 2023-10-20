<x-layout>
    <x-header />

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
                <h3></h3>
                <p class="lead">É il tuo bazar online per appassionati di carte da gioco. Scopri una vasta selezione
                    di carte da collezione, mazzi personalizzati e accessori per migliorare la tua esperienza di gioco.
                    Trova le carte più rare e cerca tra le offerte esclusive. Soddisfa la tua sete di strategia e
                    competizione con CardBazaar.</p>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/assets/images/mix_cards.jpg" class="d-block mx-lg-auto img-fluid" alt="Mixed Cards"
                    width="600" height="500" loading="lazy">
            </div>
        </div>
        <hr>
    </div>

    <section class="product-section">
        <div class="container-fluid text-center col-12 col-lg-10 mb-5">
            <div class="row d-flex justify-content-center mb-5">
                <div>
                    <h3 class="text-center">Ecco gli ultimi annunci degli utenti:</h3>
                </div>
                @foreach ($announcements as $announcement)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <div class="custom-card shadow">
                            <div class="custom-card-content d-flex flex-column">
                                <img src="assets/images/yugioh (1).jpg" class="img-fluid product-thumbnail shadow">
                                <div>
                                    <h3 class="name text-dark">{{ $announcement->title }}</h3>
                                </div>
                                <div class="mt-1 mb-3">
                                    <strong class="product-price">{{ $announcement->price }}€</strong>
                                </div>
                                <div>
                                    <a href="{{ route('announcements.show', $announcement->uri) }}"
                                        class="btn btn-yellow">Visualizza</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr>
        </div>
    </section>



    <section>
        <div class="py-2"></div>
        <div class="container-fluid text-center col-12 col-lg-10 m-auto">
            <h3 class="homepage__title--dark-blue h1--smaller mb-5">Vantaggi per i compratori e venditori:</h3>
            <div class="row">
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <span><i class="fa fa-3x fa-globe-americas" aria-hidden="true"></i><br></span>
                    <p class="font-weight-bold mt-3">Compra e vendi in tutto il mondo</p>
                    <p>I compratori internazionali potranno acquistare da te senza preoccuparsi delle spese di
                        spedizione, consentendo a venditori e acquirenti di risparmiare in media oltre il 18% sugli
                        acquisti.</p>
                </div>
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <span><i class="fa fa-3x fa-handshake" aria-hidden="true"></i><br></span>
                    <p class="font-weight-bold mt-3">Mai più controversie</p>
                    <p>Affrontiamo internamente problemi con carte, ritardi e spedizioni smarrite, garantendo al 100% la
                        consegna dei tuoi ordini.</p>
                </div>
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <span><i class="fa fa-3x fa-headset" aria-hidden="true"></i><br></span>
                    <p class="font-weight-bold mt-3">100% Supporto clienti</p>
                    <p>CardBazaar offre un servizio di supporto attivo 24/7 per gestire i tuoi ordini, permettendoti di
                        concentrarti sulla tua attività principale e lasciando il resto a noi.</p>
                </div>
            </div>
            @guest
            <div>
                <a class="btn btn-yellow rounded font-weight-bold my-5" href="{{ route('register') }}"">Registrati
                    adesso</a>
            </div>
            @endguest
        </div>
    </section>

</x-layout>
