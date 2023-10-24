<div>
    <div style="margin: 5%">
        <section class="login-section shadow-lg">
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
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        required>
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
                                        class="form-control @error('price') is-invalid @enderror" id="price"
                                        required>
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Categoria</label>
                                    <select wire:model.defer="category" id="category"
                                        class="form-select @error('category') is-invalid @enderror">
                                        <option value="">Seleziona la categoria</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="temporary_images" class="form-label">Prezzo</label>
                                    <input wire:model="temporary_images" type="file" multiple
                                        class="form-control @error('temporary_images.*') is-invalid @enderror"
                                        id="temporary_images" required>
                                    @error('temporary_images.*')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                @if (!empty($images))
                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <div class="row border border-4 border-info rounded py-4">
                                                <div class="text-center fs-5">Photo preview</div>
                                                @foreach ($images as $key => $image)
                                                    <div class="col my-3">
                                                        <div class="mx-auto shadow rounded"
                                                            style="height: 300px; width: 300px; background-image: url({{ $image->temporaryUrl() }});">
                                                        </div>
                                                        <button type="button"
                                                            class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                                            wire:click="removeImage({{ $key }})">Cancella</button>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif


                                <div class="d-grid">
                                    <button type="submit" class="btn btn-secondary">Upload!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
