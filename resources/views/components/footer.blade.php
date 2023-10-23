<footer class="footer py-4 mt-5 shadow-lg">
    <div class="container px-5">
        <div class="row my-3">
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                <h4><a href="{{ route('homepage') }}" class="text-decoration-none text-reset">CardBazaar.</a></h4>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <ul>
                    <li><a href="" class="text-decoration-none text-reset">Contatti</a></li>
                    <li><a href="" class="text-decoration-none text-reset">Chi siamo</a></li>
                    {{-- TASTO "LAVORA CON NOI" --}}
                    @if (Auth::user() && !Auth::user()->is_revisor)
                        <li><a href="{{ route('workWithUs') }}" class="text-decoration-none text-reset">Lavora con
                                noi</a>
                    @endif
                    <li>
                        <x-_locale lang='it' nation='IT' />
                        <x-_locale lang='en' nation='GB' />
                        <x-_locale lang='es' nation='ES' />
                    </li>
                </ul>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-auto">
                <p class="small m-0">Copyright &copy; designed by develHOPErs, 2023</p>
            </div>
        </div>
    </div>
</footer>
