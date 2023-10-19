<x-layout>
    <div class="hero" style="margin-top: 70px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h2 class="animate__animated animate__pulse">Esplora da qui tutte le carte!</h2>
                        <p class="animate__animated animate__pulse">Che testo mettiamo? Che testo mettiamo? Che testo
                            mettiamo? Che testo mettiamo?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">
                @forelse ($announcements as $announcement)
                    <div class="col-12 col-md-4 col-lg-3 my-5 mb-md-0">
                        <div class="custom-card shadow">
                            <div class="custom-card-content">
                                <img src="assets/images/yugioh (1).jpg" class="img-fluid product-thumbnail">
                                <h3 class="name">{{ $announcement->title }}</h3>
                                <strong class="product-price">{{ $announcement->price }}€</strong>
                                <a href="{{ route('announcements.show', $announcement->uri) }}"
                                    class="btn btn-primary">Visualizza</a>
                                {{-- <p>Che testo mettiamo? Che testo mettiamo? Che testo mettiamo? Che testo mettiamo?</p> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div>Non ci sono annunci per questa ricerca!</div>
                    </div>
                @endforelse
                <div class="mb-5"></div>
                {{-- MENU NAVIGAZIONE --}}
                {{ $announcements->links() }}
            </div>
        </div>
    </div>
</x-layout>
