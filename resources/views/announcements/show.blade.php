<x-layout>
    <div style="margin:80px;"></div>
    <div class="row justify-content-between gy-2 mt-3 px-1" style="width:100%;">


        <div class="container col-md-11 px-3"
            style=" display: flex;flex-direction: column; justify-content:center ;height: 100%;overflow:hidden;">
            <div class="row justify-content-around">

                <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade col-6 my-5"
                style="display: flex;justify-content: center;align-items: center;flex-direction: column;text-align: center;position: relative;height: 70vh;padding-top: 60px;"
                    data-bs-ride="carousel">

                    <!-- Slide 1 -->
                    <div class="carousel-item active col-6">
                        <div class="carousel-container col-6">
                            <h2 class="animate__animated animate__fadeInLeft col-6">Ragazzi <span>ci siamo quasi</span></h2>
                            <p class="animate__animated animate__fadeInRight col-6">Speriamo.</p>

                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item active col-6">
                        <div class="carousel-container col-6">
                            <h2 class="animate__animated animate__fadeInLeft col-6">Ciao <span>BELLI</span></h2>
                            <p class="animate__animated animate__fadeInRight col-6">Lo finiamo sto sito?!</p>

                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                    </a>

                </div>


                <div class="col-12 col-md-6 col-sm-6 my-5"
                    style="max-width: 45%;max-height: 100%;padding: 20px;width: 100%;border-radius: 40px; overflow:hidden;">
                    <div class="card-description mx-2">
                        <h2 class="mb-3">{{ $announcement->title }}</h2>
                        <div><strong>Categoria: <a
                                    href="{{ route('categories.show', ['name' => $announcement->category->name]) }}">{{ $announcement->category->name }}</a></strong>
                        </div>
                        <div><strong>Pubblicato da: {{ $announcement->user->name }}</strong></div>
                        <div class="mb-3"><strong>Data pubblicazione:
                                {{ $announcement->created_at->format('d/m/Y') }}</strong></div>
                        <div><strong>Descrizione:</strong></div>
                        <p class="mb-4">{{ $announcement->body }}</p>
                        <h5><strong>{{ $announcement->price }}€</strong></h5>
                        <p><a href="{{ route('register') }}" class="btn btn-warning me-2">Contatta il venditore</a>
                    </div>
                </div>
            </div>
        </div>

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
