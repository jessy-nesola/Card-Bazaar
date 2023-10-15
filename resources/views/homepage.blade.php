<x-layout>
    <x-header />
    <main>

      <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->

                <div class="col-md-12 col-lg-3 my-5 mb-lg-0">
                    <h3 class="mb-4 section-title">Ecco le ultime carte aggiunte da altri utenti!</h3>
                    <p class="mb-4">Che testo mettiamo? Che testo mettiamo? Che testo mettiamo? Che testo mettiamo?</p>
                    <p><a href="{{route('announcements.index')}}" class="btn btn btn-info">Esplora</a></p>
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
                                <a href="{{route('announcements.show', $announcement->uri)}}"><img src="assets/images/cross.svg" class="img-fluid"></a>
                            </span>
                        </div>
                    </div>
                @endforeach
                <!-- End Column 2 -->
            </div>
        </div>
    </div>

      {{-- <article>
        <img src="1.png" />
        <div>
          <name> Chris Hay, CTO at IBM iX </name>
          <p>
            It's fast, small, can run on browser, edge and cloud. It can handle
            large data. It can run in-memory like redis or disk like sqlite and
            it can run multi-cluster. It can sync between cloud and edge. And to
            top of it off, it can also run as a graphdb. It's interesting.
          </p>
        </div>
      </article>
      <article>
        <img src="2.png" />
        <div>
          <name> Chris Hay, CTO at IBM iX </name>
          <p>
            It's fast, small, can run on browser, edge and cloud. It can handle
            large data. It can run in-memory like redis or disk like sqlite and
            it can run multi-cluster. It can sync between cloud and edge. And to
            top of it off, it can also run as a graphdb. It's interesting.
          </p>
        </div>
      </article>
      <article>
        <img src="2.png" />
        <div>
          <name> Chris Hay, CTO at IBM iX </name>
          <p>
            It's fast, small, can run on browser, edge and cloud. It can handle
            large data. It can run in-memory like redis or disk like sqlite and
            it can run multi-cluster. It can sync between cloud and edge. And to
            top of it off, it can also run as a graphdb. It's interesting.
          </p>
        </div>
      </article> --}}
    </main>
  </body>

</x-layout>
