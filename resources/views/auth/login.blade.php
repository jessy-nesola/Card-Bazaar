<x-layout>
    <!-- SEZIONE LOGIN -->
    <div class="login-section" style="margin-top: 90px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-form">
                        <h2 class="mb-5 text-center">Login</h2>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="email" class="form-label">Indirizzo Mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Entra</button>
                            </div>
                        </form>
                        {{-- <p class="mt-3"><a href="#">Forgot your password?</a></p> --}}
                        <p class="mt-3">Non hai un account? <a href="{{ route('register') }}"> Clicca qua</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Section -->
</x-layout>
