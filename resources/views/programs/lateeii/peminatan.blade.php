<x-layouts::guest title="Peminatan Latee II Putri">

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
                            Peminatan — Latee II Putri
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1]">
                        RLA &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-teal-500 animate-gradient-x text-gradient-animated">Aphrodite English Club</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 text-sm sm:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Wadah pengembangan bakat dan minat santri di bidang Bahasa Arab dan Bahasa Inggris.
                    </p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Peminatan -->
        <div class="reveal max-w-7xl mx-auto px-6 -mt-8 mb-12 relative z-10">
            <div class="overflow-hidden rounded-3xl shadow-xl border border-slate-100 h-64 md:h-96 relative group">
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Peminatan Bahasa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex items-end p-6 md:p-10">
                    <p class="text-white text-sm md:text-base font-semibold max-w-2xl leading-relaxed">Pengembangan bakat bahasa Arab dan Inggris melalui RLA dan AEC.</p>
                </div>
            </div>
        </div>

        <!-- RLA -->
        <section class="py-16 bg-white" id="rla">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">RLA</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Raudlah al-Lughah al-'Arabiyah</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Lembaga yang didirikan sejak tahun <strong>2002</strong> ini fokus pada pengembangan Bahasa Arab. Santri PPA Latee II yang memiliki bakat dan minat dalam Bahasa Arab diasah dengan beberapa kegiatan berbasis dan bernuansa Arab.</p>
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Tidak semua santri bisa mendaftar. Ada kriteria tertentu, nilai minimal, serta batasan sekolah formal yang harus dipenuhi. RLA memiliki tiga tingkatan: <strong>Mubtadi'ah, Mutawasithah, dan Mutaqaddimah</strong>.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 border border-slate-100 rounded-3xl p-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Kegiatan RLA</h3>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Hifdz al-Mufradat (harian, menambah kosakata)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Ta'miq al-Mauhibah (3 minggu sekali, memperdalam maharatul kalam)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Al-Majallah ad-Daftariyyah (1 periode, maharatul kitabah)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Istima' (1 minggu sekali, mendengarkan kalam Arab)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Musyahadah (nonton film Arab dan diresensi)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Musabaqah (lomba antar-marhalah, 1 periode)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Ibtikar al-Musyarikat (pentas seni dan pembagian hadiah)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-500 mt-1">•</span> Darsul Muqaranah (studi banding ke PP. DALWA Putri)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- AEC -->
        <section class="py-20 bg-slate-50" id="aec">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-xs font-bold tracking-widest text-brand-700 uppercase bg-brand-50 px-4 py-2 rounded-full border border-brand-100">AEC</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Aphrodite English Club</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="reveal-left bg-white rounded-3xl p-8 border border-slate-100 shadow-sm">
                        <p class="text-sm text-slate-600 leading-relaxed mb-4">Didirikan pada tahun <strong>2007</strong> sebagai lembaga fokus pendalaman Bahasa Inggris. Santri yang tertarik mendalami Bahasa Inggris ditampung di AEC. Serangkaian tes, karantina, dan pendaftaran menjadi prasyarat wajib.</p>
                        <p class="text-sm text-slate-600 leading-relaxed">AEC memiliki cabang (<strong>AEC Branch</strong>) di Latee II yang dibentuk pada tahun <strong>2018</strong>, dibuka bagi santri yang berminat selain anggota AEC serta non-lembaga. Program AEC Branch lebih sedikit dibanding program intensif di lembaga AEC sendiri.</p>
                    </div>
                    <div class="reveal-right bg-brand-600 text-white rounded-3xl p-8 shadow-xl shadow-brand-500/20">
                        <h3 class="text-xl font-bold mb-4">Kegiatan AEC</h3>
                        <ul class="space-y-2 text-sm text-brand-50">
                            <li class="flex items-start gap-2"><span class="text-brand-200 mt-1">•</span> Reading irregular verb and morning chat (setiap pagi)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-200 mt-1">•</span> Adding vocabularies (penambahan kosakata oleh pengurus)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4">Kembangkan Bakat Bahasamu</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Bergabunglah dengan RLA atau AEC dan kuasai Bahasa Arab serta Bahasa Inggris di Latee II Putri.</p>
                <a href="/#daftar" class="inline-flex items-center gap-3 bg-brand-600 hover:bg-brand-700 text-white font-bold px-8 py-4 rounded-full shadow-lg shadow-brand-500/30 transition-all duration-300 hover:-translate-y-1">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
