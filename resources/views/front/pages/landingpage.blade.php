@extends('front.layouts.app')
@push('custom-style')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}"> @endpush
@section('content')
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
            <div class="all-items">
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
                <img src="{{ asset('../../images/logo4.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo5.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo6.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo7.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo8.png') }}" alt="brand-icon">
            </div>
            <div class="item">
                <img src="{{ asset('../../images/logo9.png') }}" alt="brand-icon">
            </div>
        </div>
        </div>
        <div class="right-block-items">
          <div class="portfolio-content">
              <div class="experience">
                <span class="number">10</span>
                <span class="text">Years<br>Experience<br>Working</span>
              </div>
              <div class="contact">
                <span class="fa fa-phone"></span>
                <span class="phone-number">
                    <span class="call-us">
                        CALL US NOW
                    </span>
                    <h3>
                        (+1)-800-555-6789
                    </h3>
                </span>
              </div>
          </div>
        </div>
    </div>
</div>

<div class="features-area">
    <div class="container"> 
        <div class="features-area-heading-text">
            <div class="title-text">
                <h2>service offers</h2>
                <p>Is give may shall likeness made yielding spirit a itself togeth created after sea <br>
                    is in beast beginning signs open god you're gathering ithe</p>
            </div>
        </div>

        <div class="all-items">
            <div class="item">
                <img src="{{ asset('../../images/s1.png') }}" alt="service-icon">
                <h4>Wp developing</h4>
                <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
            </div>
            <div class="item">
                <img src="{{ asset('../../images/s2.png') }}" alt="service-icon">
                <h4>UI/ux design</h4>
                <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
            </div>
            <div class="item">
                <img src="{{ asset('../../images/s3.png') }}" alt="service-icon">
                <h4>Web design</h4>
                <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
            </div>
            <div class="item">
                <img src="{{ asset('../../images/s4.png') }}" alt="service-icon">
                <h4>seo optimize</h4>
                <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
            </div>
        </div>
    </div>
</div>
@endsection