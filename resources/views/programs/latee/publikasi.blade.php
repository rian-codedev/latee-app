<x-layouts::guest title="Program Publikasi">

    @include('partials.header')

    <main>
        <!-- Hero Section -->
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
                            Program Publikasi
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Menyalakan Literasi<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Melalui Tulisan</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Berbagai media publikasi dikelola oleh santri untuk mewadahi proses kreatif dalam bidang jurnalistik, kesusastraan, dan kebahasaan.
                    </p>
                </div>
            </div>
        </section>

        <!-- Perpustakaan -->
        <section class="py-20 bg-white" id="perpustakaan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Perpustakaan</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Media Publikasi Pustakawan</h2>
                    <p class="text-slate-500 text-sm mt-2 max-w-2xl">Beberapa media publikasi yang dibawahi oleh pustakawan Pondok Pesantren Annuqayah Latee.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Majalah Hijrah -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Majalah Hijrah</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Awalnya berupa selebaran tulisan bernama "Jejak", berisi karya para pustakawan, kemudian bermetamorfosis menjadi "Majalah Hijrah". Terbit minimal satu kali dalam setahun, dengan objek pasar meliputi Pondok Pesantren Annuqayah secara umum serta pesantren dan lembaga pendidikan se-Kabupaten Sumenep dan Pamekasan.</p>
                        <div class="bg-white p-4 rounded-xl border border-slate-200">
                            <h4 class="text-xs font-bold text-slate-800 mb-2 uppercase tracking-wide">Rubrik</h4>
                            <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600">
                                <span class="bg-slate-100 px-2 py-1 rounded">Salam Redaksi</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Senarai Isi</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Surat Pembaca</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Bahasan Utama</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Wawancara</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Wacana Q-ta</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Perspektif</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Cerpen</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Catatan</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Ulasan Cerpen</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Suara Hati</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">ABA</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Kolom Alumni</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Bahtsul Masail</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Komunitas</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Biografi</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">My Book</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Tadabbur</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Jejak Alumni</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Kiat-Kiat</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Album Khusus</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Pesantren-Q</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Cas Cis Cus</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Smile</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Oretan</span>
                            </div>
                        </div>
                    </div>

                    <!-- Warta Latee -->
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Warta Latee</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Media publikasi yang berfungsi sebagai koran santri Latee. Memuat berita tentang kegiatan-kegiatan dan seputar Pondok Pesantren Annuqayah Latee, terbit setiap pekan sekali.</p>
                        <div class="bg-white p-4 rounded-xl border border-slate-200">
                            <h4 class="text-xs font-bold text-slate-800 mb-2 uppercase tracking-wide">Rubrik</h4>
                            <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600">
                                <span class="bg-slate-100 px-2 py-1 rounded">Headline (Berita Utama)</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Pesantren</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Sportaiment</span>
                            </div>
                        </div>
                    </div>

                    <!-- Mading Ma'haduna -->
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Mading Ma'haduna</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Majalah dinding yang menampilkan tulisan pustakawan Pondok Pesantren Annuqayah Latee.</p>
                        <div class="bg-white p-4 rounded-xl border border-slate-200">
                            <h4 class="text-xs font-bold text-slate-800 mb-2 uppercase tracking-wide">Rubrik</h4>
                            <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600">
                                <span class="bg-slate-100 px-2 py-1 rounded">Artikel</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Opini</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Esai</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Resensi</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Puisi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lumbung (Teater SaKSI) -->
        <section class="py-20 bg-slate-50" id="lumbung">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Lumbung</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Kreativitas Sastra Teater SaKSI</h2>
                </div>

                <div class="reveal bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Media publikasi ini milik Teater SakSi yang mewadahi proses kreatif anggotanya dalam bidang kesusastraan. Lumbung diterbitkan dengan dua bentuk, yaitu <strong>mading</strong> dan <strong>buletin</strong> yang hanya diedarkan untuk kalangan tertentu. Terbit setiap bulan sekali.</p>
                            <div class="bg-brand-600 text-white p-4 rounded-xl">
                                <h4 class="text-xs font-bold mb-1">Frekuensi Terbit</h4>
                                <p class="text-sm font-bold">Setiap Bulan</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-slate-800 mb-3 uppercase tracking-wide">Rubrik</h4>
                            <div class="flex flex-wrap gap-2 text-[11px] text-slate-600">
                                <span class="bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200">Pintu Redaksi</span>
                                <span class="bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200">Cerpen</span>
                                <span class="bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200">Esai</span>
                                <span class="bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200">Benih</span>
                                <span class="bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200">Puisi</span>
                                <span class="bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200">Naskah Drama</span>
                                <span class="bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200">Lontar (Resensi)</span>
                                <span class="bg-slate-50 px-3 py-1.5 rounded-lg border border-slate-200">Avontur (Catatan Perjalanan)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Media Publikasi Dalfis -->
        <section class="py-20 bg-white" id="dalfis">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Dalfis</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Media Berbahasa Arab</h2>
                    <p class="text-slate-500 text-sm mt-2 max-w-2xl">Lokal yang mewadahi santri dalam mengembangkan bahasa Arab dan kitabiyah memiliki beberapa media publikasi.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Abthal -->
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Abthal</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Media informasi berbahasa Arab yang memuat berita-berita kegiatan di Pondok Pesantren Annuqayah Latee. Dikelola oleh pengurus harian Dalfis.</p>
                        <div class="bg-white p-3 rounded-xl border border-slate-200">
                            <h4 class="text-[10px] font-bold text-slate-800 mb-1 uppercase">Rubrik</h4>
                            <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600">
                                <span class="bg-slate-100 px-2 py-1 rounded">Berita Utama</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Taqdim</span>
                            </div>
                        </div>
                    </div>

                    <!-- Mimain -->
                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Mimain</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Media berisi tulisan berbahasa Arab karya santri Dalfis, khusus dikelola kelas <em>mutawassith</em> dan <em>mutaqaddim</em>, di bawah bimbingan pengurus Departemen Tarbiyah Dalfis.</p>
                        <div class="bg-white p-3 rounded-xl border border-slate-200">
                            <h4 class="text-[10px] font-bold text-slate-800 mb-1 uppercase">Rubrik</h4>
                            <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600">
                                <span class="bg-slate-100 px-2 py-1 rounded">Kalimatul Adad</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Mimain Yaqul</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Mimain Yalmah</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Mimain Yara</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Mimain Yu'abbir</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Mimain Yutarjim</span>
                            </div>
                        </div>
                    </div>

                    <!-- Majalah Mufakkirah -->
                    <div class="reveal delay-300 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Majalah Mufakkirah</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Majalah berbahasa Arab yang dikelola oleh Departemen Penerbitan dan Pengembangan Bakat Dalfis. Terbit dua kali dalam setahun.</p>
                        <div class="bg-white p-3 rounded-xl border border-slate-200">
                            <h4 class="text-[10px] font-bold text-slate-800 mb-1 uppercase">Rubrik</h4>
                            <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600">
                                <span class="bg-slate-100 px-2 py-1 rounded">Jauharah</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Nubdzah</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Khiwar</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">A'waj</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Iqtibas</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Al-Fiqh Al-Salafi</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Arba'</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Muallafat</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Hikayah</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Zuqaq</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Hal Ta'rif</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Al-Kalimah Al-Mutaqati'ah</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Ayyuhal A'izza'</span>
                            </div>
                        </div>
                    </div>

                    <!-- Ajyal -->
                    <div class="reveal delay-400 bg-slate-50/70 border border-slate-100 rounded-3xl p-8 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Ajyal</h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Media tulis menulis yang dikelola oleh santri <em>mustawa I'dadi</em> dan <em>Mubtadi'</em>, di bawah bimbingan pengurus Departemen Penerbitan dan Pengembangan Bakat.</p>
                        <div class="bg-white p-3 rounded-xl border border-slate-200">
                            <h4 class="text-[10px] font-bold text-slate-800 mb-1 uppercase">Rubrik</h4>
                            <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600">
                                <span class="bg-slate-100 px-2 py-1 rounded">Qisshah</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Muhadatsah</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Syi'ir</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Fukahah</span>
                                <span class="bg-slate-100 px-2 py-1 rounded">Zawiyah</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Media Publikasi EAL -->
        <section class="py-20 bg-slate-50" id="eal">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">EAL</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Media Berbahasa Inggris</h2>
                    <p class="text-slate-500 text-sm mt-2 max-w-2xl">Lokal yang mewadahi santri belajar bahasa Inggris memiliki beberapa media publikasi.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Buletin Respect -->
                    <div class="reveal delay-100 bg-white rounded-3xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Buletin Respect</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-3">Buletin berbahasa Inggris yang diterbitkan setiap semester oleh kru khusus (tutor dan sebagian member EAL). Berisi tulisan karya member EAL dan santri Annuqayah secara umum.</p>
                        <div class="flex flex-wrap gap-1 text-[10px] text-slate-500">
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Greeting</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Post Office</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Comment</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Main Topic</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Opinion</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Review</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Story</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">About EAL</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Poem</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Do You Know?</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Figure</span>
                        </div>
                    </div>

                    <!-- Mading ECS -->
                    <div class="reveal delay-200 bg-white rounded-3xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Mading ECS</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-3">Mading berbahasa Inggris (English Creativity Space) yang dikelola kelas akhir EAL. Berisi tulisan khusus member Translation Class, terbit setiap pekan.</p>
                        <div class="flex flex-wrap gap-1 text-[10px] text-slate-500">
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Greeting</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Opinion</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Review</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Poem</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Story</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Figure</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Essay</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Joke</span>
                        </div>
                    </div>

                    <!-- Mading The Real -->
                    <div class="reveal delay-300 bg-white rounded-3xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Mading The Real</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-3">Mading berbahasa Inggris (The Read Academic Literature) yang dikelola tutor dan member Reading Class. Berisi tulisan khusus member Reading Class, terbit setiap dua pekan.</p>
                        <div class="flex flex-wrap gap-1 text-[10px] text-slate-500">
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Greeting</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Opinion</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Review</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Poem</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Story</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Brain Out</span>
                        </div>
                    </div>

                    <!-- Mading Soul -->
                    <div class="reveal delay-400 bg-white rounded-3xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Mading Soul</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-3">Mading berbahasa Inggris (Speaking Opus of Literature) yang dikelola tutor dan member Speaking Class. Berisi tulisan khusus member Speaking Class, terbit setiap dua pekan.</p>
                        <div class="flex flex-wrap gap-1 text-[10px] text-slate-500">
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Greeting</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Opinion</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Review</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Poem</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Story</span>
                            <span class="bg-slate-50 px-2 py-1 rounded border border-slate-200">Motivation</span>
                        </div>
                    </div>

                    <!-- LHO (Tambahan dari daftar) -->
                    <div class="reveal delay-500 bg-white rounded-3xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">LHO</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">Salah satu media publikasi EAL yang disebutkan dalam daftar, melengkapi ekosistem literasi berbahasa Inggris di lingkungan pesantren.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Jadilah Bagian dari Tradisi Literasi</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Kembangkan kemampuan menulismu dan berkontribusi dalam media publikasi pesantren.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
