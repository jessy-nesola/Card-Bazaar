<nav class="navbar navbar-expand-lg fixed-top border-nav">
    <div class="container-fluid col-11">
        <a class="navbar-brand text-light" href="{{ route('homepage') }}">CardBazaar.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item @if (Route::currentRouteName() == 'homepage') @endif">
                    <a class="nav-link text-white-50" aria-current="page" href="{{ route('homepage') }}">{{__('custom.nav1')}}</a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() == 'announcements.index') @endif">
                    <a class="nav-link text-white-50" href="{{ route('announcements.index') }}">{{__('custom.nav2')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white-50 @if (Route::currentRouteName() == 'categories.index') @endif"
                        href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('custom.nav3')}}
                    </a>
                    <ul class="dropdown-menu drop-nav shadow" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{ route('categories.show', $category->name) }}">{{$category->name}}</a></li>
                        @endforeach
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="item"><a class="dropdown-item" href="{{ route('categories.index') }}">{{__('custom.nav4')}}</a></li>
                    </ul>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link text-white-50 @if (Route::currentRouteName() == 'announcements.create') @endif" href="{{ route('announcements.create') }}" tabindex="-1"
                        aria-disabled="true">{{__('custom.nav5')}}</a>
                </li>
                @endauth
            </ul>

                {{-- FORM SEARCH --}}

            <form action="{{route('announcements.search')}}" method="GET" class="d-flex" role="search">
                <input name="searched" class="form-control me-2" type="search" placeholder="{{__('custom.nav6')}}" aria-label="Search">
                <button class="btn btn-secondary" type="submit">{{__('custom.nav7')}}</button>
            </form>

            <ul class="navbar-nav">
                @guest
                    <div class="nav-item">
                        <a class="btn btn-warning m-2" href="{{ route('login') }}">{{__('custom.nav8')}}</a>
                    </div>
                @else
                    <div class="nav-item">
                        <a class="btn btn-warning m-2">
                            {{__('custom.nav9')}} {{ Auth::user()->name }}
                        </a>
                    </div>
                    <div class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-warning m-2"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{__('custom.nav10')}}
                            </button>
                        </form>
                    </div>
                @endguest
            </ul>
        </div>
    </div>
</nav>
