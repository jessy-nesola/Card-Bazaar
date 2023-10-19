<x-layout>
    <div style="margin:80px;"></div>
    <div class="row justify-content-center gy-2 mt-3 px-1" style="width:100%;">

        <div id="carousel-show" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel-show" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-show" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-show" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/assets\images\card-1.png" class=" w-100" style="height: 300px; width: 120px; object-fit:contain;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets\images\card-2.png" class=" w-100" style="height: 300px; width: 120px; object-fit:contain;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/assets\images\card-3.png" class=" w-100" style="height: 300px; width: 120px; object-fit:contain;" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-show" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-show" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        <div class="col-12 my-5 d-flex justify-content-center">
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
                {{-- <p><a href="{{ route('register') }}" class="btn btn-warning me-2">Contatta il venditore</a> --}}
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
