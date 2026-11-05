<x-layouts::guest title="Program Unit Usaha">

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
                            Program Unit Usaha
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Kemandirian Ekonomi<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Jiwa Kewirausahaan Santri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Unit-unit usaha yang dikelola sepenuhnya oleh santri aktif sebagai ikhtiar kemandirian finansial pesantren, sekaligus laboratorium praktik kewirausahaan yang berlandaskan prinsip syariah.
                    </p>
                </div>
            </div>
        </section>

        <!-- Filosofi -->
        <section class="py-16 bg-white" id="filosofi">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal bg-brand-600 text-white rounded-3xl p-8 md:p-12 shadow-xl shadow-brand-500/20">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-2xl sm:text-3xl font-bold mb-4">Lebih dari Sekadar Berdagang</h2>
                            <p class="text-sm text-brand-50 leading-relaxed mb-4">Unit usaha di Annuqayah Latee bukan sekadar sumber pemasukan. Ia adalah ruang belajar bagi santri untuk mengembangkan keterampilan manajerial, keuangan, dan pelayanan, sambil menerapkan nilai-nilai Islam seperti <em>amanah</em> (dapat dipercaya) dan <em>'adl</em> (keadilan).</p>
                            <p class="text-sm text-brand-50 leading-relaxed">Seluruh operasional—dari manajer hingga karyawan—dijalankan oleh santri aktif, menjadikan setiap unit sebagai praktik nyata pendidikan kewirausahaan.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white/10 rounded-2xl p-4 text-center border border-white/20">
                                <span class="block text-2xl font-black">5</span>
                                <span class="text-xs text-brand-100">Unit Usaha</span>
                            </div>
                            <div class="bg-white/10 rounded-2xl p-4 text-center border border-white/20">
                                <span class="block text-2xl font-black">100%</span>
                                <span class="text-xs text-brand-100">Dikelola Santri</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Daftar Unit Usaha -->
        <section class="py-20 bg-slate-50" id="daftar-unit">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Unit Usaha</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">A Latee Business Units</h2>
                    <p class="text-slate-500 text-sm max-w-xl mx-auto mt-2">Lima unit usaha yang melayani kebutuhan santri dan masyarakat sekitar pesantren.</p>
                </div>

                <!-- GAMBAR UTAMA SECTION -->
                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Unit Usaha Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Unit usaha dikelola sepenuhnya oleh santri aktif sebagai laboratorium kewirausahaan syariah.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- A Latee Store -->
                    <div class="reveal-left delay-100 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">A Latee Store</h3>
                                <p class="text-[11px] font-semibold text-brand-600 uppercase tracking-wide">Perdagangan Ritel</p>
                            </div>
                            <span class="bg-brand-50 text-brand-700 text-[10px] font-bold px-3 py-1 rounded-full border border-brand-100">Main Player</span>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Menyediakan segala jenis barang kebutuhan santri, mulai dari peralatan MCK, aneka snack, alat tulis, hingga buku-buku bacaan. Terletak di sebelah barat halaman utama pesantren, persis di utara rayon Al-Ghazali. Dikelola oleh seorang manajer dan seorang karyawan, keduanya santri aktif.</p>
                        <div class="flex items-center gap-2 text-xs text-slate-500 bg-slate-50 p-3 rounded-xl border border-slate-100">
                            <svg class="w-4 h-4 text-brand-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Posisi strategis di tengah pesantren, mudah dijangkau dari seluruh rayon.</span>
                        </div>
                    </div>

                    <!-- A Latee Canteen -->
                    <div class="reveal-right delay-200 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">A Latee Canteen</h3>
                                <p class="text-[11px] font-semibold text-brand-600 uppercase tracking-wide">Konsumsi & Kuliner</p>
                            </div>
                            <span class="bg-amber-50 text-amber-700 text-[10px] font-bold px-3 py-1 rounded-full border border-amber-100">Tertua</span>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Bangunan sederhana namun bersejarah—merupakan unit usaha tertua di antara yang lain, hanya mengalami pemugaran tanpa mengubah bentuk asli. Menyediakan snack, softdrink, hingga aneka sarapan seperti nasi bungkus. Ditenagai seorang manajer dan seorang karyawan, seluruhnya santri aktif. Terletak di barat A Latee Store, selatan gedung diniyah bagian barat.</p>
                    </div>

                    <!-- A Latee Warna -->
                    <div class="reveal-left delay-300 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">A Latee Warna</h3>
                                <p class="text-[11px] font-semibold text-brand-600 uppercase tracking-wide">Warung Nasi</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Didirikan atas dasar keluhan santri akibat jauh dan lamanya waktu mengantre hanya untuk membeli nasi. Kini menyediakan kebutuhan makan santri, dari nasi pecel hingga lalapan ayam. Ditenagai satu manajer dan empat pramusaji, semuanya santri aktif. Terletak di utara dapur umum, merupakan bagian belakang dari A Latee Canteen.</p>
                    </div>

                    <!-- A Latee Printing -->
                    <div class="reveal-right delay-400 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">A Latee Printing</h3>
                                <p class="text-[11px] font-semibold text-brand-600 uppercase tracking-wide">Percetakan & Kreatif</p>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Melayani segala kebutuhan percetakan: cetak banner, print offset, sablon, hingga cinderamata seperti piala dan gantungan kunci. Dipimpin seorang manajer dan lima karyawan, seluruhnya santri aktif. Terletak di sebelah timur halaman utama pesantren, diapit bangunan rayon As-Syafi'ie.</p>
                    </div>

                    <!-- A Latee Dotcom -->
                    <div class="reveal-left delay-500 lg:col-span-2 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">A Latee Dotcom</h3>
                                <p class="text-[11px] font-semibold text-brand-600 uppercase tracking-wide">Jasa Digital</p>
                            </div>
                            <span class="bg-sky-50 text-sky-700 text-[10px] font-bold px-3 py-1 rounded-full border border-sky-100">Termuda</span>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Unit usaha termuda yang bergerak di bidang penawaran jasa. Didirikan atas dasar kebutuhan santri—terutama yang berstatus mahasiswa—akan jasa pengetikan, internet, serta kebutuhan lain yang berkaitan dengan komputer. Ditenagai seorang manajer dan seorang operator, dengan total 5 komputer (1 untuk operator, 4 untuk client). Terletak persis di sebelah barat kantor pesantren.</p>
                        <div class="grid grid-cols-3 gap-3 mt-4">
                            <div class="bg-slate-50 rounded-xl p-3 text-center border border-slate-100">
                                <span class="block text-sm font-bold text-slate-800">5</span>
                                <span class="text-[10px] text-slate-500">Unit Komputer</span>
                            </div>
                            <div class="bg-slate-50 rounded-xl p-3 text-center border border-slate-100">
                                <span class="block text-sm font-bold text-slate-800">2</span>
                                <span class="text-[10px] text-slate-500">Personel</span>
                            </div>
                            <div class="bg-slate-50 rounded-xl p-3 text-center border border-slate-100">
                                <span class="block text-sm font-bold text-slate-800">Jasa</span>
                                <span class="text-[10px] text-slate-500">Pengetikan & Internet</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Belajar Berwirausaha Sejak Dini</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Jadilah bagian dari ekosistem kewirausahaan pesantren yang melahirkan generasi mandiri, amanah, dan profesional.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
