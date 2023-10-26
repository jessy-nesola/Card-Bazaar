<x-layout>
    <x-header />

    <div class="container col-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
                <h3></h3>
                <p class="lead">{{ __('custom.home1') }}</p>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/assets/images/Cards Shop.jpg" class="d-block mx-lg-auto img-fluid" alt="Mixed Cards"
                    width="600" height="500" loading="lazy">
            </div>
        </div>

    </div>

    <section class="product-section">

        <div class="container-fluid text-center col-12 col-lg-10 mb-5">
            <hr style="margin-bottom: 3%">
            <div class="row d-flex justify-content-center mb-5">
                <div>
                    <h3 class="text-center">{{ __('custom.home2') }}</h3>
                </div>
                @foreach ($announcements as $announcement)

                    <x-card :target='$announcement'/>

                    {{-- <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <div class="custom-card">
                            <div class="custom-card-content d-flex flex-column">
                                <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(300, 400) : 'assets/images/yugioh (1).jpg' }}"
                                    class="img-fluid object-fit-contain product-thumbnail shadow-lg">
                                <div>
                                    <h3 class="name text-dark"
                                        style="height: 50px; display:flex; align-items:center; justify-content:center;">
                                        {{ $announcement->title }}</h3>
                                </div>
                                <div class="mt-1 mb-3">
                                    <strong class="product-price">{{ $announcement->price }}€</strong>
                                </div>
                                <div>
                                    <a href="{{ route('announcements.show', $announcement->uri) }}"
                                        class="btn btn-secondary shadow-lg">{{ __('custom.home3') }}</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                @endforeach
            </div>
            <hr>
        </div>
    </section>

    <section style="margin-bottom: 7%">
        <div class="py-2"></div>
        <div class="container-fluid text-center col-12 col-lg-10 m-auto">
            <h3 class="homepage__title--dark-blue h1--smaller mb-5">{{ __('custom.home4') }}</h3>
            <div class="row">
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <span><i class="fa fa-3x fa-globe-americas" aria-hidden="true"></i><br></span>
                    <p class="font-weight-bold mt-3">{{ __('custom.home5') }}</p>
                    <p>{{ __('custom.home6') }}</p>
                </div>
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <span><i class="fa fa-3x fa-handshake" aria-hidden="true"></i><br></span>
                    <p class="font-weight-bold mt-3">{{ __('custom.home7') }}</p>
                    <p>{{ __('custom.home8') }}</p>
                </div>
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <span><i class="fa fa-3x fa-headset" aria-hidden="true"></i><br></span>
                    <p class="font-weight-bold mt-3">{{ __('custom.home9') }}</p>
                    <p>{{ __('custom.home10') }}</p>
                </div>
            </div>
        </div>
        @if (Auth::guest() || Auth::user() && !Auth::user()->is_revisor)
            <section class="deneb_cta">
                <div class="container">
                    <div class="cta_wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="cta_content">
                                    <h3>{{ __('custom.home12') }}</h3>
                                    <p>{{ __('custom.home13') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="button_box">
                                    <a href="{{ route('workWithUs') }}" class="btn btn-warning">{{ __('custom.home14') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </section>

</x-layout>
