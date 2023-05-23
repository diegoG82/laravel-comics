<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/characters', function() {
    return view('characters');
});


Route::get('/', function () {
    $db = config('db');
    $comics = $db['comics'];
    return view('home', compact('comics'));
});

Route::get('/movies', function() {
    return view('movies');
});
Route::get('/tv', function() {
    return view('tv');
});

Route::get('/games', function() {
    return view('games');
});

Route::get('/collectibles', function() {
    return view('collectibles');
});

Route::get('/videos', function() {
    return view('movies');
});

Route::get('/fans', function() {
    return view('fans');
});

Route::get('/news', function() {
    return view('news');
});

Route::get('/shop', function() {
    return view('shop');
});