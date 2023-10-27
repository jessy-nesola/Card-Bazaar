<x-layout>
    <div style="margin:80px;"></div>
    <div class="row justify-content-between gy-4 mt-3 px-1">

        <section id="gallery-single" class="gallery-single d-flex flex-column">

            <div class="container">
                @if ($announcement)
                    <div class="row justify-content-center gy-2 mt-3 px-1" style="width:100%;">
                        <div id="carousel-show" class="carousel carousel-dark slide">
                            <div class="carousel-inner">
                                @if (!$announcement->images->isEmpty())
                                    @foreach ($announcement->images as $image)
                                        {{-- <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel-show" data-bs-slide-to="0"
                                         class="active" aria-current="true" aria-label="Slide 1"></button>
                                </div> --}}

                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <img src="{{ $image->getUrl(200, 300) }}" class="w-100"
                                                style="height: 300px; width: 200px; object-fit:contain;" alt="...">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="carousel-item active">
                                        <img src="/assets/images/no-image.png" class=" w-100"
                                            style="height: 300px; width: 120px; object-fit:contain;" alt="...">
                                    </div>
                                @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-show"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-show"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <div class="col-12 my-5 d-flex justify-content-center">
                            <div class="shadow-lg dati-scheda">
                                <div class="card-description mx-2">
                                    <h2 class="mb-3">{{ $announcement->title }}</h2>
                                    <div><strong>{{ __('custom.rev.ind3') }} <a
                                                href="{{ route('categories.show', ['name' => $announcement->category->name]) }}">{{ $announcement->category->name }}</a></strong>
                                    </div>
                                    <div><strong>{{ __('custom.rev.ind4') }}
                                            {{ $announcement->user->name }}</strong></div>
                                    <div class="mb-3"><strong>{{ __('custom.rev.ind5') }}
                                            {{ $announcement->created_at->format('d/m/Y') }}</strong></div>
                                    <div><strong>{{ __('custom.rev.ind6') }}</strong></div>
                                    <p class="mb-4">{{ $announcement->body }}</p>
                                    <h5><strong>{{ $announcement->price }}€</strong></h5>
                                    {{-- <p><a href="{{ route('register') }}" class="btn btn-warning me-2">Contatta il venditore</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endif
    </div>
    </section>
    </div>
</x-layout>
