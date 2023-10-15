<x-layout>
    <x-header />
<body>
    <main>

      <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                
                <div class="col-md-12 col-lg-3 my-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Ecco le ultime carte aggiunte da altri utenti!</h2>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique. </p>
                    <p><a href="{{route('announcements.index')}}" class="btn">Mostra altro</a></p>
                </div>
                
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                @foreach ($announcements as $announcement)
                    <div class="col-12 col-md-4 col-lg-3 my-5 mb-md-0">
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
