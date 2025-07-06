@extends('layouts.app')

@section('content')
    <section class="hero">
        @include('partials.nav')
        <div class="video-wrapper">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('videos/jcb_intro.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="hero-text">
            <h1>Welcome to Anuranga24</h1>
        </div>
    </section>
    <section>
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
    </section>
    <section>
        <h1>Our Services</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
    </section>
    <section>
        <h1>Contact Us</h1>
    </section>
@endsection