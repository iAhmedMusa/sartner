@extends('front.layouts.app')
@push('custom-style')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endpush
@section('content')
    <div class="hello-wrapper">
        <div class="container">
            <div class="hello-section">
                <div class="hello-title">
                    <h3>Hello</h3>
                    {{-- <hr> --}}
                </div>
                <h1>I AM RAHI SATNER</h1>
                <h2>SENIOR WORDPRESS DEVELOPER</h2>
                <div class="button-block">
                    <a href="">Hire Me</a>
                    <a href="">Get CV</a>
                </div>

                <div class="right-side-img">
                <img src="{{ asset('../../images/home-right.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection