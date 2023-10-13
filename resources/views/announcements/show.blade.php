<x-layout>
    <x-navbar />
    <section id="gallery-single" class="gallery-single d-flex flex-column">
        <hr>
        <div class="container">
            <div class="position-relative h-100">
                <div class="slides-1 card-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="{{ asset('/assets\images\card-1.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('/assets\images\card-2.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
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
    <div class="row justify-content-between gy-4 mt-3 px-1">

        <div class="col-lg-8">
            <div class="card-description mx-5">
                <h2>This is an example of announcement detail</h2>
                <p>
                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore
                    quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim.
                    Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi
                    nulla at esse enim cum deserunt eius.
                </p>
                <p>
                    Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut
                    cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus
                    doloremque nesciunt molestiae laboriosam.
                </p>

                <div class="testimonial-item">
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
                </div>

                <p>
                    Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et
                    magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque
                    minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.

                <p>
                    Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem
                    libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium
                    rem et qui nesciunt.
                </p>

            </div>
        </div>

        <div class="col-lg-3">
            <div class="card-info mx-5">
                <h3>Card information</h3>
                <ul>
                    <li><strong>Category</strong> <span>XXX</span></li>
                    <li><strong>Nome</strong> <span>YYY</span></li>
                    <li><strong>Tipo</strong> <span>ZZZ</span></li>
                    <li><strong>Data di pubblicazione</strong> <span>01 March, 2023</span></li>
                </ul>
            </div>
        </div>

    </div>

    </div>
    <!-- End Announcement Single-Detail -->

   

    <x-footer />
</x-layout>
