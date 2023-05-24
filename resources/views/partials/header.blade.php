@php

$menu = [
    [
        'title' => 'CHARACTERS',
        'link' => 'characters'
    ],

    [
        'title' => 'COMICS',
        'link' => 'comics'
    ],

    [
        'title' => 'MOVIES',
        'link' => 'movies'
    ],

    [
        'title' => 'TV',
        'link' => 'tv'
    ],

    [
        'title' => 'COLLECTIBLES',
        'link' => 'collectibles'
    ],

    [
        'title' => 'VIDEOS',
        'link' => 'videos'
    ],

    [
        'title' => 'FANS',
        'link' => 'fans'
    ],

    [
        'title' => 'NEWS',
        'link' => 'news'
    ],

    [
        'title' => 'SHOP',
        'link' => 'shop'
    ],
];

@endphp

<div class="container top d-flex justify-content-end gap-2 text-white mt-2">
    <p>DC POWER VISA</p>
    <p>Additional DC Sites</p>
</div>

<nav class="bg-body-tertiary">



    <div class="container header_container d-flex justify-content-between">
        {{-- <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div> --}}

        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </a>
        </div>
        








        <div class="navbarNav d-flex">
            <ul class="list-unstyled d-flex m-0">
                @foreach ($menu as $item)
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route($item['link']) }}">{{ $item['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="form_nav">
            <input class="form-control form-control-sm" type="text" placeholder="Search...">
        </div>
    </div>
</nav>
