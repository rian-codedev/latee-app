@php
    // ==========================================
    // SIMULASI DATA (Nanti diganti dengan $posts dari Controller)
    // ==========================================
    $posts = [
        [
            'title' => 'Musyawarah Besar (Mubes): Laporan Akhir Periode & Pemilihan Ketua',
            'slug' => 'musyawarah-besar-mubes',
            'type' => 'news',
            'category' => 'Latee Putra',
            'excerpt' => 'Sebagai bentuk tanggung jawab atas amanah kepengurusan selama satu periode, Pansus menyelenggarakan Laporan Akhir Periode masa khidmah 2024–2026.',
            'image' => 'https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=800&auto=format&fit=crop',
            'date' => '15 Mei 2026',
            'views' => 1250,
            'author' => 'A. Fiqkyy'
        ],
        [
            'title' => 'Menjadi Khadim: Refleksi Kepemimpinan Santri Annuqayah Latee',
            'slug' => 'menjadi-khadim',
            'type' => 'article',
            'category' => 'Opini',
            'excerpt' => 'Sayyid al-qaum khãdimuhum. Sebuah refleksi mendalam mengenai esensi kepemimpinan sebagai pelayanan (khadim) di lingkungan pesantren.',
            'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop',
            'date' => '10 Mei 2026',
            'views' => 890,
            'author' => 'A. Fiqkyy'
        ],
        [
            'title' => 'Pentingnya Madrasah Diniyah Sebagai Jantung Pendidikan Pesantren',
            'slug' => 'pentingnya-madrasah-diniyah',
            'type' => 'article',
            'category' => 'Pendidikan',
            'excerpt' => 'Alm. KH. Ahmad Basyir AS pernah menegaskan bahwa jika tidak mau sekolah diniyah, sebaiknya pamit saja dari Latee. Ini alasan mendalamnya.',
            'image' => 'https://images.unsplash.com/photo-1585036156171-384164a8c675?q=80&w=800&auto=format&fit=crop',
            'date' => '05 Mei 2026',
            'views' => 2100,
            'author' => 'Tim Redaksi'
        ],
        [
            'title' => 'Peringatan Haul Masyayikh ke-XX Berlangsung Khidmat',
            'slug' => 'peringatan-haul-masyayikh',
            'type' => 'news',
            'category' => 'Latee I Putri',
            'excerpt' => 'Ribuan santri dan alumni memadati area pesantren untuk mengikuti rangkaian acara haul yang dipenuhi dengan pembacaan manaqib dan tausiyah.',
            'image' => 'https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=800&auto=format&fit=crop',
            'date' => '01 Mei 2026',
            'views' => 3400,
            'author' => 'Redaksi Latee I'
        ],
        [
            'title' => 'Santri Latee Raih Juara 1 Lomba Pidato Bahasa Arab Tingkat Provinsi',
            'slug' => 'juara-pidato-bahasa-arab',
            'type' => 'news',
            'category' => 'Prestasi',
            'excerpt' => 'Prestasi membanggakan kembali ditorehkan oleh santri Pondok Pesantren Annuqayah Latee dalam ajang kompetisi bahasa tingkat Jawa Timur.',
            'image' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=800&auto=format&fit=crop',
            'date' => '28 April 2026',
            'views' => 1800,
            'author' => 'A. Fiqkyy'
        ],
        [
            'title' => 'Menumbuhkan Jiwa Kepemimpinan Santri Melalui LDK',
            'slug' => 'menumbuhkan-jiwa-kepemimpinan',
            'type' => 'article',
            'category' => 'Peminatan',
            'excerpt' => 'Latihan Dasar Kepemimpinan (LDK) menjadi wadah bagi santri untuk mengasah kemampuan manajerial, public speaking, dan kerja sama tim.',
            'image' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?q=80&w=800&auto=format&fit=crop',
            'date' => '20 April 2026',
            'views' => 950,
            'author' => 'Tim Redaksi'
        ],
    ];
@endphp

<x-layouts::guest title="Berita & Artikel">

    @include('partials.header')

    <main>
        <!-- BEGIN: Page Hero (Simplified) -->
        <section class="relative w-full py-12 md:py-20 px-4 md:px-6 overflow-hidden flex justify-center bg-white">
            <div class="relative w-full max-w-[1400px] rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl bg-white border border-slate-100 bg-texture-noise">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-slate-50/50"></div>
                    <div class="absolute top-0 -left-20 w-[400px] h-[400px] bg-brand-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse-glow"></div>
                    <div class="absolute -bottom-40 right-0 w-[400px] h-[400px] bg-brand-200/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse-glow" style="animation-delay: 2s;"></div>
                </div>
                <div class="relative z-30 w-full px-8 md:px-16 py-16 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 uppercase bg-white/80 backdrop-blur-md px-4 py-2 rounded-full shadow-sm border border-brand-100">
                            Warta Annuqayah Latee
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Berita & <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-400 animate-gradient-x text-gradient-animated">Artikel</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Informasi terkini seputar kegiatan pesantren, prestasi santri, serta tulisan reflektif dan edukatif dari para kontributor.
                    </p>
                </div>
            </div>
        </section>

        <!-- BEGIN: Filter & Search Bar -->
        <section class="sticky top-16 z-40 bg-white/90 backdrop-blur-lg border-b border-slate-200 py-4 shadow-sm">
            <div class="max-w-7xl mx-auto px-6">
                <form action="" method="GET" class="flex flex-col md:flex-row items-center justify-between gap-4">

                    <!-- Search Input -->
                    <div class="relative w-full md:w-1/3">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari berita atau artikel..." class="w-full pl-11 pr-4 py-2.5 rounded-full border border-slate-200 focus:border-brand-500 focus:ring-2 focus:ring-brand-200 outline-none transition-all text-sm bg-slate-50 focus:bg-white">
                    </div>

                    <!-- Type Filters (Pills) -->
                    <div class="flex items-center bg-slate-100 p-1 rounded-full w-full md:w-auto overflow-x-auto">
                        <a href=""
                           class="px-4 py-2 rounded-full text-xs font-bold transition-all duration-300 {{ !request('type') ? 'bg-white text-slate-900 shadow-sm' : 'text-slate-500 hover:text-slate-900' }}">
                            Semua
                        </a>
                        <a href=""
                           class="px-4 py-2 rounded-full text-xs font-bold transition-all duration-300 flex items-center gap-1.5 {{ request('type') === 'news' ? 'bg-rose-500 text-white shadow-sm' : 'text-slate-500 hover:text-rose-600' }}">
                            <span class="w-1.5 h-1.5 rounded-full bg-current"></span> Berita
                        </a>
                        <a href=""
                           class="px-4 py-2 rounded-full text-xs font-bold transition-all duration-300 flex items-center gap-1.5 {{ request('type') === 'article' ? 'bg-brand-600 text-white shadow-sm' : 'text-slate-500 hover:text-brand-600' }}">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> Artikel
                        </a>
                    </div>

                    <!-- Sort & Category Dropdowns -->
                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <select name="sort" onchange="this.form.submit()" class="w-full md:w-auto px-4 py-2.5 rounded-full border border-slate-200 focus:border-brand-500 outline-none text-xs font-semibold text-slate-700 bg-slate-50 cursor-pointer">
                            <option value="latest" {{ request('sort') === 'latest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="oldest" {{ request('sort') === 'oldest' ? 'selected' : '' }}>Terlama</option>
                            <option value="popular" {{ request('sort') === 'popular' ? 'selected' : '' }}>Terpopuler</option>
                        </select>
                        <button type="submit" class="hidden">Cari</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- BEGIN: Blog Grid -->
        <section class="py-16 bg-slate-50 min-h-screen">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    @forelse($posts as $post)
                        <!-- CARD BLOG -->
                        <article class="reveal group bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col relative">

                            <!-- Image Wrapper -->
                            <div class="relative h-56 overflow-hidden">
                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">

                                <!-- Type Badge (News vs Article) -->
                                <div class="absolute top-4 left-4">
                                    @if($post['type'] === 'news')
                                        <span class="inline-flex items-center gap-1.5 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] font-bold text-rose-600 shadow-sm border border-rose-100 uppercase tracking-wider">
                                            <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span> Berita
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1.5 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] font-bold text-brand-600 shadow-sm border border-brand-100 uppercase tracking-wider">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> Artikel
                                        </span>
                                    @endif
                                </div>

                                <!-- Category Badge -->
                                <div class="absolute bottom-4 right-4">
                                    <span class="bg-slate-900/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-medium text-white shadow-sm">
                                        {{ $post['category'] }}
                                    </span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-6 flex flex-col flex-grow">
                                <div class="flex items-center gap-2 text-[11px] font-semibold text-slate-400 mb-3">
                                    <span>{{ $post['date'] }}</span>
                                    <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                    <span class="flex items-center gap-1">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                        {{ number_format($post['views'], 0, ',', '.') }}
                                    </span>
                                </div>

                                <h2 class="text-lg font-bold text-slate-900 mb-3 line-clamp-2 group-hover:text-{{ $post['type'] === 'news' ? 'rose' : 'brand' }}-600 transition-colors">
                                    {{ $post['title'] }}
                                </h2>

                                <p class="text-xs text-slate-500 leading-relaxed mb-6 line-clamp-3">
                                    {{ $post['excerpt'] }}
                                </p>

                                <!-- Footer Card -->
                                <div class="mt-auto flex items-center justify-between pt-4 border-t border-slate-100">
                                    <span class="text-[11px] font-semibold text-slate-600 flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                        {{ $post['author'] }}
                                    </span>
                                    <a href="#" class="inline-flex items-center gap-1 text-[11px] font-bold text-slate-900 hover:text-{{ $post['type'] === 'news' ? 'rose' : 'brand' }}-600 transition-colors group/btn">
                                        Baca
                                        <svg class="w-3.5 h-3.5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @empty
                        <!-- Empty State -->
                        <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20 bg-white rounded-3xl border border-slate-100">
                            <svg class="w-16 h-16 text-slate-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h3 class="text-lg font-bold text-slate-900">Tidak ada hasil ditemukan</h3>
                            <p class="text-sm text-slate-500 mt-1">Coba ubah kata kunci atau filter pencarian Anda.</p>
                            <a href="{{ route('blog.index') }}" class="inline-block mt-4 text-sm font-semibold text-brand-600 hover:underline">Reset Filter</a>
                        </div>
                    @endforelse

                </div>

                <!-- Pagination (Simulasi) -->
                @if(count($posts) > 0)
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center gap-2">
                        <button class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-slate-50 hover:text-slate-900 transition-colors disabled:opacity-50" disabled>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </button>
                        <button class="w-10 h-10 rounded-full bg-brand-600 text-white font-bold text-sm shadow-md">1</button>
                        <button class="w-10 h-10 rounded-full border border-slate-200 text-slate-700 font-bold text-sm hover:bg-slate-50 transition-colors">2</button>
                        <button class="w-10 h-10 rounded-full border border-slate-200 text-slate-700 font-bold text-sm hover:bg-slate-50 transition-colors">3</button>
                        <button class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-700 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </nav>
                </div>
                @endif
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
