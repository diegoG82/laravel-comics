<nav class="bg-body-tertiary">
    <div class="container-fluid text-center">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <div id="navbarNav" class="justify-content-center d-flex">
            <ul class="list-unstyled d-flex">
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">CHARACTERS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/Comics')}}">COMICS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/Movies')}}">MOVIES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/Tv')}}">TV</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/Games')}}">GAMES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/Collectibles')}}">COLLECTIBLES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/Videos')}}">VIDEOS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/Fans')}}">FANS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/news')}}">NEWS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/Shop')}}">SHOP</a>
                </li>


            </ul>
        </div>
    </div>
</nav>