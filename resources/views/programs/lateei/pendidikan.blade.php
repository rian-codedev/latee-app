<x-layouts::guest title="Pendidikan Latee I Putri">

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
                            Pendidikan — Latee I Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Madrasah Diniyah<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Annuqayah Latee I</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Sistem pendidikan diniyah yang terstruktur dengan tingkatan Isti'dadi dan Awwaliyah, dibimbing oleh para masyayikh, guru senior, dan ustazah senior.
                    </p>
                </div>
            </div>
        </section>

        <!-- Struktur & Guru -->
        <section class="py-20 bg-white" id="struktur">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Struktur & Guru</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Kepengurusan Madrasah Diniyah</h2>
                </div>

                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Belajar Madrasah Diniyah" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Suasana pembelajaran kitab kuning di Madrasah Diniyah Annuqayah Latee I.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Struktur Kepengurusan</h3>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex justify-between border-b border-slate-200 py-2"><span>Kepala MADAL I</span><span class="font-semibold">K.H. A. Basith AS, BA.</span></li>
                            <li class="flex justify-between border-b border-slate-200 py-2"><span>DP3</span><span class="font-semibold">Nyai Fikriyah, S.Pd.I & Ustazah Siti Nur 'Aisyah, S.Ag</span></li>
                            <li class="flex justify-between border-b border-slate-200 py-2"><span>Wa. Ka. MADAL</span><span class="font-semibold">Ustazah Luthfiyah Bayusuf</span></li>
                            <li class="flex justify-between border-b border-slate-200 py-2"><span>Wa. Ka. Administrasi</span><span class="font-semibold">Ustazah Zumailah A. Khaliq</span></li>
                            <li class="flex justify-between border-b border-slate-200 py-2"><span>Wa. Ka. Keuangan</span><span class="font-semibold">Ustazah Ulfatul Husna</span></li>
                            <li class="flex justify-between border-b border-slate-200 py-2"><span>Wa. Ka. Kurikulum</span><span class="font-semibold">Ustazah Ana Fithratul Jannah</span></li>
                            <li class="flex justify-between border-b border-slate-200 py-2"><span>Wa. Ka. Kesiswaan</span><span class="font-semibold">Ustazah Silmiyati Sholah</span></li>
                            <li class="flex justify-between py-2"><span>Bimbingan & Konseling</span><span class="font-semibold">Ustazah Silfiatin Nauriyah, S.Pd</span></li>
                        </ul>
                    </div>

                    <div class="reveal-right bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Kategori Guru</h3>
                        <ul class="space-y-4 text-sm text-slate-600">
                            <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">1</span> Para Masyayikh di lingkungan Pondok Pesantren Annuqayah.</li>
                            <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">2</span> Guru Senior, sebagian besar alumni Pondok Pesantren Annuqayah.</li>
                            <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">3</span> Guru Junior, yaitu santri senior (ustazah) yang bermukim di Latee I.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tingkatan & Jadwal -->
        <section class="py-20 bg-slate-50" id="tingkatan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Tingkatan & Jadwal</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Kelas Isti'dadi & Awwaliyah</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <div class="reveal delay-100 bg-white rounded-3xl p-6 text-center border border-slate-100 shadow-sm">
                        <span class="text-3xl font-black text-brand-600">1</span>
                        <p class="text-sm font-bold text-slate-800 mt-1">Kelas Isti'dadi</p>
                    </div>
                    <div class="reveal delay-200 bg-white rounded-3xl p-6 text-center border border-slate-100 shadow-sm">
                        <span class="text-3xl font-black text-brand-600">6</span>
                        <p class="text-sm font-bold text-slate-800 mt-1">Kelas Awwaliyah</p>
                    </div>
                    <div class="reveal delay-300 bg-white rounded-3xl p-6 text-center border border-slate-100 shadow-sm">
                        <span class="text-3xl font-black text-brand-600">45'</span>
                        <p class="text-sm font-bold text-slate-800 mt-1">Alokasi per Sesi</p>
                    </div>
                </div>

                <div class="reveal bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Jadwal Masuk</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">Jadwal masuk Madrasah Diniyah adalah setiap <strong>bakda Ashar, Maghrib, dan Isya'</strong> dengan alokasi waktu minimal 45 menit sesuai jadwal masing-masing kelas. Hari <strong>Kamis sore diliburkan</strong> karena memulai rutinitas mingguan Jum'at yang dimulai sejak Kamis sore.</p>
                </div>
            </div>
        </section>

        <!-- Kitab Materi -->
        <section class="py-20 bg-white" id="kitab">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Kitab Materi</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Rincian Kitab per Tingkatan</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- I'dadi -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-3 text-brand-700">I'dadi</h4>
                        <ul class="space-y-1 text-xs text-slate-600">
                            <li>• Tafsir al-Jalalain (Al-Fatihah, Al-Ikhlas, Al-Falaq, An-Nas)</li>
                            <li>• Tauhid: 'Aqidatul 'Awam</li>
                            <li>• Fiqh: Safinatun Najah</li>
                            <li>• Tajwid: Tuhfatul Athfal</li>
                            <li>• Imla': Pengantar Belajar Imla'</li>
                        </ul>
                    </div>
                    <!-- I Awwaliyah -->
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-3 text-brand-700">I Awwaliyah</h4>
                        <ul class="space-y-1 text-xs text-slate-600">
                            <li>• Tafsir al-Jalalain (Al-Fatihah, An-Naba'-An-Nas)</li>
                            <li>• Hadits: Al-Ahadits al-Nabawiyah</li>
                            <li>• Tauhid: Mandzumah al-Risalah</li>
                            <li>• Akhlak: Bidayah al-Hidayah</li>
                            <li>• Tajwid: Matn al-Jazariyah</li>
                            <li>• Fiqh: Sullam at-Taufiq</li>
                            <li>• Nahwu: Nadzm al-Ajurumiyah</li>
                            <li>• Sharraf: Nadzm al-Maqshud</li>
                        </ul>
                    </div>
                    <!-- II Awwaliyah -->
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-3 text-brand-700">II Awwaliyah</h4>
                        <ul class="space-y-1 text-xs text-slate-600">
                            <li>• Tafsir al-Jalalain (Al-Fatihah, Al-Mulk, Ad-Dahr)</li>
                            <li>• Hadits Arba'in</li>
                            <li>• Tauhid: Qatrul Ghaits</li>
                            <li>• Akhlak: Nibrasun Nufus</li>
                            <li>• Fiqh: Fathul Qarib (Bab Shalat)</li>
                            <li>• Nahwu: Matn al-Ajurumiyyah</li>
                        </ul>
                    </div>
                    <!-- III Awwaliyah -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-3 text-brand-700">III Awwaliyah</h4>
                        <ul class="space-y-1 text-xs text-slate-600">
                            <li>• Tafsir al-Jalalain (Al-Fatihah, Al-Waqi'ah, Yaasin)</li>
                            <li>• Hadits: Riyadhus Shalihin</li>
                            <li>• Tauhid: Itmam al-Dirayah</li>
                            <li>• Akhlak: Hidayatul Adzkiya'</li>
                            <li>• Fiqh: Fathul Qarib (Bab Zakat)</li>
                            <li>• Nahwu: Alfiyah ibn Malik</li>
                        </ul>
                    </div>
                    <!-- IV Awwaliyah -->
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-3 text-brand-700">IV Awwaliyah</h4>
                        <ul class="space-y-1 text-xs text-slate-600">
                            <li>• Tafsir al-Jalalain (Al-Fatihah, Ad-Dukhan, As-Sajadah)</li>
                            <li>• Hadits: Riyadhus Shalihin</li>
                            <li>• Tauhid: Hasyiyah ad-Dasuqi</li>
                            <li>• Akhlak: Nashaihud Diniyah</li>
                            <li>• Fiqh: Fathul Mu'in (Bab 'Ariyah)</li>
                        </ul>
                    </div>
                    <!-- V Awwaliyah -->
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-3 text-brand-700">V Awwaliyah</h4>
                        <ul class="space-y-1 text-xs text-slate-600">
                            <li>• Tafsir al-Jalalain (Al-Fatihah, Yusuf, An-Nisa')</li>
                            <li>• Hadits: Riyadhus Shalihin</li>
                            <li>• Tauhid: Hasyiyah ad-Dasuqi</li>
                            <li>• Akhlak: Nashaihud Diniyah</li>
                            <li>• Fiqh: Fathul Mu'in (Bab Puasa)</li>
                        </ul>
                    </div>
                    <!-- VI Awwaliyah -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-2xl p-6">
                        <h4 class="font-bold text-slate-900 mb-3 text-brand-700">VI Awwaliyah</h4>
                        <ul class="space-y-1 text-xs text-slate-600">
                            <li>• Tafsir al-Jalalain (Al-Fatihah, Al-Kahfi, Ar-Rahman)</li>
                            <li>• Hadits: Tajrid as-Sharih</li>
                            <li>• Tauhid: Hasyiyah ad-Dasuqi</li>
                            <li>• Akhlak: Nashaihud Diniyah</li>
                            <li>• Fiqh: Fathul Mu'in (Bab Haji)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- HANSA & HIMDAL I -->
        <section class="py-20 bg-slate-50" id="haflah">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Haflah</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">HANSA & HIMDAL I</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="reveal-left bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">HANSA</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Haflah Nishfu As-Sanah adalah acara untuk merayakan berakhirnya kegiatan pembelajaran semester I sekaligus evaluasi pengurus Madrasah Diniyah. Ditandai dengan pembagian raport, ranking kelas, siswa teladan, dan penghargaan santri berprestasi. Bertempat di Aula MADAL I dengan tausiyah pengasuh.</p>
                    </div>
                    <div class="reveal-right bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">HIMDAL I</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Haflatul Imtihan Madrasah Diniyah Annuqayah Latee I merupakan puncak perayaan berakhirnya kegiatan pembelajaran semester II. Dikemas dalam bentuk lomba antar kelas untuk menggali potensi per individu, baik bersifat edukatif maupun non-edukatif.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Bergabunglah dengan Madrasah Diniyah Latee I</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Dapatkan pendidikan diniyah yang komprehensif dengan bimbingan para masyayikh dan ustazah berpengalaman.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
