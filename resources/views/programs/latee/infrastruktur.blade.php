<x-layouts::guest title="Program Infrastruktur">

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
                            Program Infrastruktur
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Sarana Prasarana<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Pendukung Pendidikan</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Pembangunan dan pemeliharaan infrastruktur pesantren untuk menciptakan lingkungan belajar yang nyaman, aman, dan kondusif bagi seluruh santri.
                    </p>
                </div>
            </div>
        </section>

        <!-- Gambaran Umum -->
        <section class="py-20 bg-white" id="gambaran-umum">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Gambaran Umum</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Perkembangan Infrastruktur</h2>
                    <p class="text-slate-500 text-sm mt-2 max-w-3xl">Sejak didirikan pada tahun 1923, Pondok Pesantren Annuqayah Latee terus berbenah. Dari areal tanah seluas 2,5 hektare pada tahun 1978, kini pesantren telah berkembang pesat dengan berbagai fasilitas fisik yang menunjang kegiatan pendidikan dan peribadatan santri.</p>
                </div>

                <!-- GAMBAR UTAMA SECTION -->
                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1200&auto=format&fit=crop" alt="Gedung dan Fasilitas Pesantren" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Pembangunan dan pemeliharaan infrastruktur untuk kenyamanan belajar santri.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 text-center hover:shadow-lg transition-all duration-300">
                        <span class="text-3xl font-black text-brand-600">14 Ha</span>
                        <p class="text-xs text-slate-500 mt-1">Luas Areal Pesantren</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 text-center hover:shadow-lg transition-all duration-300">
                        <span class="text-3xl font-black text-brand-600">525</span>
                        <p class="text-xs text-slate-500 mt-1">Asrama Santri</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 text-center hover:shadow-lg transition-all duration-300">
                        <span class="text-3xl font-black text-brand-600">100</span>
                        <p class="text-xs text-slate-500 mt-1">Ruang Kelas</p>
                    </div>
                    <div class="reveal delay-400 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 text-center hover:shadow-lg transition-all duration-300">
                        <span class="text-3xl font-black text-brand-600">9</span>
                        <p class="text-xs text-slate-500 mt-1">Mushalla</p>
                    </div>
                </div>
                <p class="text-[10px] text-slate-400 mt-4 text-center">*Data berdasarkan sumber pustaka dan dokumen pesantren.</p>
            </div>
        </section>

        <!-- Fasilitas Utama -->
        <section class="py-20 bg-slate-50" id="fasilitas">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Fasilitas</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Sarana & Prasarana</h2>
                    <p class="text-slate-500 text-sm max-w-xl mx-auto mt-2">Berbagai fasilitas yang tersedia untuk mendukung aktivitas belajar, ibadah, dan kehidupan sehari-hari santri.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="reveal delay-100 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Asrama Santri</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Terdapat 525 asrama santri yang tersebar di berbagai rayon, menyediakan tempat tinggal yang nyaman dan mendukung pembinaan karakter serta kemandirian santri.</p>
                    </div>

                    <div class="reveal delay-200 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Ruang Kelas & Madrasah Diniyah</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Tersedia 100 ruang kelas untuk kegiatan belajar mengajar formal dan diniyah. Madrasah Diniyah Annuqayah Latee (MADAL) memiliki ruang khusus, termasuk gedung dua lantai untuk menampung kegiatan pembelajaran kitab kuning.</p>
                    </div>

                    <div class="reveal delay-300 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Masjid & Mushalla</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Terdapat dua masjid jamik dan sembilan mushalla yang menjadi pusat kegiatan ubudiyah, salat berjamaah, dan berbagai aktivitas keagamaan santri.</p>
                    </div>

                    <div class="reveal delay-100 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Perpustakaan</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Perpustakaan pesantren menyediakan berbagai koleksi kitab kuning, buku umum, dan media publikasi yang dikelola oleh divisi terkait, mendukung literasi dan riset santri.</p>
                    </div>

                    <div class="reveal delay-200 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Balai Kesehatan</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Satu unit balai kesehatan (poskestren) yang memberikan layanan kesehatan dasar, penanganan pertama, hingga rujukan bagi santri yang membutuhkan perawatan lebih lanjut.</p>
                    </div>

                    <div class="reveal delay-300 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Kantor & Administrasi</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Tersedia ruang kantor untuk pengelolaan pesantren, madrasah, dan berbagai divisi, termasuk ruang tamu, dapur, dan gudang untuk mendukung operasional harian.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rencana Pengembangan -->
        <section class="py-20 bg-white" id="pengembangan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Pengembangan</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Arah Pembangunan ke Depan</h2>
                </div>

                <div class="reveal grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                        <h3 class="text-xl font-bold mb-3">Peningkatan Kualitas Fasilitas</h3>
                        <p class="text-sm text-brand-50 leading-relaxed">Pesantren terus berupaya meningkatkan kualitas infrastruktur, termasuk pembangunan gedung madrasah diniyah dua lantai dan perluasan masjid, sebagaimana yang telah dilakukan melalui dukungan para alumni.</p>
                    </div>
                    <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Dukungan Pemerintah & Mitra</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Berbagai bantuan dari pemerintah dan mitra terus mengalir untuk pengembangan sarana pendidikan dan pelayanan santri, seperti bantuan pendidikan senilai Rp100 juta dari Kementerian Agama RI. Sinergi ini menjadi bukti komitmen bersama dalam memajukan pendidikan pesantren.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Infrastruktur Nyaman untuk Belajar</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Dengan fasilitas yang memadai, santri dapat fokus menuntut ilmu dan mengembangkan diri. Bergabunglah bersama kami.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
