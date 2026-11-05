<x-layouts::guest title="Ketertiban & Konseling Latee II Putri">

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
                            Ketertiban & Konseling — Latee II Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        KAMTIB &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Kedisiplinan Santri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Departemen Keamanan dan Ketertiban menciptakan suasana tertib dan aman, menjaga stabilitas, dan menyelesaikan masalah dengan penuh kekeluargaan.
                    </p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Ketertiban -->
        <div class="reveal max-w-7xl mx-auto px-6 -mt-8 mb-12 relative z-10">
            <div class="overflow-hidden rounded-3xl shadow-xl border border-slate-100 h-64 md:h-96 relative group">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Ketertiban Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                    <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">KAMTIB menjaga stabilitas dan ketenteraman lingkungan Latee II Putri.</p>
                </div>
            </div>
        </div>

        <!-- Program KAMTIB -->
        <section class="py-16 bg-white" id="program">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">KAMTIB</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Program & Kebijakan</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Sosialisasi Tata Tertib</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Tindakan preventif kepada tiga objek: wali santri (saat Temu Wali), santri baru (saat BINASABA), dan santri lama (sosialisasi ke setiap kamar setelah Pembukaan Aktivitas).</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Koordinasi dengan Keamanan Daerah</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Memudahkan pengawasan santri di luar lingkungan PPA Latee II serta menjaga keamanan antar daerah dan organisasi lain.</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Rekapitulasi Kepulangan</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Mendata poin kepulangan santri (tiga poin pulang selain sakit). Berlaku juga bagi kepulangan melebihi ketentuan, terlambat kembali, tidak memperpanjang izin, atau tidak sesuai prosedur.</p>
                    </div>
                    <div class="reveal delay-400 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Rapat Evaluasi dengan Keamanan Blok</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Mendengar kritik dan aspirasi santri, menyelesaikan permasalahan, dan meminimalisir pelanggaran.</p>
                    </div>
                    <div class="reveal delay-500 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Mendata Mahram</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Santri melapor jika mempunyai mahram di Pesantren Daerah Annuqayah maupun di luar pesantren untuk dibukukan sebagai legalisasi berkunjung.</p>
                    </div>
                    <div class="reveal delay-600 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Audensi & Permohonan Maaf</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Bentuk 'penebusan' atas pelanggaran. Bersifat edukatif, konstruktif, dan menambah kesadaran diri. Contoh: menghafal doa, memahami SKIA, membersihkan lingkungan.</p>
                    </div>
                    <div class="reveal delay-700 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Prosedur Tamu/Alumni Bermalam</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Meminta izin langsung kepada Pengasuh diantar pengurus dan menitipkan alat elektronik di kantor PPA Latee II.</p>
                    </div>
                    <div class="reveal delay-800 bg-slate-50/70 border border-slate-100 rounded-3xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Drop Out</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Penonaktifan santri dari PPA Latee II yang hak patennya berada pada keputusan Pengasuh. Diberlakukan bagi pelanggaran pasal berat dan menyalahi syariat.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Lingkungan yang Aman & Mendukung</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Kami percaya ketertiban dan kepedulian adalah fondasi tumbuh kembang santri yang optimal.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
