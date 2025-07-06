@extends('layouts.app')

@section('content')
    <section class="contact-section">
        <div class="hero-default">
            @include('partials.nav')
            <h2>Contact Us</h2>
            <form method="POST" action="/contact">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <label for="message">Message:</label>
                <textarea name="message" rows="4" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
@endsection
