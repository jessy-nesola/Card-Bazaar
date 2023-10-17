<x-layout>
    @if (session()->has('access.denied'))
        <div class="text-center mt-5">
            <h3 class="text-decoration-underline">{{ session()->get('access.denied') }}</h3>
        </div>
        </div>
    @endif
    <x-header />

    {{-- sezione da testare  --}}
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                    system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/assets/images/mix_cards.jpg" class="d-block mx-lg-auto img-fluid" alt="Mixed Cards"
                    width="600" height="500" loading="lazy">
            </div>
        </div>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-3 my-5 mb-lg-0 shadow">
                    <h3 class="mb-4 section-title">Ecco le ultime carte aggiunte da altri utenti!</h3>
                    <p class="mb-4">Che testo mettiamo? Che testo mettiamo? Che testo mettiamo? Che testo mettiamo?
                    </p>
                    <p><a href="{{ route('announcements.index') }}" class="btn btn-primary">Esplora</a></p>
                </div>

                @foreach ($announcements as $announcement)
                    <div class="col-12 col-md-4 col-lg-3 mx- my-5 mb-md-0">
                        <div class="product-item">
                            <img src="assets/images/yugioh (1).jpg" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $announcement->title }}</h3>
                            <strong class="product-price">{{ $announcement->price }}€</strong>

                            <span class="icon-cross">
                                <a href="{{ route('announcements.show', $announcement->uri) }}"><img
                                        src="assets/images/cross.svg" class="img-fluid"></a>
                            </span>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="wrapper container">
                        <div class="cardHome text-center col-1">
                            <div class="image"> <img src="assets/images/yugioh (3).jpg" width="220"> </div>
                            <div class="pr-3 about-product">
                                <h3>{{ $announcement->title }}</h3>
                                <h4>{{ $announcement->price }}</h4> <button href="{{ route('announcements.show', $announcement->uri) }}" class="btn btn-primary buy-now">Prova</button>
                            </div>
                        </div>
                    </div> --}}
                <!-- End Column 2 -->
            </div>
        </div>
    </div>
</x-layout>
