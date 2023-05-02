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

Route::get('/', function () {

    $navList = [
        "listItem1" => "CHARACTERS",
        "listItem2" => "COMICS",
        "listItem3" => "MOVIES",
        "listItem4" => "TV",
        "listItem5" => "GAMES",
        "listItem6" => "COLLECTIBLES",
        "listItem7" => "VIDEOS",
        "listItem8" => "FANS",
        "listItem9" => "NEWS",
        "listItem10" => "SHOP",
    ];

    return view('home', compact("navList"));
});

Route::get('/', function () {

    $navList = [
        "listItem1" => "CHARACTERS",
        "listItem2" => "COMICS",
        "listItem3" => "MOVIES",
        "listItem4" => "TV",
        "listItem5" => "GAMES",
        "listItem6" => "COLLECTIBLES",
        "listItem7" => "VIDEOS",
        "listItem8" => "FANS",
        "listItem9" => "NEWS",
        "listItem10" => "SHOP",
    ];

    $comics = [
        'comic' => config('comics')
    ];

    return view('product', compact("navList"),$comics);
})-> name('product');
