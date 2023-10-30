<footer class="pt-4 shadow-lg border-footer">
		<div class="container">
	  <div class="row">

		<div class="col-6 col-md-2 mb-3">
			<h5 class="text-light">{{__('custom.foot1')}}</h5>
			<ul class="nav flex-column">
			  <li>
				  <x-_locale lang='it' nation="{{__('custom.foot2')}}" />
				  <x-_locale lang='en' nation="{{__('custom.foot3')}}" />
				  <x-_locale lang='es' nation="{{__('custom.foot4')}}" />
			  </li>
			</ul>
		  </div>

		<div class="col-6 col-md-2 mb-3">
		  <h5 class="text-light">{{__('custom.foot5')}}</h5>
		  <ul class="nav flex-column">
			<li class="nav-item mb-2"><a href="{{route('homepage')}}" class="nav-link p-0 text-white-50">{{__('custom.foot6')}}</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white-50">{{__('custom.foot7')}}</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white-50">{{__('custom.foot8')}}</a></li>
			<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white-50">{{__('custom.foot9')}}</a></li>
		  </ul>
		</div>

		 <div class="col-6 col-md-2 mb-3">
			{{--<h5 class="text-light">LAVORA CON NOI</h5>
			<ul class="nav flex-column">
			  @if (Auth::user() && !Auth::user()->is_revisor)
			  <li><a href="{{ route('workWithUs') }}" class="text-white-50 text-decoration-none">Lavora con noi</a>
			  </li>
			  @endif
			</ul> --}}
		  </div>

		<div class="col-md-5 offset-md-1 mb-3">
		  <form>
			<h3 class="text-light">CardBazaar.</h3>
			<p class="text-white-50">{{__('custom.foot10')}}</p>
			<hr style="color: white">
			<p class="text-white-50">{{__('custom.foot11')}}</p>
			<p class="text-white-50">{{__('custom.foot12')}}</p>
			<p class="text-white-50">info@cardbazaar.it</p>
		  </form>
		</div>
	  </div>

	  <hr style="color: white">

	  <div class="d-flex flex-column flex-sm-row justify-content-between py-1 my-4">
		<p class="text-white-50">Copyright &copy; Designed by DevelHopers, 2023</p>
	  </div>
	</div>
	</footer>

