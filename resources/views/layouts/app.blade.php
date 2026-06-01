<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $meta_description ?? 'Portfolio - Full Stack Developer & Informatika' }}">
    <title>{{ $title ?? config('app.name') }} | DEV.PORTFOLIO</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Orbitron:wght@400;600;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('styles')
</head>
<body>

    {{-- Noise overlay --}}
    <div class="noise-overlay"></div>

    {{-- Grid background --}}
    <div class="grid-bg"></div>

    {{-- Scanlines --}}
    <div class="scanlines"></div>

    {{-- Terminal Cursor Follower --}}
    <div class="cursor-follower" id="cursorFollower"></div>
    <div class="cursor-dot" id="cursorDot"></div>

    {{-- NAVBAR --}}
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <span class="logo-bracket">[</span>
                <span class="logo-text">{{ config('portfolio.name_short', 'DEV') }}</span>
                <span class="logo-bracket">]</span>
                <span class="logo-blink">_</span>
            </div>

            <div class="nav-status">
                <span class="status-dot"></span>
                <span class="status-text">ONLINE</span>
            </div>

            <ul class="nav-links" id="navLinks">
                <li><a href="#home" class="nav-link" data-section="home"><span class="nav-num">01.</span>HOME</a></li>
                <li><a href="#about" class="nav-link" data-section="about"><span class="nav-num">02.</span>ABOUT</a></li>
                <li><a href="#skills" class="nav-link" data-section="skills"><span class="nav-num">03.</span>SKILLS</a></li>
                <li><a href="#projects" class="nav-link" data-section="projects"><span class="nav-num">04.</span>PROJECTS</a></li>
                <li><a href="#experience" class="nav-link" data-section="experience"><span class="nav-num">05.</span>EXPERIENCE</a></li>
                <li><a href="#contact" class="nav-link" data-section="contact"><span class="nav-num">06.</span>CONTACT</a></li>
            </ul>

            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>
        </div>
        <div class="nav-progress-bar" id="navProgress"></div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main id="mainScroll">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-matrix">
                <div class="footer-code">
                    <pre class="footer-ascii">
 ██████╗ ███████╗██╗   ██╗
 ██╔══██╗██╔════╝██║   ██║
 ██║  ██║█████╗  ██║   ██║
 ██║  ██║██╔══╝  ╚██╗ ██╔╝
 ██████╔╝███████╗ ╚████╔╝
 ╚═════╝ ╚══════╝  ╚═══╝</pre>
                </div>
                <div class="footer-info">
                    <p class="footer-sys">// SYSTEM INFO</p>
                    <p><span class="footer-label">BUILD:</span> <span class="neon-text">Laravel 11.x</span></p>
                    <p><span class="footer-label">PHP:</span> <span class="neon-text">8.3</span></p>
                    <p><span class="footer-label">STATUS:</span> <span class="maroon-text">OPERATIONAL</span></p>
                    <p><span class="footer-label">UPTIME:</span> <span class="neon-text" id="footerUptime">--:--:--</span></p>
                </div>
                <div class="footer-social">
                    <p class="footer-sys">// CONNECT</p>
                    @foreach(config('portfolio.socials', []) as $social)
                    <a href="{{ $social['url'] }}" target="_blank" class="footer-social-link">
                        <i class="{{ $social['icon'] }}"></i>
                        <span>{{ $social['label'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="footer-bottom">
                <p><span class="maroon-text">©</span> {{ date('Y') }} {{ config('portfolio.name', 'Developer') }} — Crafted with <span class="neon-text">&lt;code/&gt;</span> & ☕</p>
                <p class="footer-hash">// commit: <span class="neon-text">{{ substr(md5(now()), 0, 8) }}</span></p>
            </div>
        </div>
    </footer>

    {{-- SCROLL TO TOP --}}
    <button class="scroll-top" id="scrollTop" aria-label="Scroll to top">
        <i class="fas fa-chevron-up"></i>
    </button>

    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>