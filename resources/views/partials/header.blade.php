<header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
        <a class="flex items-center gap-2.5 text-slate-900 group" href="/">
            <div class="w-9 h-9 rounded-full flex items-center justify-center text-white text-base font-bold shadow-md shadow-slate-900/10 group-hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-full h-full object-cover rounded-full">
            </div>
            <span class="font-extrabold tracking-wider text-md text-slate-900">Annuqayah Latee</span>
        </a>

        <nav class="hidden md:flex items-center gap-6 text-sm font-semibold text-slate-600">
            <!-- BERANDA -->
            <a class="{{ request()->is('/') ? 'text-brand-600' : '' }} hover:text-brand-600 relative group transition-colors flex items-center py-4" href="/">
                Beranda
                <span class="absolute bottom-3 left-0 {{ request()->is('/') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 transition-all duration-300"></span>
            </a>

            <!-- PROFIL -->
            <a class="{{ request()->is('profile') ? 'text-brand-600' : '' }} hover:text-brand-600 relative group transition-colors flex items-center py-4" href="{{ route('profile') }}">
                Profil
                <span class="absolute bottom-3 left-0 {{ request()->is('profile') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 transition-all duration-300"></span>
            </a>

            <!-- PENDAFTARAN -->
            <a class="{{ request()->is('pendaftaran') ? 'text-brand-600' : '' }} hover:text-brand-600 relative group transition-colors flex items-center py-4" href="{{ route('pendaftaran') }}">
                Pendaftaran
                <span class="absolute bottom-3 left-0 {{ request()->is('pendaftaran') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 transition-all duration-300"></span>
            </a>

            <!-- DROPDOWN LATEE PUTRA -->
            <div class="relative group">
                <button class="{{ request()->is('programs/latee/*') ? 'text-brand-600' : '' }} flex items-center gap-1 hover:text-brand-600 transition-colors py-4">
                    Latee Putra
                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span class="absolute bottom-3 left-0 {{ request()->is('programs/latee/*') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 transition-all duration-300"></span>
                </button>
                <div class="absolute top-full left-0 w-52 bg-white border border-slate-100 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden">
                    <div class="py-2">
                        <a href="{{ route('latee.programs.pendidikan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.pendidikan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Pendidikan</a>
                        <a href="{{ route('latee.programs.peribadatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.peribadatan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Peribadatan</a>
                        <a href="{{ route('latee.programs.peminatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.peminatan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Peminatan</a>
                        <a href="{{ route('latee.programs.publikasi') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.publikasi') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Publikasi</a>
                        <a href="{{ route('latee.programs.kesehatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.kesehatan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Kesehatan & Lingkungan</a>
                        <a href="{{ route('latee.programs.ketertiban') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.ketertiban') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Ketertiban & Konseling</a>
                        <a href="{{ route('latee.programs.infrastruktur') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('latee.programs.infrastruktur') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Infrastruktur</a>
                        <a href="{{ route('latee.programs.unit') }}" class="block px-4 py-2.5 text-xs transition-colors border-t border-slate-100 mt-1 pt-2 {{ request()->routeIs('latee.programs.unit') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Unit Usaha</a>
                    </div>
                </div>
            </div>

            <!-- DROPDOWN LATEE I PUTRI -->
            <div class="relative group">
                <button class="{{ request()->is('programs/lateei/*') ? 'text-brand-600' : '' }} flex items-center gap-1 hover:text-brand-600 transition-colors py-4">
                    Latee I Putri
                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span class="absolute bottom-3 left-0 {{ request()->is('programs/lateei/*') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 transition-all duration-300"></span>
                </button>
                <div class="absolute top-full left-0 w-52 bg-white border border-slate-100 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden">
                    <div class="py-2">
                        <a href="{{ route('lateei.programs.pendidikan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.pendidikan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Pendidikan</a>
                        <a href="{{ route('lateei.programs.peribadatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.peribadatan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Peribadatan</a>
                        <a href="{{ route('lateei.programs.peminatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.peminatan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Peminatan</a>
                        <a href="{{ route('lateei.programs.publikasi') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.publikasi') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Publikasi</a>
                        <a href="{{ route('lateei.programs.kesehatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.kesehatan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Kesehatan & Lingkungan</a>
                        <a href="{{ route('lateei.programs.ketertiban') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.ketertiban') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Ketertiban & Konseling</a>
                        <a href="{{ route('lateei.programs.infrastruktur') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateei.programs.infrastruktur') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Infrastruktur</a>
                        <a href="{{ route('lateei.programs.unit') }}" class="block px-4 py-2.5 text-xs transition-colors border-t border-slate-100 mt-1 pt-2 {{ request()->routeIs('lateei.programs.unit') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Unit Usaha</a>
                    </div>
                </div>
            </div>

            <!-- DROPDOWN LATEE II PUTRI -->
            <div class="relative group">
                <button class="{{ request()->is('programs/lateeii/*') ? 'text-brand-600' : '' }} flex items-center gap-1 hover:text-brand-600 transition-colors py-4">
                    Latee II Putri
                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span class="absolute bottom-3 left-0 {{ request()->is('programs/lateeii/*') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-brand-500 transition-all duration-300"></span>
                </button>
                <div class="absolute top-full left-0 w-52 bg-white border border-slate-100 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden">
                    <div class="py-2">
                        <a href="{{ route('lateeii.programs.pendidikan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.pendidikan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Pendidikan</a>
                        <a href="{{ route('lateeii.programs.peribadatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.peribadatan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Peribadatan</a>
                        <a href="{{ route('lateeii.programs.peminatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.peminatan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Peminatan</a>
                        <a href="{{ route('lateeii.programs.publikasi') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.publikasi') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Publikasi</a>
                        <a href="{{ route('lateeii.programs.kesehatan') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.kesehatan') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Kesehatan & Lingkungan</a>
                        <a href="{{ route('lateeii.programs.tata-busana') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.tata-busana') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Tata Busana</a>
                        <a href="{{ route('lateeii.programs.ketertiban') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.ketertiban') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Ketertiban & Konseling</a>
                        <a href="{{ route('lateeii.programs.infrastruktur') }}" class="block px-4 py-2.5 text-xs transition-colors {{ request()->routeIs('lateeii.programs.infrastruktur') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Infrastruktur</a>
                        <a href="{{ route('lateeii.programs.unit') }}" class="block px-4 py-2.5 text-xs transition-colors border-t border-slate-100 mt-1 pt-2 {{ request()->routeIs('lateeii.programs.unit') ? 'bg-brand-50 text-brand-600 font-semibold' : 'hover:bg-slate-50 hover:text-brand-600' }}">Unit Usaha</a>
                    </div>
                </div>
            </div>

            <!-- KONTAK -->
            <a class="{{ request()->is('contact') ? 'text-brand-600' : '' }} hover:text-brand-600 relative group transition-colors flex items-center py-4" href="{{ route('contact') }}">
                Kontak
                <span class="{{ request()->is('contact') ? 'w-full' : 'w-0 group-hover:w-full' }} absolute bottom-3 left-0 w-0 h-0.5 bg-brand-500 transition-all duration-300 group-hover:w-full"></span>
            </a>
        </nav>

        <div class="flex items-center gap-4">
            <a class="bg-slate-900 hover:bg-brand-600 hover:-translate-y-0.5 text-white text-sm font-semibold px-6 py-2.5 rounded-full transition-all duration-300 shadow-sm hover:shadow-brand-500/30" href="{{ route('login') }}">
                Login
            </a>
        </div>
    </div>
</header>
