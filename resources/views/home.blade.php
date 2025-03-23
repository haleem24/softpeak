@extends('layouts.app')
@section('content')
    <section class="hero">
        <img src="{{ asset('images/hero-bg.jpg') }}" alt="Tech Background" class="hero-bg">
        <div class="hero-content">
            <h1>Elevate Your Business with SoftPeak Solutions</h1>
            <p>Innovative software tailored for the UK market, designed to streamline operations, enhance user experiences, and drive measurable growth for businesses of all sizes.</p>
            <a href="{{ route('contact') }}" class="cta-btn">Get Started</a>
        </div>
    </section>

    <section class="services-teaser">
        <div>
            <img src="{{ asset('images/custom-software.jpg') }}" alt="Custom Software" class="service-icon">
            <h3>Custom Software</h3>
            <p>At SoftPeak, we specialize in building bespoke ERP and POS systems from the ground up. Our solutions are designed to address your unique business challenges, delivering efficiency gains. Whether you’re a startup or an established enterprise, we create software that scales with your ambitions, ensuring seamless integration and long-term reliability.</p>
        </div>
        <div>
            <img src="{{ asset('images/app-development.jpg') }}" alt="App Development" class="service-icon">
            <h3>App Development</h3>
            <p>We craft scalable web and mobile applications that stand out in today’s competitive digital landscape. With expertise in seamless API integrations for e-commerce and payment platforms, SoftPeak ensures your app is fast, secure, and user-friendly. From initial concept to deployment, we focus on delivering solutions that engage your audience and support your business goals, whether you’re targeting iOS, Android, or cross-platform users.</p>
        </div>
        <div>
            <img src="{{ asset('images/consulting.jpg') }}" alt="Consulting" class="service-icon">
            <h3>Consulting</h3>
            <p>Navigating the tech landscape can be complex, but SoftPeak is here to help. Our consulting services provide expert guidance on strategy, system optimization, and automation, backed by years of experience managing live servers and delivering impactful solutions. We work closely with you to understand your needs, offering tailored advice to maximize your tech investments and position your business for future success in the UK market.</p>
        </div>
    </section>

    <section class="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonial">
            <p>"SoftPeak transformed our invoicing process with a seamless ERP solution that integrated perfectly with our existing systems. The result? A faster, smarter workflow that saved us countless hours and improved our accuracy. Their team was professional, responsive, and truly understood our needs as a growing UK business."</p>
            <span>— ERP Client</span>
        </div>
        <div class="testimonial">
            <p>"Working with SoftPeak was a game-changer for our e-commerce platform. Their API integrations streamlined our operations, allowing us to scale effortlessly while maintaining a smooth user experience. We couldn’t be happier with the results and their ongoing support."</p>
            <span>— E-Commerce Client</span>
        </div>
    </section>
@endsection
