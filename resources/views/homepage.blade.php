<x-layout>
    @if (session()->has('access.denied'))
        <div class="text-center mt-5">
            <h3 class="text-decoration-underline">{{ session()->get('access.denied') }}</h3>
        </div>
        </div>
    @endif
    <x-header />
        <div class="product-section">
            <div class="container">
                <div class="row">

                    <!-- Start Column 1 -->

                    <div class="col-md-12 col-lg-3 my-5 mb-lg-0 shadow">
                        <h3 class="mb-4 section-title">Ecco le ultime carte aggiunte da altri utenti!</h3>
                        <p class="mb-4">Che testo mettiamo? Che testo mettiamo? Che testo mettiamo? Che testo mettiamo?
                        </p>
                        <p><a href="{{ route('announcements.index') }}" class="btn btn-primary">Esplora</a></p>
                    </div>

                    <!-- End Column 1 -->

                    <!-- Start Column 2 -->
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
