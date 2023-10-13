<x-layout>

    <div class="hero" style="margin-top: 60px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Categories</h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-12 col-md-4 col-lg-3 my-5 mb-md-0">
                        <div class="product-item">
                            <img src="/assets/images/yugioh (1).jpg" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $category->name }}</h3>
                            <span class="icon-cross">
                                <a href="{{route('categories.show', $category->name)}}"><img src="assets/images/cross.svg" class="img-fluid"></a>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
