<x-layout>
    {{-- <header class="hero" style="margin-top: 130px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h2 class="fs-1">{{ $category->name }}</h2>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}

    <div class="intro-excerpt text-center" style="margin-top: 4%">
        <h2 class="animate__animated animate__pulse fs-1">{{ $category->name }}</h2>
        <p class="animate__animated animate__pulse">Che testo mettiamo? Che testo mettiamo? Che testo
            mettiamo? Che testo mettiamo?</p>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">
                @forelse ($category->orderByAndPaginate() as $announcement)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <div class="custom-card">
                            <div class="custom-card-content d-flex flex-column">
                                <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images->first()->path) : '/assets/images/yugioh (1).jpg'}}" class="img-fluid object-fit-contain product-thumbnail shadow-lg">
                                <div>
                                    <h3 class="name text-dark">{{ $announcement->title }}</h3>
                                </div>
                                <div class="mt-1 mb-3">
                                    <strong class="product-price">{{ $announcement->price }}€</strong>
                                </div>
                                <div>
                                    <a href="{{ route('announcements.show', $announcement->uri) }}"
                                        class="btn btn-secondary shadow-lg">Visualizza</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="text-center">
                    <h3 class="mt-5 mb-3">Al momento non ci sono annunci caricati! </h3>
                    <div><a href="{{ route('announcements.create') }}" class="btn btn-celeste btn-sm">Inserisci annuncio</a></div>
                </div>
                @endforelse
                <span class="mt-4">
                    {{-- MENU NAVIGAZIONE --}}
                    {{ $category->orderByAndPaginate()->links() }}
                </span>
            </div>
        </div>
    </div>
</x-layout>
