<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SoftPeak' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/softpeak-logo.png') }}" alt="SoftPeak Logo" class="logo">
            </a>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <img src="{{ asset('images/softpeak-logo.png') }}" alt="SoftPeak Footer Logo" class="footer-logo">
        <p>&copy; 2025 SoftPeak. All rights reserved.</p>
    </footer>
</body>
</html>
