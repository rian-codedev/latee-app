<x-layouts::guest title="Program Peminatan">

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
                            Program Peminatan
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Wadah Minat<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Bakat & Kreativitas</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Berbagai unit lokal khusus dan ekstrakurikuler dirancang untuk mengembangkan potensi santri di bidang bahasa, seni, literasi, olahraga, dan keagamaan.
                    </p>
                </div>
            </div>
        </section>

        <!-- Program Unggulan -->
        <section class="py-20 bg-white" id="unit-lokal">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Unit Lokal Khusus</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Program Intensif & Spesialisasi</h2>
                    <p class="text-slate-500 text-sm max-w-xl mx-auto mt-2">Unit lokal khusus yang mewadahi minat santri secara mendalam, mulai dari bahasa Arab, tahfidh, hingga pengembangan Bahasa Inggris.</p>
                </div>

                <!-- GAMBAR UTAMA SECTION -->
                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Ekstrakurikuler Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Berbagai unit lokal khusus dan ekstrakurikuler menjadi wadah pengembangan minat dan bakat santri.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Dalfis -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="bg-brand-600 p-6 text-white">
                            <h3 class="text-xl font-bold">Darul Lughah al-'Arabiyah wal Fiqh as-Salafi</h3>
                            <p class="text-brand-100 text-xs mt-1">DALFIS — Berdiri 2001</p>
                        </div>
                        <div class="p-6 space-y-4 text-sm text-slate-600">
                            <p class="text-xs leading-relaxed">Lembaga pengembangan Bahasa Arab dan Fiqh yang berawal dari inisiatif para ustaz, diresmikan sebagai lokal khusus pada tahun 2001.</p>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs mb-2">Program Harian & Mingguan:</h4>
                                <ul class="space-y-1 text-xs">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Ta'lim, Hifdhul Mufradat, Bimbingan Baca Al-Quran</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Ta'lif dan Terjemah, Bimbingan Kitab Kuning</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Munaqasyah & Debat, Tadrib Maharatul Kalam</li>
                                </ul>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-slate-200">
                                <h4 class="font-bold text-slate-800 text-xs mb-1">Prestasi Unggulan</h4>
                                <p class="text-[11px] text-slate-500">Juara 1 Lomba Esai Bahasa Arab tingkat Internasional (UIN Jakarta, 2021) dan berbagai juara nasional lainnya.</p>
                            </div>
                        </div>
                    </div>

                    <!-- LTQ -->
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="bg-brand-600 p-6 text-white">
                            <h3 class="text-xl font-bold">Lembaga Tahfidhul Quran</h3>
                            <p class="text-brand-100 text-xs mt-1">LTQ — Berdiri 16 Agustus 2006</p>
                        </div>
                        <div class="p-6 space-y-4 text-sm text-slate-600">
                            <p class="text-xs leading-relaxed">Berawal dari mimpi sederhana untuk mengumpulkan santri yang ingin menghafal Al-Quran, kini menjadi lembaga tahfidh yang terstruktur.</p>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs mb-2">Program Utama:</h4>
                                <ul class="space-y-1 text-xs">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Setoran Hafalan & Saling Menyima' (3x/minggu)</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Muraja'ah kelompok & Pengajian Kitab at-Tibyan</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Bimbingan Tahsinul Qira'ah & Ikhtibar (Ujian Semester)</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Khotmil Quran bil-Ghaib & Takhtiman</li>
                                </ul>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-slate-200">
                                <h4 class="font-bold text-slate-800 text-xs mb-1">Prestasi Unggulan</h4>
                                <p class="text-[11px] text-slate-500">Juara 1 MQK tingkat Nasional (Kemenag RI, NTB, 2011) dan Juara 1 Kaligrafi Hiasan Mushaf Nasional (2015).</p>
                            </div>
                        </div>
                    </div>

                    <!-- EAL -->
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="bg-brand-600 p-6 text-white">
                            <h3 class="text-xl font-bold">English Area of Latee</h3>
                            <p class="text-brand-100 text-xs mt-1">EAL — Berdiri 2009</p>
                        </div>
                        <div class="p-6 space-y-4 text-sm text-slate-600">
                            <p class="text-xs leading-relaxed">Unit lokal khusus yang mewadahi minat santri dalam pengembangan Bahasa Inggris, didirikan atas restu pengasuh dengan syarat adanya pengajian kitab.</p>
                            <div>
                                <h4 class="font-bold text-slate-800 text-xs mb-2">Program Unggulan:</h4>
                                <ul class="space-y-1 text-xs">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Harian: Irregular Verb, Practice Speaking, KBM</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Mingguan: Ziarah Maqbarah, Speech & Story Telling</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Bulanan: Debat Bahasa Inggris</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Semester: Ujian & Graduation</li>
                                </ul>
                            </div>
                            <div class="bg-white p-3 rounded-xl border border-slate-200">
                                <h4 class="font-bold text-slate-800 text-xs mb-1">Prestasi Unggulan</h4>
                                <p class="text-[11px] text-slate-500">Juara 1 Speech Contest se-Jawa Timur (PP. Nurul Jadid Paiton, 2019).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rayon & LSB -->
        <section class="py-20 bg-slate-50" id="rayon">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Rayon & Lokal</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Pendidikan Berbasis Kedisiplinan</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Rayon KH. Ahmad Basyir</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Didirikan atas keinginan Alm. KH. Ahmad Basyir Abdullah Sajjad agar santri lebih fokus pada pembelajaran diniyah. Dikenal juga sebagai Rayon Salaf.</p>
                        <div class="space-y-4 text-xs text-slate-600">
                            <div>
                                <h4 class="font-bold text-slate-800 mb-1">Fokus & Perekrutan</h4>
                                <p>Tafaqquh fii ad-Din dan Akhlaqul Karimah. Terbuka bagi santri kelas X SLTA sederajat, baik dari Annuqayah maupun santri baru.</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 mb-1">Materi</h4>
                                <ul class="space-y-1">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Santri Baru: Nadzam 'Imrithi, Hillul Ma'qud, Ta'limul Muta'allim</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Santri Lama: Ad-Dasuqi (Tauhid), Fathul Mu'in (Fiqh), Alfiyah Ibnu Malik</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="reveal-right bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Rayon Lokal Santri Baru (LSB)</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Didirikan atas inisiatif KH. M. Ainul Yaqin pada awal tahun pelajaran 2022-2023. Sistem lokalisasi kelompok untuk memberikan perhatian dan bimbingan khusus bagi santri baru.</p>
                        <div class="space-y-4 text-xs text-slate-600">
                            <div>
                                <h4 class="font-bold text-slate-800 mb-1">Program Formal (1 Tahun)</h4>
                                <ul class="space-y-1">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Fiqih Dasar</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Khat / Imla'</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Bimbingan Mengaji Al-Qur'an</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 mb-1">Program Non-Formal</h4>
                                <ul class="space-y-1">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Sapa Santri & Bimbingan Private</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Penanganan Kasus Santri Baru</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ekstrakurikuler -->
        <section class="py-20 bg-white" id="ekstrakurikuler">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Ekstrakurikuler</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Seni, Budaya & Literasi</h2>
                    <p class="text-slate-500 text-sm max-w-xl mx-auto mt-2">Wadah kreativitas santri di bawah naungan Departemen PORSENI dan DOK.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                        <h4 class="font-bold text-slate-900 mb-2">Hadrah Al-Banjari (Hubbul Basyir)</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Berdiri 2015, wadah shalawat dengan format hybrid (Banjari & Al-Habsyi). Juara 1 Fesban se-Madura dan se-Kabupaten Sumenep.</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                        <h4 class="font-bold text-slate-900 mb-2">Teater SaKSI</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Komunitas literasi & kebudayaan tertua (berdiri 1991). Menerima Anugerah Sutasoma 2019 kategori Komunitas Sastra dari Balai Bahasa Jatim.</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                        <h4 class="font-bold text-slate-900 mb-2">Pencak Silat</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Melestarikan budaya melalui perguruan Perisai Putih, Cipta Sejati, Sinar Putih, dan Pagar Nusa. Latihan rutin malam Jumat pukul 20.30–23.00.</p>
                    </div>
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                        <h4 class="font-bold text-slate-900 mb-2">Kaligrafi</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Diikuti 36 santri, dilaksanakan malam Minggu & Rabu pukul 21.00 di gedung diniyah lantai atas, dengan mentor berpengalaman.</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                        <h4 class="font-bold text-slate-900 mb-2">Beatbox</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Ekstrakurikuler seni vokal musik mulut, dilaksanakan malam Selasa pukul 21.00 WIB, diikuti santri dari SLTP hingga Perguruan Tinggi.</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                        <h4 class="font-bold text-slate-900 mb-2">Liga Futsal Latee (LFL)</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">Wadah hobi bola dengan 8 klub terdaftar. Sistem poin (Menang 3, Seri 1, Kalah 0), juara diumumkan saat penutupan Hamdala.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Kembangkan Potensimu Bersama Kami</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Temukan minat dan bakatmu di lingkungan pesantren yang mendukung pengembangan diri secara menyeluruh.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
