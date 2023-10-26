<x-layout>
    {{-- <div class="hero" style="margin-top: 70px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h2 class="animate__animated animate__pulse fs-1">Categorie da questa parte!</h2>
                        <p class="animate__animated animate__pulse">Che testo mettiamo? Che testo mettiamo? Che testo mettiamo? Che testo mettiamo?</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="intro-excerpt text-center" style="margin-top: 4%">
        <h2 class="animate__animated animate__pulse fs-1">{{__('custom.cat.ind1')}}</h2>
        <p class="animate__animated animate__pulse">{{__('custom.cat.ind2')}}</p>
    </div>

    <div class="container justify-content-center">
        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <div class="custom-card">
                        <div class="custom-card-content d-flex flex-column">
                            <img src="assets/images/yugioh (1).jpg" class="img-fluid product-thumbnail shadow-lg">
                            <div>
                                <h3 class="name text-dark">{{ $category->name }}</h3>
                            </div>
                            <div>
                                <a href="{{ route('categories.show', $category->name) }}"
                                    class="btn btn-secondary shadow-lg">Visualizza</a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
