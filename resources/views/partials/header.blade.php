<div class="container top d-flex justify-content-end  gap-2 text-white mt-2">
    <p>DC POWER VISA</p>
    <p>Additional DC Sites</p>

</div>

<nav class="bg-body-tertiary">
    <div class="container header_container d-flex justify-content-between">

        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>

        <div class="navbarNav" class=" d-flex">
            <ul class="list-unstyled d-flex m-0">

                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/characters') }}">CHARACTERS</a>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">COMICS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/movies') }}">MOVIES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/tv') }}">TV</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/games') }}">GAMES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/collectibles') }}">COLLECTIBLES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/videos') }}">VIDEOS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/fans') }}">FANS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/news') }}">NEWS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/shop') }}">SHOP</a>
                </li>


            </ul>
        </div>
        <div class="form_nav">
            <input class="form-control form-control-sm" type="text" placeholder="Search...">
        </div>
    </div>
</nav>
