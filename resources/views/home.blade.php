@extends('layouts.main')

@section('main-content')

<section>
    <div class="container">
        <div class="title">
            <h2>
                current series
            </h2>
        </div>

        <div class="comics">
            
            @foreach ($comics as $item)
                <div class="comic">
                    <img src="{{ $item["thumb"] }}" alt="{{ $item["title"] }}">
                    <h3> {{ $item["series"] }} </h3>
                </div>
            @endforeach
            
        </div>
        <div class="get-more">
            <button>load more</button>
        </div>
    </div>
    <div class="links">
        <div class="container">
            <div>
                <img src="{{ asset("img/buy-comics-digital-comics.png") }}" alt="">
                <span>
                    digital comics
                </span>
            </div>
            <div>
                <img src="{{ asset("img/buy-comics-merchandise.png") }}" alt="">
                <span>
                    dc merchandise
                </span>
            </div>
            <div>
                <img src="{{ asset("img/buy-comics-subscriptions.png") }}" alt="">
                <span>
                    subscriptions
                </span>
            </div>
            <div>
                <img src="{{ asset("img/buy-comics-shop-locator.png") }}" alt="">
                <span>
                    comic shop locator
                </span>
            </div>
            <div>
                <img src="{{ asset("img/buy-dc-power-visa.svg") }}" class="visa" alt="">
                <span>
                    dc power visa
                </span>
            </div>
        </div>
    </div>
</section>

@endsection