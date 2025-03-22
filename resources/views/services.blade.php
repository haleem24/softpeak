@extends('layouts.app')
@section('content')
    <section class="services">
        <h1>Our Services</h1>
        <p>SoftPeak delivers tailored software solutions with a proven track record in ERP, PSP, and e-commerce integrations.</p>

        <div class="service-item">
            <h2>Custom Software Development</h2>
            <p>Specializing in PHP, SoftPeak builds complete systems like ERPs with POS (2.5x productivity boost for invoicing) and PSP software. From scratch to scale, your vision becomes reality.</p>
        </div>

        <div class="service-item">
            <h2>App Development</h2>
            <p>SoftPeak creates API-driven web and mobile apps, with integrations for platforms like BackMarket and merchant systems. Fast, secure, and user-friendly.</p>
        </div>

        <div class="service-item">
            <h2>Tech Consulting</h2>
            <p>With a decade of freelancing and live server expertise, SoftPeak offers strategy, automation, and optimization for UK businesses.</p>
        </div>

        <a href="{{ route('contact') }}" class="cta-btn">Request a Quote</a>
    </section>
@endsection
