<x-layouts::guest title="Pendaftaran Santri Baru">

    @include('partials.header')

    <main x-data="{ activeTab: 'putra' }">
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
                            Penerimaan Santri Baru 2026
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Bergabunglah<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Bersama Kami</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Informasi lengkap prosedur pendaftaran, persyaratan, dan rincian keuangan santri baru Pondok Pesantren Annuqayah Latee tahun ajaran 2026/2027.
                    </p>
                </div>
            </div>
        </section>

        <!-- Tab Navigation & Content -->
        <section class="py-20 bg-white" id="prosedur">
            <div class="max-w-7xl mx-auto px-6">
                <!-- Tab Buttons -->
                <div class="reveal flex flex-wrap items-center justify-center gap-3 mb-12">
                    <button @click="activeTab = 'putra'"
                            :class="activeTab === 'putra' ? 'bg-brand-600 text-white shadow-lg shadow-brand-500/30' : 'bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200'"
                            class="px-6 py-3 rounded-full text-sm font-bold transition-all duration-300 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-current"></span>
                        Latee Putra
                    </button>
                    <button @click="activeTab = 'latee1'"
                            :class="activeTab === 'latee1' ? 'bg-brand-600 text-white shadow-lg shadow-brand-500/30' : 'bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200'"
                            class="px-6 py-3 rounded-full text-sm font-bold transition-all duration-300 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-current"></span>
                        Latee I Putri
                    </button>
                    <button @click="activeTab = 'latee2'"
                            :class="activeTab === 'latee2' ? 'bg-brand-600 text-white shadow-lg shadow-brand-500/30' : 'bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200'"
                            class="px-6 py-3 rounded-full text-sm font-bold transition-all duration-300 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-current"></span>
                        Latee II Putri
                    </button>
                </div>

                <!-- Gambar Hero Pendaftaran -->
                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-80 relative group">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1200&auto=format&fit=crop" alt="Pendaftaran Santri Baru" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Proses pendaftaran santri baru di Sekretariat Penerimaan Santri Baru Annuqayah Latee.</p>
                    </div>
                </div>

                <!-- ========================================== -->
                <!-- KONTEN: LATEE PUTRA                        -->
                <!-- ========================================== -->
                <div x-show="activeTab === 'putra'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Prosedur -->
                        <div class="space-y-6">
                            <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-4">Prosedur Pendaftaran</h3>
                                <ol class="space-y-3 text-sm text-slate-600 list-decimal list-inside">
                                    <li>Mengisi formulir pendaftaran di Sekretariat Penerimaan Santri Baru 2026.</li>
                                    <li>Mengisi formulir pendaftaran di Sekretariat Penerimaan Santri Baru 2026.</li>
                                    <li>Menyerahkan berkas pendaftaran dengan menyertakan persyaratan berupa:
                                        <ul class="ml-6 mt-2 space-y-1 list-disc list-inside text-xs">
                                            <li>Fotokopi Kartu Keluarga (KK) satu lembar;</li>
                                            <li>Melampirkan fotokopi paspor atau Kitas bagi Warga Negara Asing (WNA).</li>
                                        </ul>
                                    </li>
                                    <li>Mengisi Surat Perjanjian sebagai bukti sanggup menaati semua peraturan Pondok Pesantren Annuqayah Latee dan bersedia untuk tidak pindah ke pesantren daerah lain yang tidak direkomendasi Pengasuh.</li>
                                    <li>Membayar keuangan santri kepada Bendahara.</li>
                                    <li>Menyiapkan dua potong baju putih lengan panjang untuk salat jamaah (hadiran) dan Program Santri Baru.</li>
                                    <li>Membawa songkok nasional dengan tinggi minimal 8 cm dan maksimal 10 cm.</li>
                                    <li>Menempati kamar di Rayon Lokal Santri Baru (LSB).</li>
                                    <li>Mengikuti kegiatan Bimbingan dan Pembinaan Santri Baru (Binasabar).</li>
                                </ol>
                                <div class="mt-4 bg-amber-50 border border-amber-100 rounded-xl p-4 text-xs text-amber-800">
                                    <strong>Catatan:</strong> Pembayaran SPP Santri Baru bisa dilakukan dua tahap. Santri yatim dengan tingkat pendidikan MI s.d. MTs dibebaskan dari semua biaya administrasi pesantren.
                                </div>
                            </div>

                            <!-- Berkas -->
                            <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-4">Berkas Pendaftaran</h3>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Fotokopi Kartu Keluarga (KK) 1 lembar</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Fotokopi paspor atau Kitas (untuk WNA)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Rincian Keuangan -->
                        <div class="space-y-6">
                            <div class="bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                                <h3 class="text-xl font-bold mb-4">Rincian Keuangan</h3>
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pendaftaran</span><span>Rp20.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pendidikan</span><span>Rp350.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pembangunan</span><span>Rp200.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Air (Per 1 Tahun)</span><span>Rp30.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Layanan Kesehatan</span><span>Rp40.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku Saku</span><span>Rp20.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kegiatan Temporal</span><span>Rp150.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Tanda Santri</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Kunjungan</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kibes</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>SKIA</span><span>Rp50.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku dan Kitab</span><span>Rp60.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Songkok Latee</span><span>Rp50.000</span></div>
                                    <div class="flex justify-between py-3 mt-2 border-t-2 border-white/30 font-bold text-lg"><span>Total</span><span>Rp1.000.000</span></div>
                                </div>
                            </div>

                            <!-- Kebutuhan Santri -->
                            <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-4">Kebutuhan Santri</h3>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Dua potong baju putih lengan panjang</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Songkok nasional tinggi 8–10 cm</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Perlengkapan pribadi lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================================== -->
                <!-- KONTEN: LATEE I PUTRI                      -->
                <!-- ========================================== -->
                <div x-show="activeTab === 'latee1'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-4">Prosedur Pendaftaran</h3>
                                <ol class="space-y-3 text-sm text-slate-600 list-decimal list-inside">
                                    <li>Nyabis kepada pengasuh dhalem Timur: Nyai Hj. Maghfuroh Ihsan.</li>
                                    <li>Nyabis kepada pengasuh dhalem Barat: Nyai Mas'adah Shahib.</li>
                                    <li>Mengisi formulir dan surat pernyataan kesanggupan mengikuti seluruh tata tertib Pondok Pesantren Annuqayah Latee I.</li>
                                    <li>Menuju lokasi blok santri baru PP. Annuqayah Latee I.</li>
                                </ol>
                            </div>

                            <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-4">Berkas Pendaftaran</h3>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Fotokopi Kartu Keluarga (KK) 1 lembar</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Foto orang tua/wali ukuran 2×3 (2 lembar)</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Fotokopi paspor atau Kitas (untuk WNA)</li>
                                </ul>
                                <p class="text-xs text-slate-500 mt-3">Foto wali dibutuhkan untuk membuat kartu mahram (contoh: foto bapak 2 lembar, foto ibu 2 lembar, foto saudara 2 lembar).</p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                                <h3 class="text-xl font-bold mb-4">Rincian Keuangan</h3>
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pendaftaran</span><span>Rp0</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Biaya Gedung</span><span>Rp0</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Biaya Air (0/Bln)</span><span>Rp0</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Biaya Listrik (0/Bln)</span><span>Rp0</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Biaya Kegiatan</span><span>Rp0</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>SKIA</span><span>Rp50.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Doa-Doa</span><span>Rp25.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Pulang Santri</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Santri</span><span>Rp7.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Perpustakaan</span><span>Rp7.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Mahram</span><span>Rp3.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kerudung Almamater</span><span>Rp40.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Bros Almamater</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku Bimbingan Mengaji</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Intisari Pegon</span><span>Rp13.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Mukena dan Sajadah Almamater</span><span>Rp190.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Al-Qur'an Qudusy</span><span>Rp80.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Yanbu'a</span><span>Rp55.000</span></div>
                                    <div class="flex justify-between py-3 mt-2 border-t-2 border-white/30 font-bold text-lg"><span>Total</span><span>Rp500.000</span></div>
                                </div>
                            </div>

                            <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-4">Kebutuhan Santri</h3>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Lemari ukuran maksimal 120×60 cm</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Kotak makan/piring dan botol air/tumbler</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Mukena terusan warna putih polos</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Sejadah ukuran lebar maksimal 50 cm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================================== -->
                <!-- KONTEN: LATEE II PUTRI                     -->
                <!-- ========================================== -->
                <div x-show="activeTab === 'latee2'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-4">Administrasi Pesantren</h3>
                                <ol class="space-y-3 text-sm text-slate-600 list-decimal list-inside">
                                    <li>Sowan kepada Pengasuh Pondok Pesantren Annuqayah Latee II dengan diantar oleh wali atau wakil wali.</li>
                                    <li>Menaati semua tata tertib Pondok Pesantren Annuqayah Latee II dan ketentuan lain yang ditetapkan oleh Pesantren ditandai dengan mengisi Surat Pernyataan Menaati Tata Tertib Latee II.</li>
                                    <li>Mendaftar secara administratif di Kantor Pondok Pesantren Annuqayah Latee II dengan memenuhi persyaratan:
                                        <ul class="ml-6 mt-2 space-y-1 list-disc list-inside text-xs">
                                            <li>Mengisi formulir pendaftaran yang telah disediakan.</li>
                                            <li>Menyerahkan fotokopi Kartu Keluarga (KK) 1 lembar.</li>
                                            <li>Membawa pas foto santri: 3×4 1 lembar, wali santri (Bapak & Ibu): 2×3 1 lembar.</li>
                                            <li>Melunasi keuangan santri.</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>

                            <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                                <h3 class="text-xl font-bold text-slate-900 mb-4">Kaidah Busana</h3>
                                <ul class="space-y-2 text-sm text-slate-600">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Mukena terusan putih dan sajadah kecil.</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Kerudung: menggunakan ciput yang menutup rambut, tidak transparan, menutupi dada dan bahu.</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Baju: jumlah disesuaikan tingkat pendidikan (SLTP/SLTA/PT), di bawah pinggul, tidak membentuk lekuk tubuh, tidak transparan, tidak berbahan kaos, tidak berlengan seperempat/seperdelapan.</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Kaos berlengan panjang.</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Rok tidak transparan, bukan rok span, bukan rok belahan, bukan berbahan kaos.</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Sandal tinggi 3 cm (belakang) dan 1,5 cm (depan).</li>
                                </ul>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                                <h3 class="text-xl font-bold mb-4">Rincian Keuangan</h3>
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pendaftaran</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Mahram</span><span>Rp5.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Bepergian</span><span>Rp8.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Perpustakaan</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Santri</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku SKIA</span><span>Rp50.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku al-Adzkar</span><span>Rp8.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku Tatib</span><span>Rp8.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kamus Mini Bahasa Madura</span><span>Rp6.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Baju Almamater</span><span>Rp250.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Jilbab Almamater</span><span>Rp35.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Bros Almamater</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Lemari</span><span>Rp100.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pembangunan</span><span>Rp240.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kebersihan 1 Tahun</span><span>Rp100.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Listrik 1 Tahun</span><span>Rp100.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Air 1 Tahun</span><span>Rp100.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kesehatan 1 Tahun</span><span>Rp50.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kegiatan Intensif</span><span>Rp100.000</span></div>
                                    <div class="flex justify-between py-3 mt-2 border-t-2 border-white/30 font-bold text-lg"><span>Total</span><span>Rp1.200.000</span></div>
                                </div>
                            </div>

                            <div class="bg-amber-50 border border-amber-100 rounded-3xl p-6">
                                <h4 class="text-sm font-bold text-amber-800 mb-2">Catatan Penting</h4>
                                <ul class="space-y-1 text-xs text-amber-700">
                                    <li class="flex items-start gap-2"><span>•</span> Administrasi Madrasah Diniyah dilakukan setelah menyelesaikan administrasi pesantren.</li>
                                    <li class="flex items-start gap-2"><span>•</span> Keluarga santri baru diperbolehkan mengantarkan santri dengan dua orang pendamping (sangat dianjurkan Bapak dan Ibu).</li>
                                    <li class="flex items-start gap-2"><span>•</span> Waktu mengunjungi santri hanya pada hari Kamis dan Jumat, batas akhir pukul 16.30 WIB.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catatan Umum -->
                <div class="reveal mt-12 bg-slate-50 border border-slate-200 rounded-3xl p-6 md:p-8">
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 text-brand-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 mb-1">Informasi Lebih Lanjut</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Untuk pertanyaan seputar pendaftaran, silakan hubungi Sekretariat Pondok Pesantren Annuqayah Latee atau datang langsung ke kantor pesantren pada jam kerja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Siap Menjadi Santri Baru?</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Lengkapi persyaratan dan ikuti prosedur pendaftaran sesuai kompleks yang Anda pilih. Kami tunggu kehadiran Anda.</p>
                <a href="/#contact" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Hubungi Kami</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
