@props(['title' => 'JobPulse | Where Tech Careers Ignite'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for Micro-interactions -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font: Plus Jakarta Sans for high-impact typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
        
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-16px) scale(1.04); }
        }
        .animate-float {
            animation: float-slow 8s ease-in-out infinite;
        }
        .mesh-gradient {
            background: radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.12) 0px, transparent 50%),
                        radial-gradient(at 100% 0%, rgba(236, 72, 153, 0.10) 0px, transparent 50%),
                        radial-gradient(at 50% 100%, rgba(16, 185, 129, 0.08) 0px, transparent 50%);
        }
    </style>
</head>
<body class="min-h-full flex flex-col bg-slate-950 text-slate-100 selection:bg-indigo-500 selection:text-white relative overflow-x-hidden"
      x-data="{ mobileMenu: false, scrolled: false }"
      @scroll.window="scrolled = (window.pageYOffset > 20)">

    <!-- Background Lighting & Ambient Glow -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute -top-32 left-1/4 w-96 h-96 bg-indigo-600/25 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-1/3 -right-20 w-80 h-80 bg-fuchsia-600/20 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
        <div class="absolute bottom-10 left-10 w-96 h-96 bg-cyan-600/15 rounded-full blur-3xl animate-float" style="animation-delay: -5s;"></div>
        <div class="absolute inset-0 mesh-gradient"></div>
    </div>

    <!-- Announcement Bar -->
    <div class="relative z-50 bg-linear-to-r from-indigo-900/60 via-purple-900/60 to-indigo-900/60 border-b border-indigo-500/20 py-2 px-4 backdrop-blur-md">
        <div class="max-w-7xl mx-auto flex items-center justify-center gap-2 text-xs font-semibold tracking-wide text-indigo-200 text-center">
            <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full bg-indigo-500/30 text-indigo-100 text-[10px] uppercase tracking-wider border border-indigo-400/30">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> New
            </span>
            <span>Over 350+ remote software & engineering roles dropped this week.</span>
            <a href="/job" class="underline underline-offset-4 hover:text-white transition">Browse now &rarr;</a>
        </div>
    </div>

    <!-- Sticky Glassmorphic Navbar -->
    <header class="sticky top-0 z-40 transition-all duration-300"
            :class="scrolled ? 'bg-slate-950/80 backdrop-blur-xl border-b border-slate-800 shadow-2xl shadow-indigo-950/40' : 'bg-transparent border-b border-slate-800/40'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">

                <!-- Logo & Brand -->
                <div class="flex items-center gap-10">
                    <a href="/" class="group flex items-center gap-3">
                        <div class="relative flex items-center justify-center w-11 h-11 rounded-2xl bg-linear-to-tr from-indigo-600 via-indigo-500 to-fuchsia-500 text-white shadow-lg shadow-indigo-500/30 group-hover:shadow-indigo-500/60 group-hover:scale-105 transition-all duration-300">
                            <svg class="w-6 h-6 transform group-hover:rotate-6 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xl font-extrabold tracking-tight bg-linear-to-r from-white via-slate-100 to-indigo-200 bg-clip-text text-transparent">JobPulse</span>
                            <span class="block text-[10px] font-semibold uppercase tracking-widest text-indigo-400">Careers Reimagined</span>
                        </div>
                    </a>

                    <!-- Navigation Links with Reactive Glow Indicators -->
                    <nav class="hidden md:flex items-center gap-1">
                        <a href="/" 
                           class="relative px-4 py-2 text-sm font-semibold rounded-xl transition duration-200 {{ request()->is('/') ? 'text-white bg-slate-800/80 shadow-inner shadow-slate-700/40 border border-slate-700/60' : 'text-slate-400 hover:text-white hover:bg-slate-900/60' }}">
                            Home
                            @if(request()->is('/'))
                                <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-4 h-0.5 bg-indigo-500 rounded-full shadow-[0_0_8px_#6366f1]"></span>
                            @endif
                        </a>
                        <a href="/job" 
                           class="relative px-4 py-2 text-sm font-semibold rounded-xl transition duration-200 {{ request()->is('job*') ? 'text-white bg-slate-800/80 shadow-inner shadow-slate-700/40 border border-slate-700/60' : 'text-slate-400 hover:text-white hover:bg-slate-900/60' }}">
                            Explore Jobs
                            @if(request()->is('job*'))
                                <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-4 h-0.5 bg-indigo-500 rounded-full shadow-[0_0_8px_#6366f1]"></span>
                            @endif
                        </a>
                        <a href="/about" 
                           class="relative px-4 py-2 text-sm font-semibold rounded-xl transition duration-200 {{ request()->is('about') ? 'text-white bg-slate-800/80 shadow-inner shadow-slate-700/40 border border-slate-700/60' : 'text-slate-400 hover:text-white hover:bg-slate-900/60' }}">
                            About Us
                        </a>
                        <a href="/contact" 
                           class="relative px-4 py-2 text-sm font-semibold rounded-xl transition duration-200 {{ request()->is('contact') ? 'text-white bg-slate-800/80 shadow-inner shadow-slate-700/40 border border-slate-700/60' : 'text-slate-400 hover:text-white hover:bg-slate-900/60' }}">
                            Support
                        </a>
                    </nav>
                </div>

                <!-- Right Action Cluster -->
                <div class="flex items-center gap-3">
                    
                    <!-- Primary Call to Action -->
                    <a href="/job" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wider text-white bg-linear-to-r from-indigo-600 via-indigo-500 to-purple-600 hover:from-indigo-500 hover:to-purple-500 shadow-lg shadow-indigo-600/30 hover:shadow-indigo-500/50 hover:-translate-y-0.5 active:translate-y-0 transition duration-200">
                        <span>Post Opening</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>

                    <!-- User Profile Badge -->
                    <div class="flex items-center gap-2.5 pl-3 border-l border-slate-800">
                        <div class="w-10 h-10 rounded-xl bg-linear-to-tr from-slate-800 to-slate-700 border border-slate-600/60 flex items-center justify-center font-bold text-sm text-indigo-300 shadow-md">
                            {{ strtoupper(substr($name ?? 'Z', 0, 1)) }}
                        </div>
                    </div>

                    <!-- Mobile Menu Hamburger -->
                    <button @click="mobileMenu = !mobileMenu" class="md:hidden p-2 text-slate-400 hover:text-white hover:bg-slate-900 rounded-xl transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer -->
        <div x-show="mobileMenu" x-cloak class="md:hidden bg-slate-900/95 border-b border-slate-800 px-4 pt-3 pb-6 space-y-2 backdrop-blur-xl">
            <a href="/" class="block px-4 py-2.5 rounded-xl text-sm font-semibold {{ request()->is('/') ? 'bg-indigo-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">Home</a>
            <a href="/job" class="block px-4 py-2.5 rounded-xl text-sm font-semibold {{ request()->is('job*') ? 'bg-indigo-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">Explore Jobs</a>
            <a href="/about" class="block px-4 py-2.5 rounded-xl text-sm font-semibold {{ request()->is('about') ? 'bg-indigo-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">About Us</a>
            <a href="/contact" class="block px-4 py-2.5 rounded-xl text-sm font-semibold {{ request()->is('contact') ? 'bg-indigo-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">Contact Us</a>
        </div>
    </header>

    <!-- Main Dynamic Content -->
    <main class="relative z-10 flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-10">
        {{ $slot }}
    </main>

    <!-- Elevated Footer with Glowing Elements -->
    <footer class="relative z-10 border-t border-slate-900/80 bg-slate-950/80 backdrop-blur-md mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center text-white font-black text-sm">
                        ⚡
                    </div>
                    <span class="text-sm font-bold text-slate-300">JobPulse Network</span>
                    <span class="text-xs text-slate-600">&bull; Built for High-Performance Teams</span>
                </div>
                <div class="flex gap-6 text-xs text-slate-400 font-medium">
                    <a href="/" class="hover:text-indigo-400 transition">Explore Positions</a>
                    <a href="/about" class="hover:text-indigo-400 transition">About Company</a>
                    <a href="/contact" class="hover:text-indigo-400 transition">Support Center</a>
                </div>
                <p class="text-xs text-slate-500">&copy; {{ date('Y') }} All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>