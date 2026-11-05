<x-layouts::guest title="Publikasi & Perpustakaan Latee I Putri">

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
                            Publikasi & Perpustakaan — Latee I Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Literasi &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Media Publikasi</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Divisi Informasi dan Publikasi mengurus Perpustakaan Latee 1 serta mengembangkan wawasan, potensi, kreativitas, minat baca, dan literasi santri.
                    </p>
                </div>
            </div>
        </section>

        <!-- Div. Info-Pub -->
        <section class="py-20 bg-white" id="info-pub">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Div. Info-Pub</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Media Publikasi Umum</h2>
                </div>

                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Literasi dan Publikasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Divisi Informasi dan Publikasi mengelola perpustakaan dan media publikasi santri.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Mading Blok</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Kegiatan mingguan bergilir oleh semua blok sesuai jadwal Div. Info-Pub, dilaksanakan satu kali selama periode dan dilombakan. Tema bebas untuk mengukur kreasi dan wawasan santri. Rubrik wajib: artikel, opini, sal-red, berita, resensi, cerpen, dan puisi.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Majalah MADINA</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Majalah Madrasah Diniyah Annuqayah Latee 1 yang digagas oleh pengasuh K.H. Abd. Basith Abdullah Sajjad, BA. Ditulis oleh tenaga pengajar Madal 1 serta siswa dan partisipan.</p>
                        <p class="text-xs text-slate-500">Rubrik: Sal-Red, Fokus Utama, Opini, Kata Mereka, Keannuqayahan, Kajian Keislaman, Renungan, Pesan Kiai, Sambutan Pengasuh, Seni & Sastra, Resensi, Kata Alumni, Album Latee 1, Kosa-Kata Bahasa Madura Halus.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Cafe Latte 52 — Mading Karya</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Diterbitkan setiap dua minggu, berisi karya sajak, cerpen, prosa, dan puisi member secara bergantian.</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Cafe Latte 52 — Buletin Latte 52</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Awalnya selebaran karya member. Sejak 2016 bertransformasi menjadi buletin sastra berisi cerpen, puisi, esai sastra, dan komentar cerpen.</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">NLA — Mading Al-Laihah</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Diterbitkan setiap minggu secara bergantian setiap kamar di NLA. Rubrik bebas ditentukan kamar masing-masing.</p>
                    </div>
                    <div class="reveal delay-400 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">EEC — Mading</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Diupdate setiap minggu dengan rubrik sal-red, opini, puisi, humor, cerpen, artikel, translite, album kegiatan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Perpustakaan -->
        <section class="py-20 bg-slate-50" id="perpustakaan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Perpustakaan</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Gerakan Literasi Santri</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="reveal delay-100 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Gerakan Ayo Membaca</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Diadakan setiap dua minggu dengan model berbeda: pertanyaan terbuka tentang isu surat kabar, permintaan pendapat buku yang ingin dibaca, dan penentuan santri paling sering berkunjung ke perpustakaan untuk mendapat penghargaan.</p>
                    </div>
                    <div class="reveal delay-200 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Diskusi Internal</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Kegiatan mingguan khusus pengurus perpustakaan dengan mengundang santri senior untuk membahas isu surat kabar atau topik pesantren yang menarik.</p>
                    </div>
                    <div class="reveal delay-300 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Tukar Pijam Buku</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Tukar pinjam buku dengan Perpustakaan Daerah atau perpustakaan pesantren lain untuk penyegaran bahan bacaan santri.</p>
                    </div>
                    <div class="reveal delay-400 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Lomba Menulis</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Dilaksanakan sekali dalam satu periode untuk menambah wawasan dan mengembangkan bakat menulis santri, baik untuk santri Latee 1 maupun santri luar.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Jadilah Bagian dari Tradisi Literasi</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Kembangkan kemampuan menulismu dan berkontribusi dalam media publikasi Latee I Putri.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
