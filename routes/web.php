<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $links = config("db.links");
    $series = config("db.series");
    $informations = config("db.informations");
    $linkList = config("db.linkList");
    $social = config('db.social');

    return view('home', compact('links', 'series', 'informations', 'linkList', 'social'));
})->name('home');
