@extends('layouts/app')


@section('comics')

<img class="top-container" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">

<div class="content-container">
    <div class="container">
        <h2 class="text-white"> CURRENT SERIES</h2>
    </div>
    <div class="container">
        <div id="comics">

            <div class="comics-list text-white">
                @foreach ($series as $serie)
                <div class="comic">
                    <img src="{{ $serie['thumb'] }}" alt="{{ $serie['series'] }}">
                    <div> {{ $serie['series'] }}</div>

                </div>
                @endforeach
            </div>

            <div class="load-button text-white">
                <button class="load">LOAD MORE</button>
            </div>
        </div>
    </div>
</div>

@endsection


@section('link-section')

<div class="links-container">
    <div class="container">
        <ul class="links">
            @foreach ($informations as $info)
            <li>

                <div class="image">
                    <img src="{{ Vite::asset('resources' . $info['img'] ) }}" alt="">
                </div>

                <span>{{ $info['name'] }}</span>
            </li>
            @endforeach
        </ul>

    </div>
</div>

@endsection