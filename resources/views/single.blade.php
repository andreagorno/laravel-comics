@extends('layouts.main')

@section('main-content')
    <section id="section-single">
        <div class="bluebanner"></div>

        <div class="container">
            <div class="info">
                <div class="comic-info">
                    <h2>
                        {{ $comics[0]["title"] }}
                    </h2>
                    <div class="pricing">

                        <span>
                           <span>U.S. Price:</span> {{ $comics[0]["price"] }}
                        </span>
                        <span>avaible</span>
                        <span class="available">Check Availability</span>
                        
                    </div>
                    <p>
                        {{ $comics[0]["description"] }}
                    </p>
                </div>
                <div class="adv">
                    <p>advertisement</p>
                    <img src="{{ asset("img/adv.jpg") }}" alt="adv">
                </div>
            </div>
        </div>

    </section>
@endsection