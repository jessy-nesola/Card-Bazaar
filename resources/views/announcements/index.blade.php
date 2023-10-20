<x-layout>
    {{-- <div class="hero" style="margin-top: 70px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h2 class="animate__animated animate__pulse fs-1">Esplora da qui tutte le carte!</h2>
                        <p class="animate__animated animate__pulse">Che testo mettiamo? Che testo mettiamo? Che testo
                            mettiamo? Che testo mettiamo?</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="intro-excerpt text-center" style="margin-top: 4%">
        <h2 class="animate__animated animate__pulse fs-1">Esplora da qui tutte le carte!</h2>
        <p class="animate__animated animate__pulse">Che testo mettiamo? Che testo mettiamo? Che testo
            mettiamo? Che testo mettiamo?</p>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">
                @forelse ($announcements as $announcement)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <div class="custom-card shadow">
                            <div class="custom-card-content d-flex flex-column">
                                <img src="/assets/images/yugioh (1).jpg" class="img-fluid product-thumbnail">
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
                @empty
                <h3 class="mb-3">Al momento non ci sono annunci caricati! </h3>
                <div><a href="{{ route('announcements.create') }}" class="btn btn-celeste btn-sm">Inserisci
                        annuncio</a></div>
                @endforelse
                <div class="mb-5"></div>
                {{-- MENU NAVIGAZIONE --}}
                {{ $announcements->links() }}
            </div>
        </div>
    </div>
</x-layout>
