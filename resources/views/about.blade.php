@extends('layouts.app')
@section('content')
    <section class="about">
        <h1>About SoftPeak</h1>
        <p>SoftPeak is a London-based software company founded in 2025, dedicated to empowering UK businesses through innovative technology solutions. From our office in Sunbury on Thames, we combine deep technical expertise with a passion for problem-solving to deliver software that drives efficiency, growth, and success. Our team is committed to understanding the unique challenges faced by businesses in the UK market, ensuring every project we undertake is tailored to meet specific needs and deliver measurable results. Whether you’re a startup looking to digitize operations or an established company seeking to modernize your tech stack, SoftPeak is here to help you reach new heights.</p>

        <div class="about-team">
            <img src="{{ asset('images/about-team.jpg') }}" alt="SoftPeak Team" class="team-image">
            <h2>Our Founder</h2>
            <p>Haleem Ziad, a versatile PHP developer with a Bachelors in Economics (University of Karachi, 2019) and Level 3 Networking & Cybersecurity training (NCC London, 2024–present), leads SoftPeak. With a career spanning roles at Britain Tech Ltd. (where he developed an ERP with POS system) and ZoftPay (where he built PSP software), Haleem brings a wealth of experience to the company. Since starting as a freelancer in 2015, he has worked on diverse projects, including POS systems, web scraping bots in Python, and task automation tools. His commitment to continuous learning and exceeding client expectations shapes SoftPeak’s culture of innovation. Connect with Haleem on <a href="https://github.com/haleem24">GitHub</a> and <a href="https://www.linkedin.com/in/haleemshahhs">LinkedIn</a>.</p>
        </div>

        <h2>Our Mission</h2>
        <p>At SoftPeak, our mission is to deliver smart, scalable software that solves real-world problems and sparks growth for UK businesses. We believe technology should be an enabler, not a barrier, which is why we focus on creating solutions that are intuitive, reliable, and future-ready. By staying at the forefront of industry trends and continuously refining our skills, we ensure our clients receive the highest quality service and outcomes that exceed expectations.</p>

        <h2>Why Choose SoftPeak?</h2>
        <ul>
            <li><strong>Proven Impact:</strong> We’ve delivered results like 2.5x productivity gains for clients, helping them streamline operations and achieve their goals.</li>
            <li><strong>UK Focus:</strong> Based in London, we understand the local market and its unique demands, ensuring solutions that resonate with UK businesses.</li>
            <li><strong>Tech Versatility:</strong> Our expertise spans PHP, Python, cloud hosting, and more, allowing us to tackle a wide range of challenges.</li>
            <li><strong>Client-Centric Approach:</strong> We prioritize your needs, working closely with you to deliver software that aligns with your vision and drives success.</li>
        </ul>

        <p>Ready to reach your peak? Let’s connect and explore how SoftPeak can support your business.</p>
        <a href="{{ route('contact') }}" class="cta-btn">Get in Touch</a>
    </section>
@endsection
