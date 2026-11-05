<x-layouts::guest title="Ketertiban dan Konseling">

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
                            Ketertiban & Konseling
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        Harmoni dalam<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Kedisiplinan & Kepedulian</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Membangun lingkungan pesantren yang aman, tertib, dan penuh perhatian melalui pendekatan bimbingan konseling serta penegakan aturan yang humanis.
                    </p>
                </div>
            </div>
        </section>

        <!-- Satgas BK -->
        <section class="py-20 bg-white" id="satgas-bk">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Satgas BK</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Bimbingan & Konseling</h2>
                    <p class="text-slate-500 text-sm mt-2 max-w-3xl">Satuan Tugas Bimbingan dan Konseling (BK) berada di bawah struktur Pengurus Harian. BK dibentuk sebagai upaya memberikan solusi psikologis bagi santri yang membutuhkan bimbingan konseling atau tempat curhat yang nyaman, layaknya bersama orang tua mereka di rumah.</p>
                </div>

                <!-- GAMBAR UTAMA SECTION -->
                <div class="reveal delay-100 mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 h-64 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Konseling dan Keamanan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                        <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Satgas BK dan KAMTIB bekerja bersama menciptakan lingkungan pesantren yang aman, tertib, dan penuh perhatian.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Program BK</h3>
                        <ul class="space-y-3 text-sm text-slate-600">
                            <li class="flex items-start gap-3">
                                <span class="text-brand-500 mt-1 font-bold">1.</span>
                                <span>Pembinaan bagi siswa yang bermasalah.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-brand-500 mt-1 font-bold">2.</span>
                                <span>Rehabilitasi bagi santri yang memiliki masalah psikis yang cukup.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-brand-500 mt-1 font-bold">3.</span>
                                <span>Motivasi ala santri via mading (status BK).</span>
                            </li>
                        </ul>
                        <p class="text-xs text-slate-500 mt-4 italic">Program-program ini bersifat kondisional, mengingat umur BK yang masih muda.</p>
                    </div>

                    <div class="reveal-right bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                        <h3 class="text-xl font-bold mb-3">Program Non-Formal</h3>
                        <p class="text-sm text-brand-50 leading-relaxed mb-4">BK juga berperan sebagai teman curhat santri sekaligus orang tua mereka di pesantren. Program ini menjadi wadah untuk menampung curahan santri terkait serba-serbi masalah kecil kehidupan sehari-hari, disertai solusi dan motivasi yang membuat mereka kembali semangat.</p>
                        <div class="bg-white/10 rounded-xl p-4 border border-white/20">
                            <h4 class="text-xs font-bold text-brand-100 mb-1">Tenaga Asuh</h4>
                            <p class="text-xs text-brand-50">Terdiri dari berbagai elemen pengurus dan santri senior yang dianggap mampu mengemban tugas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- KAMTIB -->
        <section class="py-20 bg-slate-50" id="kamtib">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">KAMTIB</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Keamanan dan Ketertiban</h2>
                    <p class="text-slate-500 text-sm mt-2 max-w-3xl">Secara fungsional, Kamtib berperan aktif dalam penertiban serta penerapan regulasi yang ada dalam Undang-undang serta peraturan tak tertulis Pondok Pesantren Annuqayah Latee, serta menjaga keamanan pondok dari segala hal yang bisa mengganggu eksistensinya.</p>
                </div>

                <div class="reveal bg-white rounded-3xl p-8 shadow-sm border border-slate-100">
                    <p class="text-sm text-slate-600 leading-relaxed">Secara nilai, peran Kamtib tak jauh berbeda dengan peran BK. Atas dasar itulah, departemen ini menjadi salah satu elemen penting di samping elemen lainnya dalam menjaga stabilitas dan ketenteraman lingkungan pesantren.</p>
                </div>
            </div>
        </section>

        <!-- Prosedur Pulang Santri -->
        <section class="py-20 bg-white" id="prosedur-pulang">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-12 text-center">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">Prosedur</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Prosedur Perizinan Pulang Santri</h2>
                    <p class="text-slate-500 text-sm mt-2 max-w-xl mx-auto">Ketentuan dan alur perizinan pulang bagi santri Annuqayah Latee, baik dalam keadaan sakit maupun keperluan lainnya.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="reveal delay-100 bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-lg font-bold text-slate-900 mb-4 pb-2 border-b border-slate-200">Pulang Sakit</h3>
                        <ol class="space-y-3 text-sm text-slate-600 list-decimal list-inside">
                            <li>Wali meminta memo kesehatan ke Balai Kesehatan Tradisional (BKT).</li>
                            <li>Meminta rekomendasi pengurus rayon.</li>
                            <li>Meminta rekomendasi pengurus Keamanan dan Ketertiban (Kamtib).</li>
                            <li>Santri diberikan izin pulang selama <strong>3 hari</strong>. Lebih dari itu, wali harus memperpanjang dengan membawa surat keterangan dari dokter setempat.</li>
                            <li>Untuk santri di luar pulau Madura, perpanjangan dapat dilakukan melalui telepon ke kantor Kamtib.</li>
                        </ol>
                    </div>

                    <div class="reveal delay-200 bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-lg font-bold text-slate-900 mb-4 pb-2 border-b border-slate-200">Pulang Selain Sakit</h3>
                        <ol class="space-y-3 text-sm text-slate-600 list-decimal list-inside">
                            <li>Santri meminta memo hafalan ke kantor Kamtib.</li>
                            <li>Santri menyetorkan hafalan wajib kepada pengurus yang telah ditentukan sesuai tingkatan kelas diniyah.</li>
                            <li>Santri meminta memo rayon bersama wali.</li>
                            <li>Santri diberikan izin pulang selama <strong>1 hari</strong>. Lebih dari itu harus izin kepada pengasuh.</li>
                        </ol>
                    </div>

                    <div class="reveal delay-300 bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                        <h3 class="text-lg font-bold mb-4 pb-2 border-b border-white/20">Pulang Kifayah</h3>
                        <ol class="space-y-3 text-sm text-brand-50 list-decimal list-inside">
                            <li>Santri diberikan izin pulang dengan syarat <strong>diparani oleh wali</strong>.</li>
                            <li>Santri diberikan izin pulang selama <strong>1 hari</strong>. Lebih dari itu harus izin kepada pengasuh.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Lingkungan yang Aman & Mendukung</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Kami percaya bahwa ketertiban dan kepedulian adalah fondasi tumbuh kembang santri yang optimal. Mari menjadi bagian dari komunitas yang harmonis ini.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
