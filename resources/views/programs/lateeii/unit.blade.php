<x-layouts::guest title="Unit Usaha Latee II Putri">

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
                            Unit Usaha — Latee II Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Koperasi Jaya<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">& Rias Manten</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Unit usaha untuk menambah pemasukan PPA Latee II dan menunjang kebutuhan santri.
                    </p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Unit Usaha -->
        <div class="reveal max-w-7xl mx-auto px-6 -mt-8 mb-12 relative z-10">
            <div class="overflow-hidden rounded-3xl shadow-xl border border-slate-100 h-64 md:h-96 relative group">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Unit Usaha" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                    <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Koperasi Jaya dan Rias Manten menjadi unit usaha andalan Latee II Putri.</p>
                </div>
            </div>
        </div>

        <!-- Koperasi Jaya -->
        <section class="py-16 bg-white" id="kopja">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Koperasi Jaya</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Kopja</h2>
                </div>

                <div class="reveal bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                    <p class="text-sm text-slate-600 leading-relaxed mb-4">Didirikan untuk menambah pemasukan PPA Latee II dan menunjang kebutuhan santri. Dengan bilik yang relatif sempit, Koperasi Jaya melengkapi kebutuhan santri: peralatan mandi, alat sekolah, peralatan makan, aksesoris perempuan, snack, dan aneka kebutuhan lainnya.</p>
                    <p class="text-sm text-slate-600 leading-relaxed mb-4">Menerima kerjasama dari alumni atau tetangga yang ingin menjual produk di pesantren, dengan prosedur: izin pengasuh, lapor ketua pengurus, hubungi pengurus koperasi, sistem bagi hasil.</p>
                    <p class="text-sm text-slate-600 leading-relaxed">Omzet cukup membantu keuangan Latee II. Setiap akhir bulan, Koperasi Jaya rutin menyetor ke bendahara PPA Latee II minimal <strong>Rp2 juta per bulan</strong>.</p>
                </div>
            </div>
        </section>

        <!-- Rias Manten -->
        <section class="py-20 bg-slate-50" id="rias-manten">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Rias Manten</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Paket Busana & Make Up</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Pengasuh PPA Latee II mewanti-wanti santri yang akan menikah agar tetap dalam bingkai syariat Islam. Salah satu imbauannya: pakaian tidak vulgar dan menutup aurat.</p>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">PPA Latee II menyediakan paket busana manten dan make up seperti wedding organizer (WO) tanpa dekorasi panggung maupun kursi manten. Ini menjadi salah satu usaha yang menambah pemasukan kas pesantren.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Santri, alumni, maupun masyarakat umum dipersilakan memakai jasa rias manten. Didukung perias ahli hasil kaderisasi turun-temurun di Latee II.</p>
                    </div>
                    <div class="reveal-right bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                        <h3 class="text-xl font-bold mb-4">Rincian Biaya</h3>
                        <ul class="space-y-2 text-sm text-brand-50">
                            <li class="flex justify-between border-b border-white/10 py-1"><span>Make up wajah</span><span>Rp150.000</span></li>
                            <li class="flex justify-between border-b border-white/10 py-1"><span>Sepaket baju pasutri (gaun lama)</span><span>Rp250.000</span></li>
                            <li class="flex justify-between border-b border-white/10 py-1"><span>Sepaket baju pasutri (gaun baru)</span><span>Rp350.000</span></li>
                            <li class="flex justify-between border-b border-white/10 py-1"><span>Make up lengkap + gaun + melati (lama)</span><span>Rp650.000</span></li>
                            <li class="flex justify-between border-b border-white/10 py-1"><span>Make up lengkap + gaun + melati (baru)</span><span>Rp800.000</span></li>
                            <li class="flex justify-between border-b border-white/10 py-1"><span>Ganti baju pasutri</span><span>Rp200.000</span></li>
                            <li class="flex justify-between border-b border-white/10 py-1"><span>Ganti make up</span><span>Rp150.000</span></li>
                            <li class="flex justify-between py-1"><span>Melati pasutri</span><span>Rp250.000 – Rp300.000</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Dukung Kemandirian Ekonomi Pesantren</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Jadilah bagian dari ekosistem kewirausahaan Latee II Putri yang melahirkan generasi mandiri dan amanah.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
