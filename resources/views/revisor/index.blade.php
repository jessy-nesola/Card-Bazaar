<x-layout>
    <div style="margin:80px;"></div>
    <div class="row justify-content-between gy-4 mt-3 px-1">

        <section id="gallery-single" class="gallery-single d-flex flex-column">

            <div class="container">
                <div class="row justify-content-evenly my-4" >
                    <button type="submit" class="btn btn-primary col-4">Accetta</button>  <button type="submit" class="btn btn-secondary col-4">Rifiuta</button>

                </div>
                <div class="row">

                    <div id="carouselExampleAutoplaying" class="col-lg-6 d-flex h-100 carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active justify-content-center">
                            <img src="{{asset('assets/images/card-1.avif')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item justify-content-center">
                            <img src="{{asset('assets/images/card-2.avif')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item justify-content-center">
                            <img src="{{asset('assets/images/card-3.avif')}}" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>

                    <div class="col-md-12 col-lg-3 mb-lg-0 col-lg-6 d-flex justify-content-center">
                        <div class="card-description mx-5">
                            <h2 class="mb-3">titolo</h2>
                            <div><strong>Categoria: <a
                                        href="#">cat nam</a></strong>
                            </div>
                            <div><strong>Pubblicato da: autore</strong></div>
                            <div class="mb-3"><strong>Data pubblicazione:
                                    date</strong></div>
                            <div><strong>Descrizione:</strong></div>
                            <p class="mb-4">descr</p>
                            <h5><strong>tanti€</strong></h5>
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
</x-layout>
