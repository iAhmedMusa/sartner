@extends('front.layouts.app') @push('custom-style')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}"> @endpush @section('content')
<div class="hello-wrapper">
    <div class="container">
        <div class="hello-section">
            <div class="left-side-items">
                <div class="hello-title">
                    <h3>Hello</h3>
                    {{--
                    <hr> --}}
                </div>
                <h1>I AM RAHI SATNER</h1>
                <h5>SENIOR WORDPRESS DEVELOPER</h5>
                <div class="button-block">
                    <a href="" class="global-button">Hire Me</a>
                    <a href="" class="global-button global-reverse-hover">Get CV</a>
                </div>
            </div>
            <div class="right-side-items">
                <img src="{{ asset('../../images/home-right.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="about-area-secton">
    <div class="container">
        <div class="items-section">
            <div class="left-side-items">
                <img src="{{ asset('../../images/about-us.png') }}" alt="">
            </div>
            <div class="right-side-items">
                <h2>
                    let’s<br>INTRODUCE ABOUT<br>MYSELF
                </h2>
                <p>Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven
                    midst their. Beast creepeth. Fish days.
                </p>
                <p>
                    Is give may shall likeness made yielding spirit a itself together created after sea
                    is in beast beginning signs open god you're gathering whose gathered cattle let.
                    Creature whales fruit unto meat the life beginning all in under give two.
                </p>
                <a href="" class="global-button download-button-block">Download</a>
            </div>
        </div>
    </div>
</div>

<div class="brand-area-section">
    <div class="container">
        
        <div class="left-block-items">
            <div class="item">
                <img src="{{ asset('../../images/logo1.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo2.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo3.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo1.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo2.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo3.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo1.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo2.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo3.png') }}" alt="brand-icon">
            </div>
        </div>
        <div class="right-block-items">
            <div class="top-block">
                <div class="top-left-block">

                </div>
                <div class="top-right-block">

                </div>
            </div>
            <div class="bottom-block">
                <div class="bottom-left-block">
                    <img src="" alt="mobile_icon">
                </div>
                <div class="bottom-right-block">
                    <h1>BOTTOM RIGHT BLOCK</h1>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection