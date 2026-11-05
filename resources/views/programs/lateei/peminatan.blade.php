<x-layouts::guest title="Peminatan Latee I Putri">

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
                            Peminatan — Latee I Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Tata Boga, Shalawat<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">& Sastra</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Wadah pengembangan bakat dan minat santri Latee I Putri di bidang kuliner, seni shalawat, dan kesusastraan.
                    </p>
                </div>
            </div>
        </section>

        <!-- Tata Boga -->
        <section class="py-20 bg-white" id="tata-boga">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Tata Boga</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Kreativitas di Dapur</h2>
                </div>

                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Tata Boga Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Santri Latee I Putri mengembangkan bakat masak-memasak melalui kegiatan Tata Boga.</p>
                    </div>
                </div>

                <div class="reveal bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                    <p class="text-sm text-slate-600 leading-relaxed mb-4">Berawal dari bakat santri dalam bidang masak-memasak yang perlu dikembangkan. Mulanya dilaksanakan dengan sistem kursus, namun pada masa kepemimpinan Ustadzah Layyinah Sajjad (2004-2005) mulai diformat dengan <strong>sistem lomba</strong>.</p>
                    <p class="text-sm text-slate-600 leading-relaxed mb-4">Dilaksanakan setiap minggu pada <strong>hari Rabu</strong>. Dibentuk kelompok berisi 10–15 santri dengan 1–2 pengurus sebagai pengoordinir. Kelompok terbaik diumumkan di akhir periode bertepatan dengan penutupan aktivitas.</p>
                    <p class="text-sm text-slate-600 leading-relaxed">Di akhir periode, Div. Pengembangan Bakat dan Minat mengadakan <strong>Tata Boga Akbar</strong> dengan mengundang ahli untuk memberikan inspirasi inovasi masak-memasak.</p>
                </div>
            </div>
        </section>

        <!-- Club Cinta Shalawat -->
        <section class="py-20 bg-slate-50" id="shalawat">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Club Cinta Shalawat</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Membina Bakat Shalawat</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Kegiatan mingguan setiap <strong>malam Selasa</strong> di Mushalla Az-Zahra' setelah shalat Maghrib berjamaah sampai azan Isya'. Dihadiri seluruh santri dan dibimbing pengurus.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Shalawat yang diajarkan bervariasi, dari Shalawat Diba' hingga nasyid islami tanpa alat musik. Bertujuan membina santri yang memiliki bakat shalawat dan menumbuhkan kecintaan bershalawat kepada Nabi.</p>
                    </div>
                    <div class="reveal-right bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                        <h3 class="text-xl font-bold mb-3">Club Cinta Shalawat</h3>
                        <p class="text-sm text-brand-50 leading-relaxed">Pada masa kepemimpinan Ustazah Lailatul Qomariyah (awal 2020), kegiatan ini dikembangkan menjadi komunitas <strong>Club Cinta Shalawat</strong> beranggotakan 7 orang. Mereka mendapatkan pembinaan khusus untuk tampil mengisi kegiatan-kegiatan pondok.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cafe Latte 52 -->
        <section class="py-20 bg-white" id="cafe-latte">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Cafe Latte 52</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Komunitas Menulis Santri</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Sejarah</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Berdiri dari kebiasaan rutinitas mingguan anggota setelah berdiskusi atau membuat karya sastra yang diakhiri dengan minum kopi panas bersama. Angka <strong>52</strong> adalah gabungan tanggal, bulan, dan tahun diresmikan: <strong>16 Januari 2015</strong>.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Awalnya fokus pada sastra Indonesia, sejak 2018 mulai menggeluti sastra Bahasa Madura. Awalnya di bawah Div. Informasi dan Publikasi, pada 2016 pindah asuh ke Div. Pengembangan Bakat dan Minat.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Visi & Misi</h3>
                        <p class="text-sm font-semibold text-brand-700 mb-2">Visi:</p>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Mewadahi pecinta sastra di Pondok Pesantren Annuqayah Latee 1.</p>
                        <p class="text-sm font-semibold text-brand-700 mb-2">Misi:</p>
                        <p class="text-sm text-slate-600 leading-relaxed">Membiasakan santri mengapresiasi karya sastra.</p>
                    </div>
                </div>

                <div class="reveal mt-8 bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Program</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-sm text-slate-600">
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Menulis Puisi (setiap malam, disetor sebelum pukul 22.00 WIB)</li>
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Sekolah Sastra (dibimbing Kiai M. Faizi, M.Hum di dhalem beliau)</li>
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Bedah Karya (setiap minggu, karya member Cafe Latte 52)</li>
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Diskusi Sastra (setengah bulan, bergantian dengan bedah puisi)</li>
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Menerbitkan Buletin (dua kali dalam satu periode)</li>
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Peringatan Hari Jadi</li>
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Kunjungan ke Perpustakaan Pribadi Alm. K. M. Zamiel el-Muttaqien</li>
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Kunjungan ke Komunitas Tore Maos di Sumenep</li>
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Menempelkan Karya Member di Mading Latee 1</li>
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Penerimaan Anggota Baru</li>
                        <div class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Mengirimkan karya member ke media</li>
                    </div>
                    <p class="text-xs text-slate-500 mt-4"><strong>Prestasi:</strong> Karya member berhasil dimuat di Jawa Pos Radar Madura, Koran Kabar, dan media lainnya.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Kembangkan Bakatmu di Latee I Putri</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Temukan minat dan bakatmu dalam Tata Boga, Shalawat, atau Sastra bersama kami.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
