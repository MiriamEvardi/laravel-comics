<div class="background">
    <div class="container">

        <div class="link-list">

            @foreach($linkList as $link)
            <div>
                <h4 class="text-white">{{ $link['title']}}</h4>
                <ul>
                    @foreach($link['items'] as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach

        </div>

        <div class="big-logo">
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
        </div>

    </div>
</div>

<div class="footer-background">
    <div class="container list">

        <button>SIGN-UP NOW!</button>

        <ul class="social-list">
            <li class="follow">
                FOLLOW US
            </li>
            @foreach($social as $icon)
            <li> <img src="{{ Vite::asset('resources' . $icon) }}" alt=""></li>
            @endforeach
        </ul>


    </div>
</div>