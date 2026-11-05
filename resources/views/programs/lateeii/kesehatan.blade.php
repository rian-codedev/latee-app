<x-layouts::guest title="Kesehatan & Lingkungan Hidup Latee II Putri">

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
                            Kesehatan & Lingkungan — Latee II Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Sehat Jasmani<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Lingkungan Asri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Langkah nyata meningkatkan kesadaran hidup sehat dan peka terhadap hal-hal yang membahayakan diri serta lingkungan sekitar.
                    </p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Kesehatan -->
        <div class="reveal max-w-7xl mx-auto px-6 -mt-8 mb-12 relative z-10">
            <div class="overflow-hidden rounded-3xl shadow-xl border border-slate-100 h-64 md:h-96 relative group">
                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Kesehatan Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                    <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Senam santri dan pembuatan jamu tradisional menjadi program rutin Departemen Kesehatan.</p>
                </div>
            </div>
        </div>

        <!-- Kesehatan -->
        <section class="py-16 bg-white" id="kesehatan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Kesehatan</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Program Kesehatan</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Senam Santri</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Diadakan di depan musalla setiap Jumat setelah kerja bakti. Format digilir per blok, wajib bagi blok tertentu dan boleh bagi blok lain. Bertujuan menjaga kesehatan dan kebugaran tubuh.</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Pembuatan Jamu Tradisional</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Mengolah kunyit, jahe, dan temu lawak menjadi ekstrak jamu tumbuk kering siap saji. Wajib dan bergiliran setiap blok, bahan mentah 1–2 kg setiap pembuatan. Dilaksanakan setiap Jumat pagi.</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Penyuluhan Kesehatan</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Kegiatan rutin tahunan dengan mengundang pembicara ahli sesuai tema. Topik: kesehatan reproduksi, kebersihan diri dan lingkungan, hingga kecantikan diri.</p>
                    </div>
                    <div class="reveal delay-400 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Kontrol Kebersihan Kuku</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Setiap setengah bulan, lebih sering menjelang sekolah dan liburan. Santri dilarang memanjangkan kuku kecuali satu jari. Pewarnaan kuku (henna/kutek) tidak diperbolehkan kecuali untuk menikah.</p>
                    </div>
                    <div class="reveal delay-500 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Penanaman TOGA</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Tanaman Obat Keluarga untuk memenuhi dan memudahkan santri mendapatkan obat herbal siap saji seperti kunyit, daun beluntas, dan cocor bebek.</p>
                    </div>
                    <div class="reveal delay-600 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Obat Tradisional & Generik</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Menyediakan obat herbal, tradisional, dan generik untuk penanganan pertama sebelum dirujuk ke ponkestren atau puskesmas. Jenis obat disesuaikan keluhan umum. Tersedia kotak P3K untuk luka.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-slate-50">
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
