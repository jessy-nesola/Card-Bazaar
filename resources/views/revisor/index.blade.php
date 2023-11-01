<x-layout>

    <div class="col-12 gy-4">
        <section id="gallery-single" class="gallery-single d-flex flex-column">
            <div class="container my-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="fs-1">
                            {{-- {{ $announcement_to_check ? 'Annuncio da revisionare' : 'Non ci sono annunci da revisionare' }} --}}
                            {{ $announcement_to_check ? __('custom.rev.ind1') : __('custom.rev.ind2') }}
                        </h2>
                    </div>
                </div>
                @if (session()->has('accept'))
                    <div class="row">
                        <div class="col-12 text-center mt-3">
                            <p class="text-center fw-bolder shadow alert alert-success" role="alert">
                                {{ session()->get('accept') }}</p>
                        </div>
                    </div>
                @endif
                @if (session()->has('reject'))
                    <div class="row">
                        <div class="col-12 text-center mt-3">
                            <p class="text-center fw-bolder shadow alert alert-success" role="alert">
                                {{ session()->get('reject') }}</p>
                        </div>
                    </div>
                @endif
                @if ($announcement_to_check)

                    <div class="row d-flex justify-content-center mt-4">
                        <form class=" col-6 col-lg-3 d-flex justify-content-center"
                            action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-secondary btn-sm shadow">Accetta</button>
                        </form>
                        <form class=" col-6 col-lg-3 d-flex justify-content-center"
                            action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-secondary bnt-sm shadow">Rifiuta</button>
                        </form>
                    </div>

                    <div class="row d-flex justify-content-center gy-2 mt-5">
                        <div id="carousel-show"
                            class="col-12 col-lg-6 d-flex justify-content-center carousel carousel-dark slide">

                            <div class="carousel-inner">
                                @if (!$announcement_to_check->images->isEmpty())
                                    @foreach ($announcement_to_check->images as $image)
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

                        <div class="col-12 col-lg-6 d-flex justify-content-center my-5">
                            <div class="shadow-lg dati-scheda p-2">
                                <div class="card-description">
                                    <h2 class="mb-3">{{ $announcement_to_check->title }}</h2>
                                    <div><strong>{{ __('custom.rev.ind3') }} <a
                                                href="{{ route('categories.show', ['name' => $announcement_to_check->category->name]) }}">{{ $announcement_to_check->category->name }}</a></strong>
                                    </div>
                                    <div><strong>{{ __('custom.rev.ind4') }}
                                            {{ $announcement_to_check->user->name }}</strong></div>
                                    <div class="mb-3"><strong>{{ __('custom.rev.ind5') }}
                                            {{ $announcement_to_check->created_at->format('d/m/Y') }}</strong>
                                    </div>
                                    <div><strong>{{ __('custom.rev.ind6') }}</strong></div>
                                    <p class="mb-4">{{ $announcement_to_check->body }}</p>
                                    <h5><strong>{{ $announcement_to_check->price }}€</strong></h5>
                                    {{-- <p><a href="{{ route('register') }}" class="btn btn-warning me-2">Contatta il venditore</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row shadow dati-scheda justify-content-center mx-0 mb-5 pt-4 pb-4">
                        <div class="card-description mx-1 col-5">
                            <h2 class="mb-3">Tags</h2>
                            <br>
                            <ul>
                                @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                        <li>{{$label}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                        <div class="card-description mx-1 col-6">
                            <h2 class="mb-3">Revisione immagini</h2>
                            <br>
                            <div class="mb-2"><strong><span class="{{$image->adult}}"></span> Adulti</strong></div>
                            <div class="mb-2"><strong><span class="{{$image->spoof}}"></span> Satira</strong></div>
                            <div class="mb-2"><strong><span class="{{$image->medical}}"></span> Medicina</strong></div>
                            <div class="mb-2"><strong><span class="{{$image->violence}}"></span> Violenza</strong></div>
                            <div class="mb-2"><strong><span class="{{$image->racy}}"></span> Contenuto ammiccante</strong>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </div>
</x-layout>
