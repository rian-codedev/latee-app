<x-layouts::guest title="Peribadatan Latee I Putri">

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
                            Peribadatan — Latee I Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Ubudiyah &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Amaliah Harian</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Divisi Ubudiyah menjadi tombak pengarahan 'amaliyah-fiqhiyah santri, mengatur sholat, mengaji, berwudhu, dan bersuci dengan panduan SKIA.
                    </p>
                </div>
            </div>
        </section>

        <!-- Hadiran 5 Waktu -->
        <section class="py-20 bg-white" id="hadiran">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Ubudiyah</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Hadiran 5 Waktu</h2>
                </div>

                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1584286595398-a59f21d313f5?q=80&w=1200&auto=format&fit=crop" alt="Santri Latee I Beribadah" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Shalat berjamaah di Mushalla Az-Zahra', diimami oleh pengasuh dan terkadang pengurus.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                        <h3 class="text-xl font-bold mb-3">Kewajiban Hadiran</h3>
                        <p class="text-sm text-brand-50 leading-relaxed">Setiap santri wajib berjama'ah setiap shalat fardhu. Shalat berjamaah atau <strong>hadiran</strong> diprogramkan sebagai bagian kegiatan Div. Ubudiyah yang paling pokok. Santri yang tidak mengikuti akan dikenai sanksi sesuai tata tertib, kecuali yang telah meminta izin karena berhalangan (udzur). Pelaksanaan di <strong>Mushalla Az-Zahra'</strong> diimami oleh pengasuh dan terkadang pengurus.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Khatmil Quran</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Kegiatan mingguan wajib bagi seluruh santri pada <strong>malam Selasa</strong>. Dibentuk kelompok mengaji, setiap kelompok terdiri dari 10–11 santri dengan target 2 juz. Dilaksanakan setelah shalat Isya' berjamaah secara bergantian sesuai jadwal kelompok.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rutinitas Malam Jumat -->
        <section class="py-20 bg-slate-50" id="malam-jumat">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Rutinitas</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Malam Jum'at</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="reveal delay-100 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Shalawat Diba'</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Pembacaan syair-syair sanjungan kepada Rasulullah SAW menggunakan Kitab Maulid ad-Diba'. Dipimpin oleh pengurus secara bergantian.</p>
                    </div>
                    <div class="reveal delay-200 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Burdah</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Pembacaan syair pujian kepada Nabi yang terdiri dari 160 bait dalam Qashidah Burdah.</p>
                    </div>
                    <div class="reveal delay-300 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Tahlil</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Mendoakan para pendahulu kepada Allah SWT agar selalu dalam lindungan-Nya.</p>
                    </div>
                    <div class="reveal delay-400 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-slate-900 mb-2">Shalat Tasbih Bersama</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Dilaksanakan sebulan sekali pada malam Jum'at legi, dipimpin pengurus bergantian. Awalnya khusus kelas I MA/SMA, kini mulai kelas IX MTs.</p>
                    </div>
                    <div class="reveal delay-500 bg-white rounded-3xl p-6 border border-slate-100 shadow-sm md:col-span-2">
                        <h4 class="font-bold text-slate-900 mb-2">Siraman Rohani</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Kegiatan rutin yang sangat dinanti santri. Pada malam Jum'at yang dijadwalkan, seluruh santri duduk di teras dhalem pengasuh untuk mendengarkan siraman rohani. Diisi oleh K.H. Muqsith Idris, Nyai Fikriyah Basith, atau K. Ainul Haq di aula Madal 1.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SKIA & Amaliah Lain -->
        <section class="py-20 bg-white" id="skia">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">SKIA & Amaliah</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Praktik & Menghafal SKIA</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Pelaksanaan SKIA</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Dilaksanakan dari <strong>Jumat sampai Rabu</strong>. Berbeda dengan Latee Putra dan Latee II, format SKIA di Latee I berbentuk <strong>praktik dan sistem menghafal</strong> untuk semua tingkatan pendidikan.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Praktik pada bab shalat, wudhu', najis, dan tayammum. Menghafal do'a-do'a, tahlil, dan a'malul yaumiyah. Setiap pembimbing memiliki 6–8 santri didik.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Ujian Munaqasyah SKIA</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Dilaksanakan setiap tahun oleh Div. Ubudiyah untuk menguji pemahaman santri yang telah selesai menghafal SKIA.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Terdiri dari <strong>4 penguji</strong> sesuai jumlah bab: Tauhid, Fiqih, Akhlak, dan Tajwid.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Yasinan Setiap Maghrib</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Pembacaan Yasin setelah hadiran Maghrib setiap hari, dipimpin pengurus Div. Ubudiyah. Awalnya surah Munjiyat, diganti Yasin oleh pengasuh.</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Ratib al-Haddad</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Dibaca setiap hari Minggu dan Rabu sore, dipimpin pengurus dan diikuti santri yang tidak memiliki jadwal lain.</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-2">Praktik Mengkafani Jenazah</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Diadakan Div. Ubudiyah dengan mengundang pengasuh atau guru senior, seperti K. Syafi'ie Anshori, untuk memberikan pemahaman tata cara mengkafani jenazah.</p>
                    </div>
                    <div class="reveal delay-400 bg-slate-50/70 border border-slate-100 rounded-2xl p-6 md:col-span-2 lg:col-span-1">
                        <h4 class="font-bold text-slate-900 mb-2">Praktik Sholat Santri Baru</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Bimbingan khusus setiap Sabtu pagi oleh Nyai Nafidzatin Nadhor. Digagas sejak periode 2019-2020 untuk santri baru yang masih minim pemahaman praktik sholat.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Bergabunglah dalam Lingkaran Ibadah</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Rasakan suasana pesantren yang hidup dengan dzikir, tilawah, dan salat berjamaah di Latee I Putri.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
