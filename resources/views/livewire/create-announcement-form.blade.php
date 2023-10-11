<div>
    <section class="login-section" style="margin-top: 130px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-form">
                        <h2 class="mb-4 text-center">Create your announcement...</h2>
                        @if (session()->has('success'))
                            <h3 class="text-center mb-4">{{ session()->get('success') }}</h3>
                        @endif
                        <form wire:submit.prevent="store">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input wire:model="title" type="text"
                                    class="form-control @error('title') is-invalid @enderror" id="title" required>
                                @error('title')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-textarea">Description</label>
                                <textarea wire:model="body" type="text" class="form-control @error('body') is-invalid @enderror" id="body"
                                    required></textarea>
                                @error('body')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input wire:model="price" type="text"
                                    class="form-control @error('price') is-invalid @enderror" id="price" required>
                                @error('price')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select wire:model.defer="category" id="category" class="form-control">
                                    <option value="">Select category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Create!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
