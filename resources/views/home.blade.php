@extends('layouts.app')
@section('content')
    <section class="hero">
        <h1>Elevate Your Business with SoftPeak Solutions</h1>
        <p>Innovative software tailored for the UK market</p>
        <a href="{{ route('contact') }}" class="cta-btn">Get Started</a>
    </section>

    <section class="services-teaser">
        <div>
            <h3>Custom Software</h3>
            <p>Bespoke ERP and POS systems built from scratch, proven to boost productivity by 2.5x for clients in invoicing workflows.</p>
        </div>
        <div>
            <h3>App Development</h3>
            <p>Scalable web and mobile apps with seamless API integrations, designed for e-commerce and payment platforms.</p>
        </div>
        <div>
            <h3>Consulting</h3>
            <p>Expert guidance on tech strategy and automation, backed by years of live server and system optimization experience.</p>
        </div>
    </section>

    <section class="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonial">
            <p>"SoftPeak transformed our invoicing with a seamless ERP solution—faster and smarter."</p>
            <span>— Britain Tech Ltd.</span>
        </div>
    </section>
@endsection
