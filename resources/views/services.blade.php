@extends('layouts.app')
@section('content')
    <section class="services">
        <h1>Our Services</h1>
        <p>SoftPeak delivers tailored software solutions with a proven track record in ERP, PSP, and e-commerce integrations. We combine technical expertise with a deep understanding of the UK market to create tools that empower your business to thrive in a digital-first world. Our team is committed to delivering solutions that are not only functional but also future-proof, ensuring your business stays ahead of the curve. Explore our comprehensive range of services below and discover how we can help you achieve your goals with technology that works.</p>

        <div class="service-item">
            <img src="{{ asset('images/custom-software.jpg') }}" alt="Custom Software Development" class="service-image">
            <h2>Custom Software Development</h2>
            <p>Every business has unique needs, and off-the-shelf software often fails to deliver the flexibility and efficiency required to stay competitive. At SoftPeak, we specialize in PHP-driven custom software development, creating solutions like ERPs with integrated POS systems that deliver measurable results—such as a 2.5x productivity boost for invoicing workflows, as seen with our work for Britain Tech Ltd. Our process is thorough and collaborative: we start with an in-depth consultation to understand your goals, followed by detailed planning, design, and development phases. We use modern frameworks and best practices to ensure your software is secure, scalable, and easy to maintain. Post-launch, we provide ongoing support to keep your system running smoothly. From CRMs and inventory management tools to bespoke workflow automation platforms, SoftPeak builds software that aligns perfectly with your business objectives, helping you streamline operations, reduce costs, and drive growth.</p>
        </div>

        <div class="service-item">
            <img src="{{ asset('images/app-development.jpg') }}" alt="App Development" class="service-image">
            <h2>App Development</h2>
            <p>In today’s mobile-first world, a high-quality app can be a game-changer for your business. SoftPeak develops scalable web and mobile applications with a focus on performance, security, and exceptional user experience. Our team has extensive experience with API integrations, having worked on projects for platforms like BackMarket and merchant systems at ZoftPay, ensuring seamless connectivity between your app and third-party services. We support iOS, Android, and cross-platform frameworks, allowing you to reach your audience wherever they are. Our development process covers every stage—from ideation, wireframing, and prototyping to coding, rigorous testing, and deployment. We also prioritize responsive design, ensuring your app looks and performs flawlessly across devices. Whether you’re launching a customer-facing app to boost engagement, an e-commerce platform to drive sales, or an internal tool to improve team productivity, SoftPeak delivers solutions that engage users, enhance your brand, and support your long-term business growth.</p>
        </div>

        <div class="service-item">
            <img src="{{ asset('images/consulting.jpg') }}" alt="Tech Consulting" class="service-image">
            <h2>Tech Consulting</h2>
            <p>Technology can be a powerful enabler, but only if leveraged correctly. SoftPeak offers comprehensive tech consulting services to help UK businesses navigate their digital transformation journey with confidence. With over a decade of freelancing experience and hands-on expertise in live server management, we provide strategic guidance on system architecture, software integration, and process optimization. Our consulting services include in-depth technology audits to identify inefficiencies, roadmap planning to align tech with your business goals, and implementation support to ensure a smooth transition. We’ve helped clients adopt new tools, optimize existing systems, and implement automation solutions—like task automation bots for Excel and other platforms—that save time and reduce errors. Whether you’re a small business looking to modernize operations or a larger enterprise planning a major tech overhaul, SoftPeak is your trusted partner for actionable insights, practical solutions, and long-term success in the UK market.</p>
        </div>

        <div class="service-item">
            <img src="{{ asset('images/api-integration.jpg') }}" alt="API Integration" class="service-image">
            <h2>API Integration Services</h2>
            <p>Seamless connectivity is the backbone of modern software systems, and SoftPeak excels in delivering robust API integration solutions. We have a proven track record of integrating with platforms like BackMarket and managing complex merchant and vendor API connections, as demonstrated in our work with ZoftPay. Our team ensures your software communicates effortlessly with third-party services, enabling features like real-time data syncing, payment processing, and e-commerce functionality. We handle the full integration lifecycle—planning, development, testing, and monitoring—to guarantee reliability and performance. Whether you need to connect your app to a payment gateway, integrate with a CRM, or build a custom API for your own platform, SoftPeak delivers secure, efficient, and scalable solutions that enhance your software’s capabilities and improve user experience.</p>
        </div>

        <div class="service-item">
            <img src="{{ asset('images/automation.jpg') }}" alt="Automation Solutions" class="service-image">
            <h2>Automation Solutions</h2>
            <p>Manual processes can slow down your business and lead to costly errors. SoftPeak offers automation solutions to streamline your operations and boost efficiency. Drawing from a decade of freelancing experience, we’ve built task automation bots for Excel and other software, helping clients save time and focus on what matters most. Our automation services cover a wide range of needs: from automating repetitive data entry tasks to creating web scraping bots in Python for market research, we design tools that work for you. We also specialize in workflow automation within larger systems, such as integrating automated invoicing into ERPs or setting up real-time notifications for your team. By reducing manual workloads, SoftPeak helps you cut costs, improve accuracy, and free up your team to focus on strategic growth initiatives.</p>
        </div>

        <div class="service-cta">
            <h2>Ready to Transform Your Business?</h2>
            <p>At SoftPeak, we’re more than just a software company—we’re your partner in innovation. Our comprehensive services are designed to address your unique challenges and help you achieve your business goals with technology that delivers real results. Contact us today to discuss your project, request a quote, or schedule a consultation with our team. Let’s build something extraordinary together.</p>
            <a href="{{ route('contact') }}" class="cta-btn">Get in Touch</a>
        </div>
    </section>
@endsection
