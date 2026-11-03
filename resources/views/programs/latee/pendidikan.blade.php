<x-layouts::guest title="Program Pendidikan">

    @include('partials.header')

    <main>
        <!-- BEGIN: Page Hero -->
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
                            Program Pendidikan
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Membentuk Santri<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Berilmu & Berakhlak</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Berbagai program pendidikan dirancang untuk mencetak generasi Qur'ani yang menguasai ilmu agama, kitab kuning, dan amaliah ibadah sehari-hari.
                    </p>
                </div>
            </div>
        </section>

        <!-- BEGIN: Madrasah Diniyah -->
        <section class="py-20 bg-white" id="diniyah">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Madrasah Diniyah</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Jantung Pendidikan Annuqayah Latee</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div class="reveal-left space-y-6">
                        <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Sejarah</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Madrasah Diniyah adalah jantung bagi Annuqayah Latee. Alm. KH. Ahmad Basyir AS pernah menegaskan bahwa jika tidak mau sekolah diniyah, sebaiknya pamit saja dari Latee. Ditetapkan pada 1 Agustus 1983, Madrasah Diniyah Annuqayah Latee dengan sistem klasikal pun didirikan.
                            </p>
                        </div>
                        <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Tingkatan Kelas</h3>
                            <ul class="space-y-2 text-sm text-slate-600">
                                <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> 1 kelas tingkat Isti'dadi</li>
                                <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> 6 kelas tingkat Ibtida'i</li>
                            </ul>
                            <p class="text-xs text-slate-500 mt-3">Pembagian kategori kelas secara umum dibagi menjadi 2: Tingkat Isti'dadi dan Ibtida'i.</p>
                        </div>
                        <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Jadwal</h3>
                            <p class="text-sm text-slate-600">Jadwal masuk Diniyah malam Sabtu sampai malam Kamis, dengan alokasi waktu minimal 45 menit, dimulai pukul 19.30 WIB atau bakda salat witir berjamaah.</p>
                        </div>
                        <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Kategori Guru</h3>
                            <ul class="space-y-2 text-sm text-slate-600">
                                <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Para Masyayikh di lingkungan Pondok Pesantren Annuqayah</li>
                                <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Guru Senior (mayoritas alumni Annuqayah Latee)</li>
                                <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Guru Junior (santri senior/ustaz yang bermukim)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="reveal-right space-y-6">
                        <div class="bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20 hover:scale-[1.01] transition-transform duration-300">
                            <h3 class="text-xl font-bold mb-4">Program Terbaru</h3>
                            <ul class="space-y-4">
                                <li>
                                    <h4 class="font-bold text-brand-100">Hafalan Wajib</h4>
                                    <p class="text-xs text-brand-50 leading-relaxed">Berangkat dari usulan guru senior dan masyayikh, hafalan diwajibkan sebagai persyaratan naik ke jenjang kelas berikutnya.</p>
                                </li>
                                <li>
                                    <h4 class="font-bold text-brand-100">Bahtsul Masa'il</h4>
                                    <p class="text-xs text-brand-50 leading-relaxed">Wadah bagi murid untuk mengasah khazanah ilmu diniyah dalam menjawab problematika di sekitar, sekaligus dokumentasi Madrasah Diniyah.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Hamdala (Haflatul Imtihan)</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">Wadah bagi santri untuk mengasah bakat edukatif dan non-edukatif. Dikemas dalam lomba antar kelas, dilaksanakan akhir tahun setelah ujian semester 2, sebagai evaluasi pengurus. Even ini diparipurnai dengan penutupan, pembagian hadiah, ranking, siswa teladan, sekaligus Temu Wali Santri.</p>
                        </div>
                        <div class="bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-xl font-bold text-slate-900 mb-3">Kitab Materi (Contoh)</h3>
                            <div class="grid grid-cols-2 gap-2 text-xs text-slate-600">
                                <span class="bg-white p-2 rounded-lg border border-slate-200">Tauhid: 'Aqidatul 'Awam</span>
                                <span class="bg-white p-2 rounded-lg border border-slate-200">Akhlak: Durusul Akhlaq</span>
                                <span class="bg-white p-2 rounded-lg border border-slate-200">Fiqh: Mabadi' al-Fiqhiyyah</span>
                                <span class="bg-white p-2 rounded-lg border border-slate-200">Tajwid: Tuhfatul Athfal</span>
                                <span class="bg-white p-2 rounded-lg border border-slate-200">Nahwu: Alfiyah ibn Malik</span>
                                <span class="bg-white p-2 rounded-lg border border-slate-200">Sharraf: Al-Amtsilah at-Tashrifiyyah</span>
                            </div>
                            <p class="text-[10px] text-slate-400 mt-3">Rincian lengkap kitab materi per tingkatan kelas tersedia di situs resmi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BEGIN: Pengajian Al-Quran & Kitab -->
        <section class="py-20 bg-slate-50" id="pengajian">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Pengajian Al-Quran & Kitab</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Elemen Vital Kultur Pesantren</h2>
                    <p class="text-slate-500 text-sm max-w-xl mx-auto mt-2">Penekanan untuk bisa membaca Al-Quran dengan fasih dan benar sama pentingnya dengan sekolah Madrasah Diniyah. Begitupun dengan Kitab Turats (Kitab Kuning).</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Pengajian Al-Quran -->
                    <div class="reveal delay-100 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-4 border-b border-slate-100 pb-3">Pengajian Al-Quran</h3>
                        <div class="space-y-4 text-sm text-slate-600">
                            <div>
                                <h4 class="font-bold text-slate-800">Alokasi Waktu</h4>
                                <p>Dilaksanakan setelah salat Maghrib berjamaah.</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Majlis Santri Lama</h4>
                                <p>Dibagi menjadi 4 tingkatan: Mubtadi' (pemula), Mutawassith (menengah), Mutaqaddim (lanjutan), dan Khusus (dibimbing dewan pengasuh).</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Majlis Tilawati</h4>
                                <p>Ditujukan bagi santri baru yang minim pengetahuan tajwid, fashahah, mad, dan makharijul huruf. Dilaksanakan setelah Maghrib dengan durasi lebih lama.</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Metode Bimbingan</h4>
                                <p>Menggunakan metode Sorogan dan Tadarus, disesuaikan dengan tingkatan majlis.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Pengajian Kitab -->
                    <div class="reveal delay-200 bg-white rounded-3xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-4 border-b border-slate-100 pb-3">Pengajian Kitab</h3>
                        <div class="space-y-4 text-sm text-slate-600">
                            <div>
                                <h4 class="font-bold text-slate-800">Jadwal</h4>
                                <p>Dilaksanakan dua waktu: Pagi (bakda salat Shubuh) dan Sore (bakda salat Ashar).</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Kitab yang Digunakan</h4>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    <span class="bg-slate-100 px-3 py-1 rounded-full text-xs">Tafsir Jalalain</span>
                                    <span class="bg-slate-100 px-3 py-1 rounded-full text-xs">Kifayatul Atqiya'</span>
                                    <span class="bg-slate-100 px-3 py-1 rounded-full text-xs">Fathul Mu'in</span>
                                    <span class="bg-slate-100 px-3 py-1 rounded-full text-xs">Riyadhus Shalihin</span>
                                    <span class="bg-slate-100 px-3 py-1 rounded-full text-xs">Minhajul Qawim</span>
                                    <span class="bg-slate-100 px-3 py-1 rounded-full text-xs">Ayyuhal Walad</span>
                                    <span class="bg-slate-100 px-3 py-1 rounded-full text-xs">Ta'limul Muta'allim</span>
                                    <span class="bg-slate-100 px-3 py-1 rounded-full text-xs">Nashaihul Ibad</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Dewan Pengasuh</h4>
                                <p class="text-xs">KH. Abd A'la, KH. A. Hanif Hasan, KH. M. Syafi'i Anshari, KH. Muhammad Musthafa Erfan, KH. Moh. Ramdhan, KH. Maimun Syamsuddin, Lora Nubail ibn Hanif Hasan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BEGIN: Madrasah SKIA -->
        <section class="py-20 bg-white" id="skia">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Madrasah SKIA</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Pondasi Pemahaman Dasar Agama</h2>
                    <p class="text-slate-500 text-sm max-w-xl mx-auto mt-2">Madrasah SKIA memberikan pemahaman kepada santri baru mengenai isi buku SKIA (Syarat Kecakapan Ibadah Amaliah) yang menjadi pegangan wajib santri.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Materi Pokok</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Buku SKIA berisi pokok dasar agama, ushuluddin, yang terdiri dari ilmu fikih (syariah), tauhid (akidah), akhlak (tasawuf), dan ilmu tajwid serta amaliyah yaumiyah seperti tahlil dan doa-doa penting.</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Sistem Pembelajaran</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Berbentuk klasikal, masuk setiap hari (kecuali Jumat) bakda salat Ashar berjamaah. Kelas dipetakkan berdasarkan jenjang pendidikan formal (SD/SLTP, SLTA, atau Perguruan Tinggi). Wajib diikuti seluruh santri baru selama satu tahun pelajaran (dua semester).</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-3">Program Pendukung</h3>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Praktek ubudiyah (berwudu, salat wajib dan sunah, amaliyah yaumiyah)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Praktek mengkafani jenazah</li>
                        </ul>
                    </div>
                </div>

                <div class="reveal delay-400 mt-8 bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                    <h3 class="text-xl font-bold mb-3">Kelulusan & Harapan</h3>
                    <p class="text-sm text-brand-50 leading-relaxed">Hafalan wajib menjadi syarat utama kelulusan santri di Madrasah SKIA. Dewan guru terdiri dari ustaz-ustaz senior yang dianggap mampu. Dengan adanya Madrasah SKIA, diharapkan santri baru memiliki pemahaman dasar agama yang penting sebagai pondasi kearifan seorang santri.</p>
                </div>
            </div>
        </section>

        <!-- BEGIN: CTA -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Siap Bergabung Menjadi Santri?</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Dapatkan pendidikan agama yang komprehensif dan lingkungan yang mendukung untuk membentuk generasi Qur'ani.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
