@extends('layouts.app')
@section('content')
    <section class="contact">
        <img src="{{ asset('images/contact-bg.jpg') }}" alt="Contact Background" class="contact-bg">
        <div class="contact-content">
            <h1>Contact SoftPeak</h1>
            <p>Have a project in mind? Whether you’re looking to build a custom software solution, develop a mobile app, or seek expert tech consulting, the SoftPeak team is here to help your business soar. We’re passionate about turning your ideas into reality with technology that works seamlessly and delivers lasting value. Reach out today to discuss your needs, and let’s start building something great together.</p>

            @if (session('success'))
                <p class="success">{{ session('success') }}</p>
            @endif

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="cta-btn">Send Message</button>
            </form>

            <div class="contact-details">
                <p>Email: <a href="mailto:info@softpeak.co.uk">info@softpeak.co.uk</a></p>
                <p>Phone: <a href="tel:+447506015170">+44 7506 015170</a> (Available Monday to Friday, 9 AM to 5 PM GMT)</p>
                <p>Location: Sunbury on Thames, London, UK - conveniently located to serve businesses across the UK</p>
            </div>
        </div>
    </section>
@endsection
