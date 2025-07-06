@extends('layouts.app')

@section('content')
    <section class="projects-section">
        <div class="hero-default">
        @include('partials.nav')
            <h2>Our Projects</h2>
            <ul>
                <li><strong>Site A</strong>: Excavator operation with full-time driver</li>
                <li><strong>Site B</strong>: JCB support for foundation work</li>
                <li><strong>Site C</strong>: Tipper transport for bulk material</li>
            </ul>
        </div>
    </section>
@endsection
