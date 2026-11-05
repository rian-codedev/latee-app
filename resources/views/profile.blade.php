<x-layouts::guest title="Profil Pesantren">

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
                            Tentang Kami
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Pondok Pesantren<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Annuqayah Latee</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Bagian integral dari Pondok Pesantren Annuqayah Guluk-Guluk Sumenep Jawa Timur, berdiri sejak tahun 1923 dan terus berkhidmat mencetak generasi Qur'ani.
                    </p>
                </div>
            </div>
        </section>

        <!-- Sejarah -->
        <section class="py-20 bg-white" id="sejarah">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Sejarah</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Jejak Langkah & Perjuangan</h2>
                </div>

                <!-- Gambar Hero Sejarah -->
                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1542816417-0983c9c9ad53?q=80&w=1200&auto=format&fit=crop" alt="Sejarah Pesantren Annuqayah Latee" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Pondok Pesantren Annuqayah Latee, bagian dari sejarah panjang pendidikan Islam di Madura.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div class="reveal-left space-y-6">
                        <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Latar Belakang</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Pondok Pesantren Annuqayah didirikan oleh K.H. Muhammad Syarqawi pada tahun 1887 M. Beliau adalah seorang ulama besar dari Kudus, Jawa Tengah, yang masih memiliki hubungan erat dengan silsilah Wali Songo, yaitu Sunan Kudus. Setelah menempuh pendidikan di Mekkah dan berbagai daerah, beliau menetap di Desa Guluk-Guluk, Sumenep, dan mendirikan Pondok Pesantren Annuqayah.
                            </p>
                        </div>
                        <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Berdirinya Latee</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Pondok Pesantren Annuqayah Latee (P2AL) didirikan oleh <strong>K.H. Abdullah Sajjad</strong> pada tahun <strong>1923</strong>. Beliau adalah salah seorang putra K.H. Muhammad Syarqawi yang paling gigih dalam perjuangan fisik melawan penjajah. Pada tahun 1947, beliau gugur sebagai syahid dalam mempertahankan negara dari agresi militer Belanda, yang menyebabkan P2AL sempat mengalami kefakuman.
                            </p>
                        </div>
                    </div>

                    <div class="reveal-right space-y-6">
                        <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Periode Kepemimpinan</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">
                                Kefakuman kepemimpinan dicoba diatasi ketika Kyai Anwar (santri kesayangan KH. Abdullah Sajjad) bersama KH. Moh. Mahfudz Husaini berusaha menjalankan kegiatan pendidikan di P2AL untuk sementara waktu.
                            </p>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Baru pada tahun <strong>1953</strong>, kepemimpinan P2AL dialihkan kepada <strong>KH. Achmad Basyir Abdullah Sajjad</strong> yang berlangsung hingga sekarang.
                            </p>
                        </div>
                        <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Perkembangan Pendidikan</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Pada tahun-tahun pertama, kegiatan pendidikan di P2AL masih sangat sederhana, mengikuti metode konvensional tradisi pesantren seperti pengajian Al-Qur'an, pengajian kitab kuning dengan metode sorogan dan wetonan. Embrio sistem pendidikan ini kemudian dimapankan dengan tetap mempertahankan tradisi keilmuan pesantren klasik, seperti <strong>Madrasah Diniyah Annuqayah Latee (MADAL)</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi & Misi -->
        <section class="py-20 bg-slate-50" id="visi-misi">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Visi & Misi</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Arah & Tujuan Pendidikan</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Visi -->
                    <div class="reveal-left bg-brand-600 text-white rounded-3xl p-8 md:p-12 shadow-xl shadow-brand-500/20 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold mb-4">Visi</h3>
                        <p class="text-lg md:text-xl font-semibold text-brand-50 leading-relaxed italic">
                            "Kesalehan perilaku dan keunggulan mutu."
                        </p>
                    </div>

                    <!-- Misi -->
                    <div class="reveal-right bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-slate-100">
                        <h3 class="text-2xl font-bold text-slate-900 mb-6">Misi</h3>
                        <ul class="space-y-4 text-sm text-slate-600">
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">1</span>
                                <span>Meningkatkan pendidikan yang menghasilkan alumnus sesuai dengan visi.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">2</span>
                                <span>Mengembangkan tradisi kelimuan pesantren dan program pendidikan yang melayani santri dari berbagai daerah.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">3</span>
                                <span>Mewujudkan nilai-nilai keislaman sesuai dengan manhaj salafi.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Struktur Kepengasuhan -->
        <section class="py-20 bg-white" id="struktur">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Struktur</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Tiga Kompleks Kepengasuhan</h2>
                    <p class="text-slate-500 text-sm max-w-xl mx-auto mt-2">Pondok Pesantren Annuqayah Latee saat ini terbagi menjadi tiga kompleks yang masing-masing dipimpin oleh pengasuh.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Latee Putra -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-12 h-12 rounded-2xl bg-brand-100 text-brand-600 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Latee Putra</h3>
                        <p class="text-xs font-semibold text-brand-600 uppercase tracking-wide mb-3">Pengasuh: KH. Abd. A'la</p>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Kompleks putra dengan sistem kepengasuhan kolektif. Saat ini dihuni oleh lebih dari <strong>1.251 santri</strong> dari berbagai daerah di Indonesia.</p>
                        <div class="bg-white rounded-xl p-3 border border-slate-200 text-xs text-slate-500">
                            <strong>Rayon:</strong> Darul Lughah, Al-Ghazali, Al-Bukhari, Al-Farisi, As-Syafi'ie, dan EAL.
                        </div>
                    </div>

                    <!-- Latee I Putri -->
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-12 h-12 rounded-2xl bg-brand-100 text-brand-600 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Latee I Putri</h3>
                        <p class="text-xs font-semibold text-brand-600 uppercase tracking-wide mb-3">Pengasuh: KH. A. Basith AS</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Kompleks putri yang diasuh oleh KH. A. Basith AS, dibantu oleh putra-putri dan menantu beliau. Menyelenggarakan berbagai program pendidikan dan amaliah khusus santri putri.</p>
                    </div>

                    <!-- Latee II Putri -->
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-12 h-12 rounded-2xl bg-brand-100 text-brand-600 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Latee II Putri</h3>
                        <p class="text-xs font-semibold text-brand-600 uppercase tracking-wide mb-3">Pengasuh: Nyai Umamah Makkiyah</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Kompleks putri yang diasuh oleh Nyai Umamah Makkiyah, dibantu oleh putra-putri dan menantu beliau. Memiliki program unggulan di bidang keagamaan dan pengembangan diri.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistik Singkat -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-3xl p-8 text-center border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300">
                        <span class="block text-4xl font-black text-brand-600 tracking-tight">1923</span>
                        <span class="text-sm font-bold text-slate-800 mt-2">Tahun Berdiri</span>
                    </div>
                    <div class="bg-white rounded-3xl p-8 text-center border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300">
                        <span class="block text-4xl font-black text-brand-600 tracking-tight">3</span>
                        <span class="text-sm font-bold text-slate-800 mt-2">Kompleks</span>
                    </div>
                    <div class="bg-white rounded-3xl p-8 text-center border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300">
                        <span class="block text-4xl font-black text-brand-600 tracking-tight">1.251+</span>
                        <span class="text-sm font-bold text-slate-800 mt-2">Santri Putra</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Menjadi Bagian dari Sejarah Kami</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Bergabunglah bersama ribuan santri yang telah menimba ilmu dan membentuk karakter di Pondok Pesantren Annuqayah Latee.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
