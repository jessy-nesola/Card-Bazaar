<x-layout>
    <header class="hero" style="margin-top: 130px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>{{ $category->name }}</h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="product-section">
        <div class="container">
            <div class="row">
                @forelse ($category->orderByAndPaginate() as $announcement)
                <div class="col-12 col-md-4 col-lg-3 my-5 mb-md-0">
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
                    <h3 class="mb-3">Al momento non ci sono annunci caricati!</div>
                    <div><a href="{{ route('announcements.create') }}" class="btn btn-secondary btn-sm">Inserisci
                        annuncio</a></div>
                @endforelse
            </div>
        </div>
    </div>
                    {{-- MENU NAVIGAZIONE --}}
                    {{ $category->orderByAndPaginate()->links() }}
</x-layout>
