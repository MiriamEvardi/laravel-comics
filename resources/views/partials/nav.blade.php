<nav>

    <div class="top-nav">
        <div class="container d-flex justify-content-end gap-5 text-white">
            <strong>
                DC POWER VISA®
            </strong>

            <strong>
                ADDITIONAL DC SITES &#11206;
            </strong>
        </div>
    </div>

    <div class="container py-2">


        <img id="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        <ul class="links">
            @foreach ($links as $link)
            <li>
                {{ $link }}

            </li>
            @endforeach
        </ul>

    </div>

</nav>