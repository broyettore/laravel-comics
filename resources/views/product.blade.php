@extends('layouts.app')

@section('page.main')
    <section class="comic-page">
        <div class="jumbo">
        </div>
        <div class="break">
            <div class="comic-card">
                <img src="{{ $comicItems["thumb"] }}" alt="{{ $comicItems["title"] }}">
            </div>
        </div>
        <div class="container comic-details d-flex justify-content-between align-items-center">
            <div class="left">
                <h2 class="mb-4">{{ $comicItems["title"] }}</h2>
                <div class="buy-info d-flex mb-3">
                    <div class="price d-flex  justify-content-between align-items-center">
                        <div><span class="marker me-1">U.S. Price:</span>{{ $comicItems["price"] }}</div>
                        <span class="marker">AVAILABLE</span>
                    </div>
                    <div class="stock d-flex  justify-content-center align-items-center">
                        <span>Check Availability 
                            <i class="fa-solid fa-caret-down"></i>
                        </span>
                    </div>
                </div>
                <p class="fs-5">{{ $comicItems["description"] }}</p>
            </div>
            <div class="right text-end">
                <h3 class="fs-5">ADVERTISEMENT</h3>
                <div class="ad-ctn">
                    <img src="{{ Vite::asset("resources/img/adv.jpg") }}" alt="ad">
                </div>
            </div>
        </div>
    </section>
    <section class="comic-page-mid">
        <div class="container comic-add-info d-flex justify-content-between align-items-start">
            <div class="left">
                <ul class=" list-group-flush talent-col">
                    <li class="list-group-item">
                        <h3 class="py-3">Talent</h3>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-left py-2">
                            <span>Art By:</span>
                        </div>
                        <p class="col-right py-2">
                            @foreach ($comicItems["artists"] as $artist)
                                <a href="#">
                                    {{ $artist }}
                                </a>,
                            @endforeach
                        </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="col-left py-2">
                            <span>Written By:</span>
                        </div>
                        <p class="col-right py-2">
                            @foreach ($comicItems["artists"] as $writer)
                                <a href="#">
                                    {{ $writer }}
                                </a>,
                            @endforeach
                        </p>
                    </li>
                  </ul>
            </div>
            <div class="right">
                <ul class="list-group-flush specs-col">
                    <li class="list-group-item">
                        <h3 class="py-3">Specs</h3>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="col-left py-2">
                            <span>Series:</span>
                        </div>
                        <span>
                            <a href="#">
                                {{ $comicItems["series"] }}
                            </a>
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="col-left py-2">
                            <span>Series:</span>
                        </div>
                        <span>
                            {{ $comicItems["price"] }}
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="col-left py-2">
                            <span>Series:</span>
                        </div>
                        <span>
                            {{ $comicItems["sale_date"] }}
                        </span>
                    </li>
                  </ul>
            </div>
        </div>
    </section>
    <section class="comic-page-end">
        <div class="container merch-options d-flex align-items-start">
            <div class="item d-flex justify-content-between align-items-start">
                <div class="title-ctn">
                    <h3>DIGITAL COMICS</h3>
                </div>
                <div class="img-ctn">
                    <img src="{{ Vite::asset("resources/img/buy-comics-digital-comics.png") }}" alt="an option">
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-start">
                <div class="title-ctn">
                    <h3>SHOP DC</h3>
                </div>
                <div class="img-ctn">
                    <img src="{{ Vite::asset("resources/img/buy-comics-merchandise.png") }}" alt="an option">
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-start">
                <div class="title-ctn">
                    <h3>COMIC SHOP LOCATOR</h3>
                </div>
                <div class="img-ctn">
                    <img src="{{ Vite::asset("resources/img/buy-comics-shop-locator.png") }}" alt="an option">
                </div>
            </div>
            <div class="item d-flex justify-content-between align-items-start">
                <div class="title-ctn">
                    <h3>SUBSCIPTIONS</h3>
                </div>
                <div class="img-ctn">
                    <img src="{{ Vite::asset("resources/img/buy-comics-subscriptions.png") }}" alt="an option">
                </div>
            </div>
        </div>
    </section>
@endsection