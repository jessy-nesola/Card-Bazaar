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
        <h2 class="animate__animated animate__pulse fs-1">{{__('custom.ann.ind1')}}</h2>
        <p class="animate__animated animate__pulse">{{__('custom.ann.ind2')}}</p>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">
                @forelse ($announcements as $announcement)
                <x-card :target='$announcement'/>
                @empty
                <h3 class="mb-3">{{__('custom.ann.ind3')}}</h3>
                <div><a href="{{ route('announcements.create') }}" class="btn btn-secondary btn-sm">{{__('custom.ann.ind4')}}</a></div>
                @endforelse
                <div class="mb-5"></div>
                {{-- MENU NAVIGAZIONE --}}
                {{ $announcements->links() }}
            </div>
        </div>
    </div>
</x-layout>
