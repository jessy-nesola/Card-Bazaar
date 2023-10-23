{{-- <footer class="footer py-4 mt-5 shadow-lg">
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
                    {{-- @if (Auth::user() && !Auth::user()->is_revisor)
                        <li><a href="{{ route('workWithUs') }}" class="text-decoration-none text-reset">Lavora con
                                noi</a>
                    @endif
                    <li>
                        <x-_locale lang='it' nation='IT' />
                        <x-_locale lang='en' nation='EN' />
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
</footer> --}}

<footer class="deneb_footer">
	<div class="widget_wrapper" style="background-image: url(http://demo.tortoizthemes.com/deneb-html/deneb-ltr/assets/images/footer_bg.png);">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="widget widegt_about">
						<div class="widget_title">
							<img src="assets/images/logo_1.png" class="img-fluid" alt="">
						</div>
						<p>Quisque orci nisl, viverra et sem ac, tincidunt egestas massa. Morbi est arcu, hendrerit ac vehicula condimentum, euismod nec tortor praesent consequat urna.</p>
						<ul class="social">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="widget widget_link">
						<div class="widget_title">
							<h4>Links</h4>
						</div>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="widget widget_contact">
						<div class="widget_title">
							<h4>Contact Us</h4>
						</div>
						<div class="contact_info">
							<div class="single_info">
								<div class="icon">
									<i class="fas fa-phone-alt"></i>
								</div>
								<div class="info">
									<p><a href="tel:+919246147999">1800-121-3637</a></p>
									<p><a href="tel:+919246147999">+91 924-614-7999</a></p>
								</div>
							</div>
							<div class="single_info">
								<div class="icon">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="info">
									<p><a href="mailto:info@deneb.com">info@deneb.com</a></p>
									<p><a href="mailto:services@deneb.com">services@deneb.com</a></p>
								</div>
							</div>
							<div class="single_info">
								<div class="icon">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="info">
									<p>125, Park street aven, Brocklyn,<span>Newyork.</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="copyright_text">
						<p>Copyright &copy; 2023 All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
