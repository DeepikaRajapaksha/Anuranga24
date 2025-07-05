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
@endsection