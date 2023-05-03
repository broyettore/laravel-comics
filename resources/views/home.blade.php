@extends('layouts.app')

@section('page.main')
    <section>
        <div class="jumbo">
            <div class="intro-next-section">
                <span>
                    CURRENT SERIES
                </span>
            </div>
        </div>
        <div class="container d-flex flex-wrap">
            @foreach ($comics as $item)
            <div class="card-item">
                <div class="card-top">
                    <a href="{{ route("product", ["index" => $loop->index]) }}">
                        <img src="{{ $item["thumb"] }}" alt="{{ $item["title"] }}">
                    </a>
                </div>
                <div class="card-info">
                    <h4>{{ $item["title"] }}</h4>
                </div>
            </div>  
            @endforeach
        </div>
        <div class="btn-ctn">
            <button class="fs-5">Load More</button>
        </div>
    </section>

    <section class="merchandise">
        <div class="container">
            <div class="item">
                <div class="img-ctn">
                    <img src="{{ Vite::asset("resources/img/buy-comics-digital-comics.png") }}" alt="an option">
                </div>
                <div class="title-ctn">
                    <h3>DIGITAL COMICS</h3>
                </div>
            </div>
            <div class="item">
                <div class="img-ctn">
                    <img src="{{ Vite::asset("resources/img/buy-comics-merchandise.png") }}" alt="an option">
                </div>
                <div class="title-ctn">
                    <h3>DC MERCHANDISE</h3>
                </div>
            </div>
            <div class="item">
                <div class="img-ctn">
                    <img src="{{ Vite::asset("resources/img/buy-comics-subscriptions.png") }}" alt="an option">
                </div>
                <div class="title-ctn">
                    <h3>SUBSCRIPTION</h3>
                </div>
            </div>
            <div class="item">
                <div class="img-ctn">
                    <img src="{{ Vite::asset("resources/img/buy-comics-shop-locator.png") }}" alt="an option">
                </div>
                <div class="title-ctn">
                    <h3>COMIC SHOP LOCATOR</h3>
                </div>
            </div>
            <div class="item">
                <div class="img-ctn">
                    <img src="{{ Vite::asset("resources/img/buy-comics-shop-locator.png") }}" alt="an option">
                </div>
                <div class="title-ctn">
                    <h3>DC POWER VISA</h3>
                </div>
            </div>
        </div>
    </section>
@endsection