@extends('layouts.app')
@section('content')
    <section class="contact">
        <h1>Contact SoftPeak</h1>
        <p>Have a project in mind? Reach out to the SoftPeak team—we’re here to help your business soar.</p>

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
            <p>Phone: <a href="tel:+447506015170">+44 7506 015170</a></p>
            <p>Location: Sunbury on Thames, London, UK, TW16 7TU</p>
        </div>
    </section>
@endsection
