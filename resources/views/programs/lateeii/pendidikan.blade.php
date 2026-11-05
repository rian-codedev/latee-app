<x-layouts::guest title="Pendidikan Latee II Putri">

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
                            Pendidikan — Latee II Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Madrasah Diniyah<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Latee II Putri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Program unggulan berbasis agama dengan jenjang I'dadiyah, Awwaliyah, Wustha, dan Ulya. Seluruh santri wajib mengenyam pendidikan madrasah diniyah.
                    </p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Pendidikan -->
        <div class="reveal max-w-7xl mx-auto px-6 -mt-8 mb-12 relative z-10">
            <div class="overflow-hidden rounded-3xl shadow-xl border border-slate-100 h-64 md:h-96 relative group">
                <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=1200&auto=format&fit=crop" alt="Suasana Belajar Madrasah Diniyah Latee II" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                    <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Kegiatan belajar-mengajar kitab kuning di Madrasah Diniyah Annuqayah Latee II.</p>
                </div>
            </div>
        </div>

        <!-- Sejarah & Dinamika -->
        <section class="py-16 bg-white" id="sejarah">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Sejarah</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Dinamika Pengembangan Madrasah Diniyah</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Didirikan pada <strong>1996 M</strong>, jenjang madrasah diniyah di Latee II mengalami dinamika pengembangan yang cukup progresif sesuai tuntutan zaman. Dari jenjang Awwaliyah, pada pertengahan tahun 2002 didirikan jenjang Wustha sebagai lanjutannya.</p>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Pada tahun 2008 didirikan juga jenjang <strong>I'dadiyah</strong> sebagai respon bagi santri yang belum mampu masuk di jenjang Awwaliyah. Yang terakhir, pada <strong>2012</strong> didirikan kelas khusus yang disebut <strong>Kelas Mumtaz</strong> untuk mewadahi santri pilihan dan mempunyai kemampuan baca kitab yang mumpuni.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Kelas khusus ini kemudian diubah menjadi jenjang kelas <strong>Ulya</strong> sebagai lanjutan dari kelas Wustha.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Durasi & Sistem</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Durasi belajar-mengajar adalah <strong>dua jam</strong> dengan 2 materi setiap malamnya, dimulai setelah hadiran Maghrib sampai jam 20.15.</p>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Sistem kenaikan kelas ditentukan nilai raport dari akumulasi ujian tulis (Awwaliyah & Wustha) serta ujian lisan (Ulya).</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Tiga nilai teratas per semester akan menjadi bintang pada setiap kelas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Empat Jenjang -->
        <section class="py-20 bg-slate-50" id="jenjang">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Jenjang</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Empat Jenjang Pendidikan</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- I'dadiyah -->
                    <div class="reveal delay-100 bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900 mb-3 text-brand-700">I'dadiyah</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Kelas paling dasar dari empat jenjang. Persiapan masuk Awwaliyah yang dituntut bisa baca-tulis Arab. Materi dasar: menulis, membaca huruf Arab, dan fikih. Terdiri dari empat kelas hasil tes masuk santri baru dan tes kelayakan naik kelas.</p>
                    </div>
                    <!-- Awwaliyah -->
                    <div class="reveal delay-200 bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900 mb-3 text-brand-700">Awwaliyah</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Enam kelas (1–6). Metode pengajaran bebas, rata-rata bandongan. Jumlah materi berbeda: kelas 1–3 (10 materi), kelas 4 (9), kelas 5 (8), kelas 6 (7). Materi: Tauhid (Minahu as-Saniyah), Akhlak (Ta'lim al-Muta'allim, Muraqi al-'Ubudiyah), Fikih (Fath al-Qarib), Tajwid, Hadits (Riyad as-Shalihin), Imla', Tarikh (Nur al-Yaqin), Sharraf (Kaylani), Nahwu ('Imrithi).</p>
                    </div>
                    <!-- Wustha -->
                    <div class="reveal delay-300 bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900 mb-3 text-brand-700">Wustha</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Jenjang lanjutan dari Awwaliyah, didirikan pada pertengahan tahun 2002. Materi lebih mendalam dengan kitab-kitab yang lebih tinggi.</p>
                    </div>
                    <!-- Ulya -->
                    <div class="reveal delay-400 bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900 mb-3 text-brand-700">Ulya</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Awalnya kelas Mumtaz (2012) untuk santri pilihan dengan kemampuan baca kitab mumpuni, berorientasi pengkaderan dan pendelegasian lomba kitab. Kemudian diubah menjadi jenjang Ulya sebagai lanjutan Wustha. Ujian akhir berupa ujian lisan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Bergabunglah dengan Madrasah Diniyah Latee II</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Dapatkan pendidikan diniyah yang komprehensif dengan empat jenjang terstruktur.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
