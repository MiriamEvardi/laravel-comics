<nav>


    <div class="container">

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