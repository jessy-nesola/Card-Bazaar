<x-layout>
    <div class="hero" style="margin-top: 130px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Categorie</h1>
                        <p class="mb-4">Che testo mettiamo? Che testo mettiamo? Che testo mettiamo? Che testo mettiamo?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container justify-content-center">
        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-12 col-md-4 col-lg-3 my-5 mb-md-0">
                        <div class="custom-card">
                            <div class="custom-card-content">
                                <img src="assets/images/yugioh (1).jpg" class="img-fluid" alt="{{ $category->name }}">
                                <h3 class="name">{{ $category->name }}</h3>
                                <a href="{{ route('categories.show', $category->name) }}"
                                    class="btn btn-primary">Visualizza</a>
                                <p>Che testo mettiamo? Che testo mettiamo? Che testo mettiamo? Che testo mettiamo?</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
