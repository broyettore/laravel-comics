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
    $footerList1 = [
        "listItem1" => "characters",
        "listItem2" => "Comics",
        "listItem3" => "Movies",
        "listItem4" => "TV",
        "listItem5" => "Games",
        "listItem6" => "Videos",
        "listItem7" => "News",
    ];

    $footerList2 = [
        "listItem1" => "Shop DC",
        "listItem2" => "Shop DC Collectibles",
    ];

    $footerList3 = [
        "listItem1" => "Terms of Use",
        "listItem2" => "Privacy Policy(New)",
        "listItem3" => "Ad Choices",
        "listItem4" => "Advertising",
        "listItem5" => "Jobs",
        "listItem6" => "Subscriptions",
        "listItem7" => "Talent Workshops",
        "listItem8" => "CPSC Certificates",
        "listItem9" => "Ratings",
        "listItem10" => "Shop Help",
        "listItem11" => "Contact Us",
    ];
    $footerList4 = [
        "listItem1" => "DC",
        "listItem2" => "MAD Magazine",
        "listItem3" => "DC Kids",
        "listItem4" => "DC Universe",
        "listItem5" => "DC Power Visa",
    ];

    $comics = [
        'comic' => config('comics')
    ];

    return view('product', compact("navList", "footerList1", "footerList2", "footerList3", "footerList4"),$comics);
})-> name('product');
