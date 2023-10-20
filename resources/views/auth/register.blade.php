<x-layout>
    <!-- SEZIONE REGISTRAZIONE -->
    <div style="padding: 5%" >
    <div class="register-section shadow-lg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="register-form">
                        <h2 class="mb-5 text-center">Crea Account</h2>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome Utente</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{old('name')}}" required>
                                @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Indirizzo Mail</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{old('email')}}" required>
                                @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" value="{{old('password')}}" required>
                                @error('password')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Conferma Password</label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}" required>
                                @error('password_confirmation')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-secondary">Registrati</button>
                            </div>
                        </form>
                        <p class="mt-3 text-center">Hai giá un account? <a href="{{ route('login') }}"> Clicca qua</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Register Section -->
</x-layout>
