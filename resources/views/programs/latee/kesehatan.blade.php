<x-layouts::guest title="Kesehatan dan Lingkungan Hidup">

    @include('partials.header')

    <main>
        <!-- Hero Section -->
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
                            Program Kesehatan & Lingkungan Hidup
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Sehat Jasmani<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Lingkungan Asri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Komitmen Annuqayah Latee dalam menjaga kesehatan santri dan melestarikan lingkungan hidup melalui program preventif, kuratif, dan partisipatif.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section Kesehatan -->
        <section class="py-20 bg-white" id="kesehatan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Kesehatan</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Pelayanan & Pola Hidup Sehat</h2>
                    <p class="text-slate-500 text-sm mt-2 max-w-3xl">Dalam upaya meningkatkan kesadaran hidup sehat dan peka terhadap hal-hal yang membahayakan diri serta lingkungan sekitar, PPA Latee memiliki serangkaian langkah nyata. Komitmen memberikan pelayanan terbaik bagi seluruh santri menjadi prioritas utama.[reference:0]</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Senam Santri -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Senam Santri</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Diadakan di depan musala setiap Jumat pagi setelah kerja bakti. Formatnya digilir per blok; wajib bagi blok yang mendapat giliran, dan terbuka bagi blok lain. Bertujuan menjaga kebugaran dan kesehatan tubuh.[reference:1]</p>
                    </div>

                    <!-- Jamu Tradisional -->
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Pembuatan Jamu Tradisional</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Mengolah kunyit, jahe, dan temu lawak menjadi ekstrak jamu tumbuk kering siap saji agar lebih awet. Di Latee II, pembuatan bersifat wajib dan bergiliran setiap blok dengan bahan 1–2 kg per pekan. Di Latee I, kegiatan ini berlangsung tiga kali setahun dan menyediakan jamu stamina, temu lawak, serta nona wangi.[reference:2][reference:3]</p>
                    </div>

                    <!-- Penyuluhan Kesehatan -->
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Penyuluhan Kesehatan</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Kegiatan rutin tahunan dengan mengundang pembicara ahli sesuai tema. Topik yang pernah dibahas meliputi kesehatan reproduksi, kebersihan diri dan lingkungan, hingga tema kecantikan. Tujuannya menambah wawasan dan menumbuhkan kesadaran santri akan pentingnya kesehatan.[reference:4]</p>
                    </div>

                    <!-- Kontrol Kebersihan Kuku -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Kontrol Kebersihan Kuku</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Dilakukan setiap setengah bulan, dan lebih sering menjelang berangkat sekolah atau liburan. Santri dilarang memanjangkan kuku kecuali satu jari. Pewarnaan kuku (henna/kutek) tidak diperbolehkan kecuali untuk kepentingan menikah.[reference:5]</p>
                    </div>

                    <!-- Penanaman TOGA -->
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Penanaman TOGA</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Tanaman Obat Keluarga ditanam untuk memudahkan santri mendapatkan obat herbal siap saji seperti kunyit, daun beluntas, dan cocor bebek. Di Latee I, tanaman yang dipelihara antara lain air mata ibu, pegagan, serta sirih biasa dan sirih merah.[reference:6][reference:7]</p>
                    </div>

                    <!-- Obat Tradisional & Generik -->
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Obat Tradisional & Generik</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Menyediakan obat herbal, tradisional, dan generik untuk penanganan pertama santri sakit sebelum dirujuk ke poskestren atau puskesmas. Jenis obat disesuaikan dengan keluhan umum seperti sakit kepala, demam, sakit perut, muntaber, dan sakit gigi. Tersedia juga kotak P3K untuk luka.[reference:8][reference:9]</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Prosedur Penanganan Santri Sakit -->
        <section class="py-20 bg-slate-50" id="prosedur">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Prosedur</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Alur Penanganan Santri Sakit</h2>
                </div>

                <div class="reveal grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-100 text-center">
                        <div class="w-12 h-12 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center mx-auto mb-4 font-bold">1</div>
                        <h3 class="font-bold text-slate-900 mb-2">Penanganan Awal</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Kantor pesantren menyediakan obat tradisional, generik, dan herbal untuk diambil sesuai keluhan santri.[reference:10]</p>
                    </div>
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-100 text-center">
                        <div class="w-12 h-12 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center mx-auto mb-4 font-bold">2</div>
                        <h3 class="font-bold text-slate-900 mb-2">Rujukan ke Poskestren</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Jika dalam beberapa hari kondisi tidak membaik, santri dirujuk ke poskestren atau puskesmas terdekat. Poskestren menyediakan layanan rawat jalan dan rawat inap 24 jam.[reference:11]</p>
                    </div>
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-100 text-center">
                        <div class="w-12 h-12 rounded-full bg-brand-100 text-brand-600 flex items-center justify-center mx-auto mb-4 font-bold">3</div>
                        <h3 class="font-bold text-slate-900 mb-2">Rekomendasi Pulang</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Santri baru diperbolehkan pulang apabila seluruh prosedur telah dilalui dan kondisi sakit tetap atau semakin parah, dibuktikan dengan memo resmi dari pengurus kesehatan.[reference:12]</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Lingkungan Hidup -->
        <section class="py-20 bg-white" id="lingkungan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Lingkungan Hidup</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Kebersihan & Keindahan</h2>
                    <p class="text-slate-500 text-sm mt-2 max-w-3xl">Kebersihan erat kaitannya dengan kesehatan dan merupakan sebagian dari iman. Hubungan baik antara manusia dan lingkungan adalah wujud manusia sebagai khalifah fil ardh. Oleh karena itu, pengurus membentuk Divisi Kebersihan dan Keindahan untuk menciptakan serta memelihara lingkungan yang asri.[reference:13][reference:14]</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Pilah Sampah -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Pilah Sampah Organik & Anorganik</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Pesantren menyediakan wadah khusus untuk botol plastik dan kardus. Hasil pemilahan dimanfaatkan kembali, dan keuntungannya masuk ke kas pesantren. Di Latee I, sosialisasi dilakukan agar santri membiasakan membuang sampah sesuai tempatnya.[reference:15][reference:16]</p>
                    </div>

                    <!-- Kerja Bakti -->
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Kerja Bakti</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Dilaksanakan setiap Jumat pagi untuk membersihkan seluruh lingkungan pesantren, termasuk area dhalem. Kegiatan ini dikoordinir oleh Divisi Kebersihan guna menciptakan lingkungan yang bersih dan asri.[reference:17][reference:18]</p>
                    </div>

                    <!-- Menguras Kolam & Kamar Mandi -->
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Menguras Kolam & Kamar Mandi</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Di Latee II dilakukan setiap setengah bulan, sedangkan di Latee I setiap bulan dengan melibatkan pengurus pusat dan pengurus blok. Tujuannya memelihara kebersihan bak kolam dan kamar mandi.[reference:19][reference:20]</p>
                    </div>

                    <!-- Lomba Kebersihan Kamar -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Lomba Kebersihan & Kerapian Kamar</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Bentuk apresiasi bagi santri yang konsisten menjaga kebersihan kamar. Pengontrolan dilakukan setiap Kamis (Latee II) atau secara kondisional (Latee I). Pemenang diumumkan pada penutupan aktivitas pesantren.[reference:21][reference:22]</p>
                    </div>

                    <!-- Piket Harian -->
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Piket Harian</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Setiap kamar mendapat jadwal piket untuk menyapu halaman, membuang sampah, serta membersihkan kamar mandi dan kolam. Untuk memastikan pelaksanaannya, dibentuk ‘piket keliling’ dari pengurus non-divisi kebersihan.[reference:23][reference:24]</p>
                    </div>

                    <!-- KPL (Latee I) -->
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Komunitas Peduli Lingkungan (KPL)</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Dibentuk Januari 2020 di Latee I di bawah Divisi Kebersihan dan Keindahan. Kegiatannya meliputi memilah sampah, membersihkan jalanan umum di Annuqayah Putri, dan memulung sampah di area PPA Latee I.[reference:25]</p>
                    </div>
                </div>

                <!-- Kebijakan Pengurangan Plastik -->
                <div class="reveal delay-400 mt-8 bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                    <h3 class="text-xl font-bold mb-3">Kebijakan Pengurangan Sampah Plastik</h3>
                    <p class="text-sm text-brand-50 leading-relaxed">Penanganan masalah sampah terus diupayakan melalui aturan baru: membatasi penggunaan plastik, mewajibkan membawa kotak nasi dan botol air pribadi, melarang pembalut sekali pakai, serta mengimbau santri membawa tas sendiri saat berbelanja. Semua ini demi menciptakan lingkungan yang higienis dan berkelanjutan.[reference:26]</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Wujudkan Santri Sehat, Lingkungan Lestari</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Bergabunglah dengan kami dan rasakan lingkungan pesantren yang bersih, sehat, dan mendukung tumbuh kembang santri secara optimal.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
