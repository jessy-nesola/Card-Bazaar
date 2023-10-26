<x-layout>
    <div style="margin:80px;"></div>
    <div class="row justify-content-between gy-4 mt-3 px-1">

        <section id="gallery-single" class="gallery-single d-flex flex-column">

            <div class="container">
                @if (session()->has('accept'))
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h3 class="text-center mb-4 text-success fw-bold text-decoration-underline">
                                {{ session()->get('accept') }}</h3>
                        </div>
                    </div>
                @endif
                @if (session()->has('reject'))
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h3 class="text-center mb-4 text-danger fw-bold text-decoration-underline">
                                {{ session()->get('reject') }}</h3>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2>
                            {{-- {{ $announcement_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare' }} --}}
                            {{ $announcement_to_check ? __('custom.rev.ind1') : __('custom.rev.ind2') }}
                        </h2>
                    </div>
                </div>
                @if ($announcement_to_check)
                    <div class="row justify-content-center gy-2 mt-3 px-1" style="width:100%;">
                        <div id="carousel-show" class="carousel carousel-dark slide">
                            <div class="carousel-inner">
                                @if (!$announcement_to_check->images->isEmpty())
                                    @foreach ($announcement_to_check->images as $image)
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
                                        <img src="/assets/images/no-image.jfif" class=" w-100"
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

                        <div class="row justify-content-center mt-5">
                            <form class=" col-4 d-flex justify-content-end"
                                action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-secondary btn-sm shadow">Accetta</button>
                            </form>
                            <form class=" col-4"
                                action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-secondary bnt-sm shadow">Rifiuta</button>
                            </form>
                        </div>

                        <div class="col-12 my-5 d-flex justify-content-center">
                            <div class="shadow-lg dati-scheda">
                                <div class="card-description mx-2">
                                    <h2 class="mb-3">{{ $announcement_to_check->title }}</h2>
                                    <div><strong>{{ __('custom.rev.ind3') }} <a
                                                href="{{ route('categories.show', ['name' => $announcement_to_check->category->name]) }}">{{ $announcement_to_check->category->name }}</a></strong>
                                    </div>
                                    <div><strong>{{ __('custom.rev.ind4') }}
                                            {{ $announcement_to_check->user->name }}</strong></div>
                                    <div class="mb-3"><strong>{{ __('custom.rev.ind5') }}
                                            {{ $announcement_to_check->created_at->format('d/m/Y') }}</strong></div>
                                    <div><strong>{{ __('custom.rev.ind6') }}</strong></div>
                                    <p class="mb-4">{{ $announcement_to_check->body }}</p>
                                    <h5><strong>{{ $announcement_to_check->price }}€</strong></h5>
                                    {{-- <p><a href="{{ route('register') }}" class="btn btn-warning me-2">Contatta il venditore</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endif
    </div>
    </section>
    {{-- <div class="testimonial-item">
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                        cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                        legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <div>
                        <img src="/assets/images/person_3.jpg" class="testimonial-img" alt="">
                        <h4>Note del venditore</h4>
                    </div>
                </div> --}}
    </div>
</x-layout>
