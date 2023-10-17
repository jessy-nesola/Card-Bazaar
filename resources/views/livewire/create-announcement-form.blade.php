<div>
    <section class="login-section" style="margin-top: 130px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-form">
                        <h2 class="mb-4 text-center">Crea la tua carta...</h2>
                        @if (session()->has('success'))
                            <h3 class="text-center mb-4">{{ session()->get('success') }}</h3>
                        @endif
                        <form wire:submit.prevent="store">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Nome</label>
                                <input wire:model="title" type="text"
                                    class="form-control @error('title') is-invalid @enderror" id="title" required>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-textarea">Descrizione</label>
                                <textarea wire:model="body" type="text" class="form-control @error('body') is-invalid @enderror" id="body"
                                    required></textarea>
                                @error('body')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Prezzo</label>
                                <input wire:model="price" type="text"
                                    class="form-control @error('price') is-invalid @enderror" id="price" required>
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Categoria</label>
                                <select wire:model.defer="category" id="category" class="form-select @error('category') is-invalid @enderror">
                                    <option value="">Seleziona la categoria</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Upload!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
