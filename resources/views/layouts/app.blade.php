<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>CleanEarth — @yield('title', 'Waste Management Solutions')</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />

    {{-- App CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    {{-- Page-specific head content --}}
    @stack('styles')
</head>
<body>

    {{-- ══════════════════════════════════════════
         NAVIGATION
    ══════════════════════════════════════════ --}}
    <nav class="navbar">
        <a class="nav-logo" href="{{ route('home') }}">
            Clean<span>Earth</span>
        </a>

        <div class="nav-links">
            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>
            <a href="{{ route('about') }}"
               class="{{ request()->routeIs('about') ? 'active' : '' }}">
                About
            </a>
            <a href="{{ route('solutions') }}"
               class="{{ request()->routeIs('solutions') ? 'active' : '' }}">
                Solutions
            </a>
            <a href="{{ route('awareness') }}"
               class="{{ request()->routeIs('awareness') ? 'active' : '' }}">
                Awareness
            </a>
            <a href="{{ route('contact') }}"
               class="nav-cta {{ request()->routeIs('contact') ? 'active' : '' }}">
                Contact Us
            </a>
        </div>
    </nav>

    {{-- ══════════════════════════════════════════
         MAIN CONTENT (each page fills this)
    ══════════════════════════════════════════ --}}
    <main class="page-wrapper">
        @yield('content')
    </main>

    {{-- ══════════════════════════════════════════
         FOOTER
    ══════════════════════════════════════════ --}}
    <footer class="site-footer">
        <div class="footer-grid">

            <div class="footer-brand">
                <a class="footer-logo" href="{{ route('home') }}">
                    Clean<span>Earth</span>
                </a>
                <p>A student research project on waste segregation, responsible disposal,
                   and improved sanitation systems — building a blueprint for sustainable
                   community health.</p>
            </div>

            <div class="footer-col">
                <h5>Pages</h5>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('solutions') }}">Solutions</a></li>
                    <li><a href="{{ route('awareness') }}">Awareness</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Solutions</h5>
                <ul>
                    <li><a href="{{ route('solutions') }}#segregation">Waste Segregation</a></li>
                    <li><a href="{{ route('solutions') }}#disposal">Disposal Methods</a></li>
                    <li><a href="{{ route('solutions') }}#sanitation">Sanitation Systems</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Resources</h5>
                <ul>
                    <li><a href="https://sdgs.un.org/goals/goal6" target="_blank">UN SDG Goal 6</a></li>
                    <li><a href="https://www.who.int/health-topics/sanitation" target="_blank">WHO Guidelines</a></li>
                    <li><a href="https://www.unep.org" target="_blank">UNEP Reports</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span class="copy">
                &copy; {{ date('Y') }} CleanEarth Project — Environmental Studies Class Project
            </span>
            <div class="badges">
                <span class="badge">🌿 Eco Conscious</span>
                <span class="badge">♻️ Sustainable</span>
                <span class="badge">🎓 Academic Research</span>
            </div>
        </div>
    </footer>

    {{-- App JS --}}
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- Page-specific scripts --}}
    @stack('scripts')
</body>
</html>
