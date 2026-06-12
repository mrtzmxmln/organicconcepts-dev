<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Brockmeyer Consulting – Strategische Finanzberatung zu transparenten Festpreisen. Kein Kleingedrucktes. Kein Provisionsmodell. Nur Ergebnisse.')">
    <title>@yield('title', 'Brockmeyer Consulting') | Brockmeyer Consulting</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark:    '#0D1B2A',
                            navy:    '#1A3A6B',
                            gold:    '#C88B2A',
                            'gold-light': '#E8A93A',
                            'gold-pale':  '#FBF3E2',
                            light:   '#F8F6F1',
                            gray:    '#6B7280',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    fontSize: {
                        '5xl':  ['3rem',    { lineHeight: '1.1' }],
                        '6xl':  ['3.75rem', { lineHeight: '1.05' }],
                        '7xl':  ['4.5rem',  { lineHeight: '1' }],
                    }
                }
            }
        }
    </script>

    <style>
        body { font-family: 'Inter', sans-serif; -webkit-font-smoothing: antialiased; }

        /* Fade-in animation */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeinup { animation: fadeInUp .6s ease both; }

        /* Gold gradient text */
        .text-gold-gradient {
            background: linear-gradient(135deg, #C88B2A 0%, #E8A93A 50%, #C88B2A 100%);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }

        /* Nav underline */
        .nav-link { position: relative; }
        .nav-link::after {
            content: ''; position: absolute; bottom: -3px; left: 0;
            width: 0; height: 2px; background: #C88B2A; transition: width .25s ease;
        }
        .nav-link:hover::after, .nav-link.active::after { width: 100%; }
    </style>

    @stack('head')
</head>
<body class="bg-white text-brand-dark antialiased">

    <!-- ===== NAVIGATION ===== -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-18 py-4">

                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-8 h-8 bg-brand-navy rounded flex items-center justify-center">
                        <span class="text-white font-bold text-sm">BC</span>
                    </div>
                    <div class="leading-tight">
                        <span class="font-black text-[15px] text-brand-dark tracking-tight">Brockmeyer</span>
                        <span class="font-black text-[15px] text-brand-navy tracking-tight"> Consulting</span>
                    </div>
                </a>

                <!-- Desktop Nav -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('leistungen') }}" class="nav-link text-sm font-medium text-brand-gray hover:text-brand-dark transition-colors {{ request()->routeIs('leistungen') ? 'active text-brand-dark' : '' }}">Leistungen</a>
                    <a href="{{ route('preise') }}" class="nav-link text-sm font-medium text-brand-gray hover:text-brand-dark transition-colors {{ request()->routeIs('preise') ? 'active text-brand-dark' : '' }}">Preise</a>
                    <a href="{{ route('netzwerk') }}" class="nav-link text-sm font-medium text-brand-gray hover:text-brand-dark transition-colors {{ request()->routeIs('netzwerk') ? 'active text-brand-dark' : '' }}">Netzwerk</a>
                    <a href="{{ route('ueber-uns') }}" class="nav-link text-sm font-medium text-brand-gray hover:text-brand-dark transition-colors {{ request()->routeIs('ueber-uns') ? 'active text-brand-dark' : '' }}">Über uns</a>
                    <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank" class="bg-brand-navy text-white text-sm font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-dark transition-colors">
                        Gespräch buchen
                    </a>
                </div>

                <!-- Mobile hamburger -->
                <button id="menu-toggle" class="md:hidden text-brand-dark p-2" aria-label="Menü öffnen">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon-open"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-6 pb-6">
            <div class="flex flex-col gap-4 pt-4">
                <a href="{{ route('leistungen') }}" class="text-sm font-medium text-brand-gray hover:text-brand-dark">Leistungen</a>
                <a href="{{ route('preise') }}" class="text-sm font-medium text-brand-gray hover:text-brand-dark">Preise</a>
                <a href="{{ route('netzwerk') }}" class="text-sm font-medium text-brand-gray hover:text-brand-dark">Netzwerk</a>
                <a href="{{ route('ueber-uns') }}" class="text-sm font-medium text-brand-gray hover:text-brand-dark">Über uns</a>
                <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank" class="bg-brand-navy text-white text-sm font-semibold px-5 py-2.5 rounded-lg text-center hover:bg-brand-dark transition-colors mt-2">
                    Gespräch buchen
                </a>
            </div>
        </div>
    </nav>

    <!-- Page content offset for fixed nav -->
    <div class="pt-[72px]">
        @yield('content')
    </div>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-brand-dark text-white mt-0">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

                <!-- Brand -->
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-8 h-8 bg-brand-navy rounded flex items-center justify-center">
                            <span class="text-white font-bold text-sm">BC</span>
                        </div>
                        <span class="font-bold text-lg">Brockmeyer Consulting</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-sm">
                        Strategische Finanzberatung zu transparenten Festpreisen.
                        Für Menschen, die ihre Zeit und ihr Geld ernst nehmen.
                    </p>
                    <div class="mt-6 flex items-center gap-4">
                        <a href="https://www.linkedin.com/in/kevin-brockmeyer/" target="_blank" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Nav -->
                <div>
                    <h4 class="text-sm font-semibold text-white mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('leistungen') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Leistungen</a></li>
                        <li><a href="{{ route('preise') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Preise</a></li>
                        <li><a href="{{ route('netzwerk') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Netzwerk</a></li>
                        <li><a href="{{ route('ueber-uns') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Über uns</a></li>
                        <li><a href="{{ route('kontakt') }}" class="text-gray-400 hover:text-white text-sm transition-colors">Kontakt</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-sm font-semibold text-white mb-4">Kontakt</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li>
                            <a href="mailto:info@brockmeyer-consulting.com" class="hover:text-white transition-colors">info@brockmeyer-consulting.com</a>
                        </li>
                        <li>
                            <a href="tel:+4917622224934" class="hover:text-white transition-colors">+49 176 22224934</a>
                        </li>
                        <li class="mt-4">
                            <a href="https://calendly.com/kevin-brockmeyer/brockmeyer-consulting-15-minuten" target="_blank" class="inline-block bg-brand-gold text-white font-semibold px-4 py-2 rounded-lg text-sm hover:bg-brand-gold-light transition-colors">
                                Erstgespräch buchen →
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 mt-12 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-gray-500">
                <p>© {{ date('Y') }} Brockmeyer Consulting e. K. · Alle Rechte vorbehalten</p>
                <div class="flex gap-6">
                    <a href="/datenschutz" class="hover:text-gray-300 transition-colors">Datenschutz</a>
                    <a href="/impressum" class="hover:text-gray-300 transition-colors">Impressum</a>
                    <a href="/erstinformation" class="hover:text-gray-300 transition-colors">Erstinformation</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile menu script -->
    <script>
        const toggle = document.getElementById('menu-toggle');
        const menu   = document.getElementById('mobile-menu');
        const iconOpen  = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    </script>

    @stack('scripts')
</body>
</html>
