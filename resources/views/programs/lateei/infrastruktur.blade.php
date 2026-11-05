<x-layouts::guest title="Infrastruktur Latee I Putri">

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
                            Infrastruktur — Latee I Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Sarana &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Prasarana Pesantren</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Berbagai bangunan dan fasilitas yang menunjang kegiatan pendidikan, peribadatan, dan kehidupan santri di Latee I Putri.
                    </p>
                </div>
            </div>
        </section>

        <!-- Mushalla & Gedung Utama -->
        <section class="py-20 bg-white" id="fasilitas-utama">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Fasilitas Utama</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Mushalla & Gedung</h2>
                </div>

                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1200&auto=format&fit=crop" alt="Gedung Pesantren Latee I" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Mushalla Az-Zahra' dan gedung-gedung yang menunjang aktivitas santri.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Mushalla Az-Zahra'</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Tempat multifungsi: shalat, mengaji, belajar, diskusi, dan musyawarah. Terletak di lantai dua, berdempetan dengan kamar santri, di utara blok al-Jamal, selatan blok EEC, dan di atas blok al-Hidayah.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Didirikan tahun <strong>1992</strong>, diresmikan tahun <strong>2000</strong> bertepatan satu abad Annuqayah. Luas 105,3 m², daya tampung <strong>±250 jamaah</strong>. Belum pernah direnovasi. Piket harian pagi dan sore oleh Div. Kebersihan.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Gedung Diniyah</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Diresmikan tahun <strong>2016</strong> sebagai pusat kegiatan belajar mengajar santri PPA Latee 1 dan Aula berbagai aktivitas. Terdiri dari dua lantai dengan 6 ruang.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Lantai satu: 3 ruang (2 untuk belajar, 1 untuk bermukim santri putra/bhindara abdi dhalem). Lantai dua: 3 ruang yang dijadikan satu ruang memanjang berupa Aula.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Kantor Pesantren</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Pusat administrasi PPA Latee 1. Terletak di tengah antara kantor MADAL 1 dan ruang operasional, berukuran relatif kecil.</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Kantor MADAL 1</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Pusat administrasi belajar mengajar diniyah. Terletak persis di sebelah barat kantor Pesantren, berukuran relatif kecil.</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Ruang Perpustakaan</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Berpindah-pindah mengikuti renovasi. Lokasi saat ini di lantai dasar, sebelah timur gedung koperasi, bersebelahan dengan gerbang utama. Dilengkapi 1 unit komputer.</p>
                    </div>
                    <div class="reveal delay-400 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Ruang Komunitas Santri</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Untuk kegiatan KPL, Komunitas Design & Dekorasi, dan Komunitas Daur Ulang Sampah. Terletak di sebelah barat Gedung Andalas KUC.</p>
                    </div>
                    <div class="reveal delay-500 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Ruang Multifungsi</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Berukuran 3×4, digunakan untuk rapat panitia, rapat pengurus harian, rapat KAMTIB, dan sekretariat penerimaan santri baru. Sejak Februari 2020 juga untuk fotocopy santri.</p>
                    </div>
                    <div class="reveal delay-600 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Mushalla Kotak</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Ruangan kecil 3×3 m di selatan gerbang, terkadang untuk kunjungan santri dan menerima tamu oleh pengasuh.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kamar Santri -->
        <section class="py-20 bg-slate-50" id="kamar">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Kamar Santri</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">38 Kamar di Berbagai Blok</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="reveal delay-100 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Blok Izzaty</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Bangunan timur 3 lantai, 9 kamar kapasitas 10–11 santri. Sejak 2019 khusus santri baru (awalnya di Blok An-Nur).</p>
                    </div>
                    <div class="reveal delay-200 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Blok Al-Qamary</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">2 lantai. Atas: Al-Qamary 01 (11–12 santri) berdempetan dengan kamar Cafe Latte 52. Bawah: Al-Qamary 02 (5–6 santri) berdempetan dengan Gedung Koperasi.</p>
                    </div>
                    <div class="reveal delay-300 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Blok An-Nur</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Bagian utara, 1 lantai, 5 kamar kapasitas 8–9 santri.</p>
                    </div>
                    <div class="reveal delay-400 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Blok Al-Hidayah</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Di bawah bangunan Mushalla, 6 kamar kapasitas 7–8 santri. Bekas blok Izzaty, kemudian diganti Blok Billingual.</p>
                    </div>
                    <div class="reveal delay-500 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Blok Al-Jamal</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Selatan Mushalla dan Al-Hidayah, 2 lantai, 8 kamar kapasitas 12–15 santri.</p>
                    </div>
                    <div class="reveal delay-600 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Blok NLA, EEC, MDQ, MDK, Cafe Latte 52</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">NLA: lantai 3, 3 kamar (11–12). EEC: lantai 2, 2 kamar (11–12). MDQ: lantai 1, kapasitas 7–8. MDK: lantai bawah, 7–8. Cafe Latte 52: 2 kamar (9–10).</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Fasilitas Nyaman untuk Belajar</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Dengan infrastruktur yang memadai, santri dapat fokus menuntut ilmu dan mengembangkan diri di Latee I Putri.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
