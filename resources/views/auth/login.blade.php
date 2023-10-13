<x-auth>
    <!-- Start Login Section -->
    <section class="login-section" style="margin-top: 130px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-form">
                        <h2 class="mb-5 text-center">Login</h2>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        {{-- <p class="mt-3"><a href="#">Forgot your password?</a></p> --}}
                        <p class="mt-3">Don't have an account? <a href="{{route('register')}}">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login Section -->
</x-auth>
