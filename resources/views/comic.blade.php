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

<div class="container d-flex justify-content-between align-items-top mt-5 pt-3">
    <div class="col-7">
        <h2>ACTION COMICS #1000: THE DELUXE EDITION</h2>
        <div class="d-flex align-items-center pt-3">
            <div class="price border-black border border-end-0 col-9 d-flex justify-content-between p-2">
                <div class="text-white">U.S. Price: <strong>$19.99</strong></div>
                <div class="text-white">AVAILABLE</div>
            </div>
            <div class="price border-black border col-3 p-2 text-white">Check Availability&#11206</div>
        </div>
        <p class="mt-3 fs-5">The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issues, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman's new look, scripts fort the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it at all--the Superman stories Action Comics#1 and 2 from 1938!</p>
    </div>
    <div class="col-3">
        <h5 class="d-flex justify-content-end">ADVERTISEMENT</h5>
        <div class="adv">
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
        </div>
    </div>

</div>

@endsection


@section('link-section')
<div class="bottom-page">
    <div class="container d-flex justify-content-between align-items-top gap-5 mt-5 pt-3 mb-5 pb-5 ">
        <div class="col-6 me-4">
            <h2>Talent</h2>
            <hr class="m-0">
            <div class="d-flex justify-content-between gap-5 mt-3">
                <div class="col-3">Art by:</div>
                <p class="text-primary">José Luis Garcìa-Lòpez, Clay Mann, Rafael Albuquerque, José Luis Garcìa-Lòpez, Clay Mann, Rafael Albuquerque, José Luis Garcìa-Lòpez, Clay Mann, Rafael Albuquerque, José Luis Garcìa-Lòpez, Clay Mann, Rafael Albuquerque</p>
            </div>
            <hr class="m-0">
            <div class="d-flex justify-content-between gap-5 mt-3">
                <div class="col-3">Written by:</div>
                <p class="text-primary">José Luis Garcìa-Lòpez, Clay Mann, Rafael Albuquerque, José Luis Garcìa-Lòpez, Clay Mann, Rafael Albuquerque, José Luis Garcìa-Lòpez, Clay Mann, Rafael Albuquerque, José Luis Garcìa-Lòpez, Clay Mann, Rafael Albuquerque</p>
            </div>
            <hr class="m-0">
        </div>


        <div class="col-6">
            <h2>Specs</h2>
            <hr class="m-0">
            <div class="d-flex justify-content-between">
                <div class="col-3">Series:</div>
                <p class="text-primary">ACTION COMICS</p>
            </div>
            <hr class="m-0">
            <div class="d-flex justify-content-between">
                <div class="col-3">U.S. Price:</div>
                <p>$19.99</p>
            </div>

            <hr class="m-0">
            <div class="d-flex justify-content-between ">
                <div class="col-3">On Sale Date:</div>
                <p>Oct 02 2018</p>
            </div>
            <hr class="m-0">
        </div>
    </div>


    <div class="border-top border-2">
        <div class="container">
            <ul class="comic-links list-unstyled d-flex justify-content-between m-0">
                @foreach ($comicLink as $comic)
                <li class="col-3 d-flex align-items-center justify-content-between gap-5 border-1 border-start py-3 px-5 border-end">
                    <span>{{ $comic['name'] }}</span>

                    <div class="comic-link-image">
                        <img src="{{ Vite::asset('resources' . $comic['img'] ) }}" alt="">
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endsection