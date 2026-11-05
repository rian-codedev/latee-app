<x-layouts::guest title="Infrastruktur Latee II Putri">

    @include('partials.header')

    <main>
        <!-- Page Hero -->
        <section class="relative w-full py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center">
            <div class="relative w-full max-w-[1400px] min-h-[300px] md:min-h-[350px] rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl bg-white border border-slate-100 bg-texture-noise">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-slate-50/50"></div>
                    <div class="absolute top-0 -left-20 w-[400px] h-[400px] bg-brand-300/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse-glow"></div>
                    <div class="absolute -bottom-40 right-0 w-[400px] h-[400px] bg-teal-300/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse-glow" style="animation-delay: 2s;"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent"></div>
                </div>
                <div class="relative z-30 w-full px-8 md:px-16 py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 uppercase bg-white/80 backdrop-blur-md px-4 py-2 rounded-full shadow-sm border border-brand-100">
                            Infrastruktur — Latee II Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Sarana &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Prasarana Pesantren</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Musalla multifungsi, kantor pesantren, dan kantor MADAL II yang menunjang kegiatan santri.
                    </p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Infrastruktur -->
        <div class="reveal max-w-7xl mx-auto px-6 -mt-8 mb-12 relative z-10">
            <div class="overflow-hidden rounded-3xl shadow-xl border border-slate-100 h-64 md:h-96 relative group">
                <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1200&auto=format&fit=crop" alt="Gedung Pesantren Latee II" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                    <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Musalla multifungsi dan gedung-gedung yang menunjang aktivitas santri Latee II Putri.</p>
                </div>
            </div>
        </div>

        <!-- Musalla -->
        <section class="py-16 bg-white" id="musalla">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Musalla</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Pusat Aktivitas Multifungsi</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Hampir seluruh aktivitas, baik program pesantren maupun 6 lembaga, dilaksanakan di musalla PPA Latee II. Musalla multifungsi: tempat ubudiyah, halaqah ilmiyah, dan seluruh kegiatan yang membutuhkan ruangan menampung ±300 orang.</p>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Acara seperti pentas seni 6 lembaga, muhadlarah siswa dan mahasiswa, lomba HIMADAL II, nonton bersama, munaqasyah, rapat evaluasi, dan sebagainya.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Keterbatasan utama: tidak mampu menampung seluruh santri saat acara besar (Maulid Nabi, Haflah Nishfu Sanah, dll). Alternatifnya memakai Halaman MA Putri.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Letak Geografis & Pengelolaan</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Musalla tepat berada di tengah bangunan kamar santri: utara blok al-Faradis, barat blok al-Qudusy dan al-Mahfudzy, timur kamar mandi tamu.</p>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Blok lantai dasar mudah menjangkau musalla; blok lantai dua/tiga kesulitan saat aktivitas harian (sering tidak dapat tempat karena penuh). Pengurus Peribadatan membagi giliran tiap blok untuk berjamaah di musalla, sementara yang lain di 6 lembaga.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Kebersihan musalla menjadi tugas seluruh santri: dipiketi oleh 5 santri dari tiap kamar, dikoordinir pengurus Kebersihan PPA Latee II.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kantor -->
        <section class="py-20 bg-slate-50" id="kantor">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Kantor</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Kantor Pesantren & MADAL II</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="reveal delay-100 bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Kantor Pesantren</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Pusat seluruh administrasi pesantren, rental komputer, dan posko pengunjung. Terletak di bagian paling utara batas PPA Latee II, utara blok al-Qamary, tepat di belakang dhalem Pengasuh.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Dua ruang dipisah dinding triplek, ukurannya relatif kecil untuk setidaknya tiga aktivitas sekaligus. Satu ruang lebih kecil khusus penyimpanan berkas, data, dan keperluan kepengurusan.</p>
                    </div>
                    <div class="reveal delay-200 bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Kantor MADAL II</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Sebagai lembaga pendidikan independen, madrasah diniyah memerlukan kantor sebagai pusat administrasi dan penyimpanan data. Terletak di lantai dasar depan serambi musalla, tepat di bawah tangga menuju lantai dua.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Strategis karena di depannya menjadi jalan lalu-lalang santri, dekat dengan kamar-kamar santri di lantai dasar sekitar area musalla. Memiliki dua ruang saling berhadapan dan satu serambi dengan serambi depan musalla.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Fasilitas Nyaman untuk Belajar</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Dengan infrastruktur yang memadai, santri dapat fokus menuntut ilmu dan mengembangkan diri di Latee II Putri.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
