<header class="sticky top-0 z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-100 dark:border-slate-800 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

        {{-- Logo --}}
        <a class="flex items-center gap-2.5 text-slate-900 dark:text-white group" href="/">
            <div class="w-9 h-9 rounded-full flex items-center justify-center text-white text-base font-bold shadow-md shadow-slate-900/10 dark:shadow-brand-500/20 group-hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-full h-full object-cover rounded-full">
            </div>
            <span class="font-extrabold tracking-wider text-md">Annuqayah Latee</span>
        </a>

        {{-- Navigation --}}
        <nav class="hidden md:flex items-center gap-6 text-sm font-semibold text-slate-600 dark:text-slate-300">

            {{-- BERANDA --}}
            <a class="{{ request()->is('/') ? 'text-brand-600 dark:text-brand-400' : '' }} hover:text-brand-600 dark:hover:text-brand-400 relative group transition-colors flex items-center py-4" href="/">
                Beranda
                <span class="absolute bottom-3 left-0 {{ request()->is('/') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
            </a>

            {{-- PROFIL --}}
            <a class="{{ request()->is('profile') ? 'text-brand-600 dark:text-brand-400' : '' }} hover:text-brand-600 dark:hover:text-brand-400 relative group transition-colors flex items-center py-4" href="{{ route('profile') }}">
                Profil
                <span class="absolute bottom-3 left-0 {{ request()->is('profile') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
            </a>

            {{-- PENDAFTARAN --}}
            <a class="{{ request()->is('pendaftaran') ? 'text-brand-600 dark:text-brand-400' : '' }} hover:text-brand-600 dark:hover:text-brand-400 relative group transition-colors flex items-center py-4" href="{{ route('pendaftaran') }}">
                Pendaftaran
                <span class="absolute bottom-3 left-0 {{ request()->is('pendaftaran') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
            </a>

            {{-- DROPDOWN LATEE PUTRA --}}
            <div class="relative group">
                <button class="{{ request()->is('programs/latee/*') ? 'text-brand-600 dark:text-brand-400' : '' }} flex items-center gap-1 hover:text-brand-600 dark:hover:text-brand-400 transition-colors py-4">
                    Latee Putra
                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span class="absolute bottom-3 left-0 {{ request()->is('programs/latee/*') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
                </button>
                <div class="absolute top-full left-0 w-52 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden">
                    <div class="py-2">
                        <a href="{{ route('latee.programs.pendidikan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.pendidikan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Pendidikan</a>
                        <a href="{{ route('latee.programs.peribadatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.peribadatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Peribadatan</a>
                        <a href="{{ route('latee.programs.peminatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.peminatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Peminatan</a>
                        <a href="{{ route('latee.programs.publikasi') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.publikasi') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Publikasi</a>
                        <a href="{{ route('latee.programs.kesehatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.kesehatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Kesehatan & Lingkungan</a>
                        <a href="{{ route('latee.programs.ketertiban') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.ketertiban') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Ketertiban & Konseling</a>
                        <a href="{{ route('latee.programs.infrastruktur') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.infrastruktur') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Infrastruktur</a>
                        <a href="{{ route('latee.programs.unit') }}" class="block px-4 py-2.5 text-xs transition-colors border-t border-slate-100 dark:border-slate-800 mt-1 pt-2 {{ request()->routeIs('latee.programs.unit') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Unit Usaha</a>
                    </div>
                </div>
            </div>

            {{-- DROPDOWN LATEE I PUTRI --}}
            <div class="relative group">
                <button class="{{ request()->is('programs/lateei/*') ? 'text-brand-600 dark:text-brand-400' : '' }} flex items-center gap-1 hover:text-brand-600 dark:hover:text-brand-400 transition-colors py-4">
                    Latee I Putri
                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span class="absolute bottom-3 left-0 {{ request()->is('programs/lateei/*') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
                </button>
                <div class="absolute top-full left-0 w-52 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden">
                    <div class="py-2">
                        <a href="{{ route('lateei.programs.pendidikan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.pendidikan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Pendidikan</a>
                        <a href="{{ route('lateei.programs.peribadatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.peribadatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Peribadatan</a>
                        <a href="{{ route('lateei.programs.peminatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.peminatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Peminatan</a>
                        <a href="{{ route('lateei.programs.publikasi') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.publikasi') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Publikasi</a>
                        <a href="{{ route('lateei.programs.kesehatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.kesehatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Kesehatan & Lingkungan</a>
                        <a href="{{ route('lateei.programs.ketertiban') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.ketertiban') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Ketertiban & Konseling</a>
                        <a href="{{ route('lateei.programs.infrastruktur') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.infrastruktur') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Infrastruktur</a>
                        <a href="{{ route('lateei.programs.unit') }}" class="block px-4 py-2.5 text-xs transition-colors border-t border-slate-100 dark:border-slate-800 mt-1 pt-2 {{ request()->routeIs('lateei.programs.unit') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Unit Usaha</a>
                    </div>
                </div>
            </div>

            {{-- DROPDOWN LATEE II PUTRI --}}
            <div class="relative group">
                <button class="{{ request()->is('programs/lateeii/*') ? 'text-brand-600 dark:text-brand-400' : '' }} flex items-center gap-1 hover:text-brand-600 dark:hover:text-brand-400 transition-colors py-4">
                    Latee II Putri
                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span class="absolute bottom-3 left-0 {{ request()->is('programs/lateeii/*') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
                </button>
                <div class="absolute top-full left-0 w-52 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden">
                    <div class="py-2">
                        <a href="{{ route('lateeii.programs.pendidikan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.pendidikan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Pendidikan</a>
                        <a href="{{ route('lateeii.programs.peribadatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.peribadatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Peribadatan</a>
                        <a href="{{ route('lateeii.programs.peminatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.peminatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Peminatan</a>
                        <a href="{{ route('lateeii.programs.publikasi') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.publikasi') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Publikasi</a>
                        <a href="{{ route('lateeii.programs.kesehatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.kesehatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Kesehatan & Lingkungan</a>
                        <a href="{{ route('lateeii.programs.tata-busana') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.tata-busana') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Tata Busana</a>
                        <a href="{{ route('lateeii.programs.ketertiban') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.ketertiban') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Ketertiban & Konseling</a>
                        <a href="{{ route('lateeii.programs.infrastruktur') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.infrastruktur') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Infrastruktur</a>
                        <a href="{{ route('lateeii.programs.unit') }}" class="block px-4 py-2.5 text-xs transition-colors border-t border-slate-100 dark:border-slate-800 mt-1 pt-2 {{ request()->routeIs('lateeii.programs.unit') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400' }}">Unit Usaha</a>
                    </div>
                </div>
            </div>

            {{-- KONTAK --}}
            <a class="{{ request()->is('contact') ? 'text-brand-600 dark:text-brand-400' : '' }} hover:text-brand-600 dark:hover:text-brand-400 relative group transition-colors flex items-center py-4" href="{{ route('contact') }}">
                Kontak
                <span class="absolute bottom-3 left-0 {{ request()->is('contact') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
            </a>
        </nav>

        {{-- Actions: Theme Toggle + Login --}}
        <div class="flex items-center gap-3">

            {{-- ============================================ --}}
            {{-- THEME TOGGLE BUTTON                          --}}
            {{-- ============================================ --}}
            <button
                type="button"
                x-data
                @click="$flux.appearance = document.documentElement.classList.contains('dark') ? 'light' : 'dark'"
                class="relative inline-flex h-9 w-9 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-600 shadow-sm transition-all duration-300 hover:scale-105 hover:bg-slate-50 hover:text-brand-600 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-brand-300/50 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700 dark:hover:text-brand-400 dark:focus:ring-brand-500/40"
                aria-label="Ubah tema"
                title="Ubah tema"
            >
                {{-- Sun icon (tampil di light mode) --}}
                <svg class="h-4 w-4 dark:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>
                {{-- Moon icon (tampil di dark mode) --}}
                <svg class="hidden h-4 w-4 dark:block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </button>

            {{-- LOGIN --}}
            <flux:button variant="primary" color="slate" size="base" href="{{ route('login') }}">
                Login
            </flux:button>
        </div>
    </div>
</header>
