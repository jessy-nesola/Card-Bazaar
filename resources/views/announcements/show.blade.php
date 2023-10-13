<x-layout>
    <div style="margin:80px;"></div>
    <div class="row justify-content-between gy-4 mt-3 px-1">
        <section id="gallery-single" class="gallery-single d-flex flex-column">

            <div class="container">
                <div class="row">
                    <div class="position-relative h-160 col-lg-6" style="overflow:hidden;">
                        <div class="slides-1 card-details-slider swiper">
                            <div class="swiper-wrapper align-items-center justify-content-center">

                                <div class="swiper-slide mx-5">
                                    <img src="{{ asset('/assets\images\card-1.png') }}" alt="">
                                </div>
                                <div class="swiper-slide mx-5">
                                    <img src="{{ asset('/assets\images\card-2.png') }}" alt="">
                                </div>
                                <div class="swiper-slide mx-5">
                                    <img src="{{ asset('/assets\images\card-3.png') }}" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="card-description mx-5">
                            <h2 class="mb-3">{{ $announcement->title }}</h2>
                            <div><strong>Categoria: <a href="{{route('categories.show', ['name'=>$announcement->category->name])}}">{{ $announcement->category->name }}</a></strong></div>
                            <div><strong>Pubblicato da: {{ $announcement->user->name }}</strong></div>
                            <div class="mb-3"><strong>Data pubblicazione: {{ $announcement->created_at->format('d/m/Y') }}</strong></div>
                            <div><strong>Descrizione:</strong></div>
                            <p class="mb-4">{{ $announcement->body }}</p>
                            <h5><strong>{{ $announcement->price }}€</strong></h5>
                        </div>
                    </div>
                </div>
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
    <!-- End Announcement Single-Detail -->
</x-layout>
