<x-layout>
    {{-- <header class="hero" style="margin-top: 130px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h2 class="fs-1">{{ $category->name }}</h2>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}

    <div class="intro-excerpt text-center" style="margin-top: 4%">
        <h2 class="animate__animated animate__pulse fs-1">{{ $category->name }}</h2>
        {{-- <p class="animate__animated animate__pulse">{{__('custom.cat.show1')}} {{ $category->name }}</p> --}}
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">
                @forelse ($category->orderByAndPaginate() as $announcement)
                <x-card :target='$announcement'/>
                @empty
                <div class="text-center">
                    <h3 class="mt-5 mb-3">{{__('custom.cat.show2')}}</h3>
                    <div><a href="{{ route('announcements.create') }}" class="btn btn-warning btn-sm">{{__('custom.cat.show3')}}</a></div>
                </div>
                @endforelse
                <span class="mt-4">
                    {{-- MENU NAVIGAZIONE --}}
                    {{ $category->orderByAndPaginate()->links() }}
                </span>
            </div>
        </div>
    </div>
</x-layout>
