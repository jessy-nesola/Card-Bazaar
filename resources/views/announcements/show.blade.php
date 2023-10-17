<x-layout>
    <div style="margin:80px;"></div>
    <div class="row justify-content-between gy-4 mt-3 px-1">
        <section id="gallery-single" class="gallery-single d-flex flex-column">

            <div class="container">
                <div class="row">


                        <div id="carousel" class="carousel col-6 d-flex">

                            <div id='item_1' class="hideLeft">
                              <img src="https://cdn.pixabay.com/photo/2017/08/15/08/23/stars-2643089__340.jpg">
                            </div>
                            <div id='item_2' class="prevLeftSecond">
                              <img src="https://cdn.pixabay.com/photo/2012/11/28/11/28/rocket-launch-67723__340.jpg">
                            </div>
                            <div id='item_3' class="prev">
                              <img src="https://cdn.pixabay.com/photo/2018/08/15/13/10/galaxy-3608029_960_720.jpg">
                            </div>
                            <div id='item_4' class="selected">
                              <img src="https://cdn.pixabay.com/photo/2020/06/17/09/28/wormhole-5308810__340.jpg">
                            </div>
                            <div id='item_5' class="next">
                              <img src="https://cdn.pixabay.com/photo/2016/11/18/22/58/stars-1837306__340.jpg">
                            </div>
                            <div id='item_6' class="nextRightSecond">
                              <img src="https://cdn.pixabay.com/photo/2017/02/09/09/11/starry-sky-2051448__340.jpg">
                            </div>
                            <div id='item_7' class="hideRight">
                              <img src="https://cdn.pixabay.com/photo/2011/12/15/11/37/galaxy-11188__340.jpg">
                            </div>
                            <div id='item_8' class="hideRight">
                              <img src="https://cdn.pixabay.com/photo/2011/12/15/11/32/pismis-24-11186__340.jpg">
                            </div>
                          </div>

                          <div class="buttons">
                            <button class="button-82-pushable" role="button" id="prev"><span class="button-82-shadow"></span><span
                                class="button-82-edge"></span><span class="button-82-front text">Previous</span></button>


                            <button class="button-82-pushable" role="button" id="next"><span class="button-82-shadow"></span><span
                                class="button-82-edge"></span><span class="button-82-front text">Next</span></button>
                          </div>

                    <div class="col-md-12 col-lg-3 mb-lg-0 col-lg-6 d-flex justify-content-center">
                        <div class="card-description mx-5">
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
