<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
    <div class="custom-card">
        <div class="custom-card-content d-flex flex-column">
            <div style="width: 300px; height: 400px;">
                <img src="{{ !$target->images()->get()->isEmpty()? $target->images()->first()->getUrl(300, 400): '/assets/images/no-image.jfif' }}"
                    class="img-fluid object-fit-contain product-thumbnail shadow-lg">
            </div>
            <div>
                <h3 class="name text-dark"
                    style="height: 50px; display:flex; align-items:center; justify-content:center;">
                    {{ $target->title }}</h3>
            </div>
            <div class="mt-1 mb-3">
                <strong class="product-price">{{ $target->price }}€</strong>
            </div>
            <div>
                <a href="{{ route('announcements.show', $target->uri) }}"
                    class="btn btn-secondary shadow-lg">{{ __('custom.home3') }}</a>
            </div>
        </div>
    </div>
</div>



{{-- <div class="card d-flex" style="width: 18rem; background-color:transparent; border:none;">
        <img src="assets/images/card-1.png" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div> --}}
