@extends('layouts.app')

@section('content')
    <section class="booking-section">
        <div class="hero-default">
            @include('partials.nav')
            <h2>Book a Vehicle</h2>
            <form method="POST" action="/booking">
                @csrf
                <label for="name">Your Name:</label>
                <input type="text" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" name="email" required>

                <label for="vehicle">Vehicle Type:</label>
                <select name="vehicle">
                    <option value="jcb">JCB</option>
                    <option value="tipper">Tipper</option>
                    <option value="excavator">Excavator</option>
                </select>

                <label for="date">Booking Date:</label>
                <input type="date" name="date" required>

                <button type="submit">Book Now</button>
            </form>
        </div>
    </section>
@endsection