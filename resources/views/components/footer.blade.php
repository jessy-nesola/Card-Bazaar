<footer class="footer py-4 mt-5 shadow-lg">
    <div class="container px-5">
        <div class="row my-3">
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                <h4><a href="{{route('homepage')}}" class="text-decoration-none text-reset">CardBazaar.</a></h4>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
                 <ul>   
                    <li><a href="{{route('announcements.index')}}" class="text-decoration-none text-reset">Espolra</a></li>
                    <li><a href="{{route('categories.index')}}" class="text-decoration-none text-reset">Tutte le categorie</a></li>
                    <li><a href="{{route('register')}}" class="text-decoration-none text-reset">Registrati</a></li>
                    <li><a href="{{route('announcements.create')}}" class="text-decoration-none text-reset">Inserisci annuncio</a></li>    
                </ul>
            </div>
        </div>
        
        <div class="row align-items-center justify-content-center">
            <div class="col-auto">
                <p class="small m-0">Copyright &copy; Designed by develHOPErs, 2023</p>
            </div>
        </div>
    </div>
</footer>