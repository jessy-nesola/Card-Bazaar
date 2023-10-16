<x-layout>
    <x-header />
      <main>
          <div class="product-section">
              <div class="container">
                  <div class="row">

                      <!-- Start Column 1 -->

                      <div class="col-md-12 col-lg-3 my-5 mb-lg-0">
                          <h3 class="mb-4 section-title">Ecco le ultime carte aggiunte da altri utenti!</h3>
                          <p class="mb-4">Che testo mettiamo? Che testo mettiamo? Che testo mettiamo? Che testo mettiamo?
                          </p>
                          <p><a href="{{ route('announcements.index') }}" class="btn btn-primary">Esplora</a></p>
                      </div>

                      <!-- End Column 1 -->

                      <!-- Start Column 2 -->
                      @foreach ($announcements as $announcement)
                          <div class="testo-card col-12 col-md-4 col-lg-3 my-5 mb-md-0">
                              <div class="product-item">
                                  <img src="assets/images/yugioh (1).jpg" class="img-fluid product-thumbnail">
                                  <h3 class="product-title">{{ $announcement->title }}</h3>
                                  <strong class="product-price">{{ $announcement->price }}€</strong>

                                  <span class="icon-cross">
                                      <a href="{{ route('announcements.show', $announcement->uri) }}"><img
                                              src="assets/images/cross.svg" class="img-fluid"></a>
                                  </span>
                              </div>
                          </div>
                      @endforeach
                      <!-- End Column 2 -->
                  </div>
              </div>
          </div>
      </main>
</x-layout>
