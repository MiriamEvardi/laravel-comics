@extends('layouts/app')


@section('comics')
<img class="top-container" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">

<div class="upper">
    <div class="container">
        <div class="preview">
            <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
        </div>
    </div>
</div>

<div class="container d-flex justify-content-between align-items-top mt-5 pt-5">
    <div>
        <h2>ACTION COMICS #1000: THE DELUXE EDITION</h2>
    </div>
    <div>
        <h5>ADVERTISEMENT</h5>
        <div class="adv">
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
        </div>
    </div>

</div>



@endsection