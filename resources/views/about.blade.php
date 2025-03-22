@extends('layouts.app')
@section('content')
    <section class="about">
        <h1>About SoftPeak</h1>
        <p>SoftPeak is a London-based software company founded in 2025, dedicated to pushing UK businesses to new heights through technology. From Sunbury on Thames, we blend innovation with practicality.</p>

        <h2>Our Founder</h2>
        <p>Haleem Ziad, a versatile PHP developer with a Bachelors in Economics (University of Karachi, 2019) and Level 3 Networking & Cybersecurity training (NCC London, 2024–present), leads SoftPeak. With experience at Britain Tech Ltd. (ERP with POS), ZoftPay (PSP software), and freelancing since 2015, Haleem drives our mission. See more on <a href="https://github.com/haleem24">GitHub</a> and <a href="https://www.linkedin.com/in/haleemshahhs">LinkedIn</a>.</p>

        <h2>Our Mission</h2>
        <p>To deliver smart, scalable software—backed by problem-solving and continuous learning—that drives real results.</p>

        <h2>Why Choose SoftPeak?</h2>
        <ul>
            <li><strong>Proven Impact:</strong> 2.5x productivity gains for clients like Britain Tech.</li>
            <li><strong>UK Focus:</strong> Based in London, tailored to local needs.</li>
            <li><strong>Tech Versatility:</strong> PHP, Python, cloud hosting, and more.</li>
        </ul>

        <p>Ready to reach your peak? Let’s connect.</p>
        <a href="{{ route('contact') }}" class="cta-btn">Get in Touch</a>
    </section>
@endsection
