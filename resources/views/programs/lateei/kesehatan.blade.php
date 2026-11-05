<x-layouts::guest title="Kesehatan & Lingkungan Hidup Latee I Putri">

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
                            Kesehatan & Lingkungan — Latee I Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Sehat Jasmani<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Lingkungan Asri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Pelayanan kesehatan santri dan penanaman pola hidup sehat, serta pembentukan Divisi Kebersihan dan Keindahan untuk lingkungan yang asri.
                    </p>
                </div>
            </div>
        </section>

        <!-- Kesehatan -->
        <section class="py-20 bg-white" id="kesehatan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Kesehatan</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Pelayanan & Pola Hidup Sehat</h2>
                </div>

                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Kesehatan Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Divisi Kesehatan bergerak di bidang pelayanan kesehatan santri dan penanaman pola hidup sehat.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Pembuatan Jamu Tradisional</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Dilakukan <strong>3 kali dalam satu tahun</strong> oleh Div. Kesehatan. Mengolah kunyit, jahe, dan temu lawak menjadi ekstrak jamu tumbuk kering siap saji agar lebih awet. Menyediakan jamu stamina, temu lawak, dan nona wangi.</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Penanaman & Pemeliharaan TOGA</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Tanaman obat-obatan seperti air mata ibu, cocor bebek, kunyit, pegagan, daun sirih biasa, dan sirih merah.</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Obat Tradisional & Generik</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Menyediakan obat herbal, tradisional, dan generik sesuai keluhan (sakit perut, kepala, gigi). Juga menyediakan P3K untuk luka sebelum dirujuk ke Ponkestren atau Puskesmas.</p>
                    </div>
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Penanganan Kebutuhan Air</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Dilakukan setiap hari, khususnya pagi dan malam, untuk mengecek penggunaan air santri.</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Senam Santri</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Dilakukan setiap pagi, tidak diwajibkan melainkan anjuran bagi santri yang memiliki waktu senggang sebelum berangkat sekolah atau kuliah.</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Penyuluhan Kesehatan</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Dilaksanakan <strong>satu kali selama satu periode</strong> dengan harapan santri dapat menerapkan pola hidup sehat dan mengembangkan wawasan kesehatan.</p>
                    </div>
                </div>

                <div class="reveal mt-8 bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                    <h3 class="text-xl font-bold mb-3">Penanganan Santri Sakit</h3>
                    <p class="text-sm text-brand-50 leading-relaxed">Penanganan pertama dengan obat herbal, tradisional, dan generik. Apabila berlanjut, santri dihimbau periksa ke Ponkestren untuk rawat inap atau rawat jalan. Santri diperbolehkan pulang apabila belum membaik atau setelah konfirmasi dari Ponkestren kepada pengurus Div. Kesehatan.</p>
                </div>
            </div>
        </section>

        <!-- Lingkungan Hidup -->
        <section class="py-20 bg-slate-50" id="lingkungan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Lingkungan Hidup</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Kebersihan & Keindahan</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="reveal delay-100 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Memilah Sampah Organik & Anorganik</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Sosialisasi dan penyediaan tempat sampah untuk membiasakan santri meletakkan sampah sesuai tempatnya.</p>
                    </div>
                    <div class="reveal delay-200 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Menguras Kolam & Kamar Mandi</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Dilakukan <strong>setiap bulan</strong> dengan melibatkan seluruh pengurus pusat dan beberapa pengurus blok.</p>
                    </div>
                    <div class="reveal delay-300 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Kerja Bakti</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Dilaksanakan hari <strong>Jumat setelah mengaji kitab</strong>, membersihkan seluruh lingkungan termasuk dhalem, dikoordinir Div. Kebersihan.</p>
                    </div>
                    <div class="reveal delay-400 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Piket Harian</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Pagi dan sore, berlaku bagi seluruh santri: menyapu halaman blok, dhalem pengasuh, membuang sampah, membersihkan kamar mandi dan kolam.</p>
                    </div>
                    <div class="reveal delay-500 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Lomba Kebersihan & Kerapian Kamar</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Bentuk apresiasi bagi santri yang menjaga kebersihan kamar. Pengontrolan secara kondisional setiap hari.</p>
                    </div>
                    <div class="reveal delay-600 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">KPL (Komunitas Peduli Lingkungan)</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Dibentuk Januari 2020 di bawah Div. Kebersihan dan Keindahan. Kegiatan: memilah sampah, membersihkan jalanan umum Annuqayah Putri, memulung sampah di area PPA Latee 1.</p>
                    </div>
                </div>

                <div class="reveal mt-8 bg-amber-50 border border-amber-100 rounded-3xl p-6">
                    <h4 class="text-sm font-bold text-amber-800 mb-2">Kebijakan Pengurangan Plastik</h4>
                    <p class="text-xs text-amber-700 leading-relaxed">Membatasi penggunaan plastik, memakai kotak nasi dan botol air, melarang pembalut sekali pakai, membawa tas sendiri ketika belanja, dan lain sebagainya untuk menciptakan lingkungan yang higienis.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Wujudkan Santri Sehat, Lingkungan Lestari</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Bergabunglah dengan kami dan rasakan lingkungan pesantren yang bersih, sehat, dan mendukung tumbuh kembang santri.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
