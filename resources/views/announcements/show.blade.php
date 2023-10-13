<x-layout>
    <x-navbar />
    <div style="margin:80px;" ></div>
    <div class="row justify-content-between gy-4 mt-3 px-1">
        <section id="gallery-single" class="gallery-single d-flex flex-column col-lg-6">

            <div class="container">
                <div class="position-relative h-160" style="overflow:hidden;">
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
            </div>
        </section>

        <div class="col-lg-6">
            <div class="card-description mx-5">
                <h2>Nome articolo</h2>
                <ul>
                    <li><strong>Category</strong> <span>XXX</span></li>
                    <li><strong>Autore</strong> <span>YYY</span></li>
                    <li><strong>Data di pubblicazione</strong> <span>01 March, 2023</span></li>
                
                <li><strong>Descrizione:</strong></li>
                <p>                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore
                    quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim.
                    Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi
                    nulla at esse enim cum deserunt eius.
                </p>
            </ul>
            <h5><strong>Prezzo</strong></h5>
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
                    </div> --}}
                </div>

            </div>
        </div>
    </div>
    

    </div>
    <!-- End Announcement Single-Detail -->



</x-layout>
