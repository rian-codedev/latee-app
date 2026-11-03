@php
    // ==========================================
    // SIMULASI TIPE ARTIKEL (Nanti diganti dengan $post->type)
    // Ubah ke 'news' atau 'article' untuk melihat perbedaannya
    // ==========================================
    $type = 'article';

    // Variabel warna dinamis untuk mempermudah
    $colorTheme = $type === 'news' ? 'rose' : 'brand';
    $badgeText = $type === 'news' ? 'Berita Terkini' : 'Artikel Pilihan';
    $heroTitle = $type === 'news'
        ? 'Musyawarah Besar (Mubes):<br /><span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-rose-400 animate-gradient-x text-gradient-animated">Laporan Akhir Periode & Pemilihan Ketua</span>'
        : 'Menjadi Khadim:<br /><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-brand-400 animate-gradient-x text-gradient-animated">Refleksi Kepemimpinan Santri Annuqayah Latee</span>';
@endphp

<x-layouts::guest :title="$type === 'news' ? 'Berita Terkini' : 'Artikel'">

    @include('partials.header')

    <main>
        <!-- BEGIN: Article Hero -->
        <section class="relative w-full py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center">
            <div class="relative w-full max-w-[1000px] min-h-[250px] md:min-h-[300px] rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl bg-white border border-slate-100 bg-texture-noise">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-slate-50/50"></div>
                    <div class="absolute top-0 -left-20 w-[300px] h-[300px] bg-{{ $colorTheme }}-300/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse-glow"></div>
                    <div class="absolute -bottom-40 right-0 w-[300px] h-[300px] bg-{{ $colorTheme }}-200/40 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse-glow" style="animation-delay: 2s;"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent"></div>
                </div>
                <div class="relative z-30 w-full px-8 md:px-12 py-10 text-center">

                    <!-- BADGE KATEGORI -->
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        @if($type === 'news')
                            <span class="inline-flex items-center gap-2 text-[10px] md:text-xs font-bold tracking-[0.2em] text-rose-700 uppercase bg-rose-50 border border-rose-200 px-4 py-2 rounded-full shadow-sm">
                                <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                                {{ $badgeText }}
                            </span>
                        @else
                            <span class="inline-flex items-center gap-2 text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 uppercase bg-brand-50 border border-brand-200 px-4 py-2 rounded-full shadow-sm">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                {{ $badgeText }}
                            </span>
                        @endif
                    </div>

                    <!-- JUDUL DINAMIS -->
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 leading-[1.15]">
                        {!! $heroTitle !!}
                    </h1>

                    <!-- META DATA -->
                    <div class="reveal delay-200 flex flex-wrap items-center justify-center gap-4 md:gap-6 text-xs text-slate-500 mt-6">
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-{{ $colorTheme }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            15 Mei 2026
                        </span>

                        @if($type === 'news')
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-{{ $colorTheme }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                Reporter: A. Fiqkyy
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-{{ $colorTheme }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Latee Putra
                            </span>
                        @else
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-{{ $colorTheme }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                5 Menit Baca
                            </span>
                        @endif

                        <span class="hidden md:block w-px h-4 bg-slate-300"></span>

                        <span class="flex items-center gap-1.5 font-medium">
                            <svg class="w-4 h-4 text-{{ $colorTheme }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            1.250 Dilihat
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- BEGIN: Article Content -->
        <section class="pb-20 bg-white">
            <div class="max-w-4xl mx-auto px-6">

                <!-- KONTEN UTAMA DENGAN PROSE -->
                <div class="reveal prose prose-slate max-w-none
                            prose-img:rounded-2xl prose-img:shadow-lg prose-img:border prose-img:border-slate-200 prose-img:w-full prose-img:object-cover prose-img:my-8
                            prose-figcaption:text-center prose-figcaption:text-sm prose-figcaption:text-slate-500 prose-figcaption:mt-2
                            prose-a:text-{{ $colorTheme }}-600 hover:prose-a:text-{{ $colorTheme }}-700
                            prose-blockquote:border-{{ $colorTheme }}-500 prose-blockquote:bg-{{ $colorTheme }}-50/50 prose-blockquote:py-2 prose-blockquote:px-6 prose-blockquote:rounded-r-xl prose-blockquote:not-italic prose-blockquote:text-slate-700">

                    <p class="lead text-lg">
                        <strong>Latee Putra</strong> — Sebagai bentuk tanggung jawab atas amanah kepengurusan selama satu periode, maka panitia khusus (Pansus) menyelenggarakan Laporan kegiatan Akhir Periode (LAP) masa khidmah 2024–2026.
                    </p>

                    <!-- BACA JUGA (Hanya untuk NEWS) -->
                    @if($type === 'news')
                        <div class="not-prose my-8 bg-rose-50 border border-rose-100 p-4 rounded-xl flex items-start gap-3">
                            <svg class="w-5 h-5 text-rose-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <div>
                                <span class="text-xs font-bold text-rose-600 uppercase tracking-wider block mb-1">Baca Juga</span>
                                <a href="#" class="text-sm font-semibold text-slate-900 hover:text-rose-600 transition-colors">Pemilihan Ketua Pengurus Baru Berlangsung Ketat, 3 Kandidat Terkuat Muncul</a>
                            </div>
                        </div>
                    @endif

                    <figure>
                        <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=1000&auto=format&fit=crop" alt="Suasana Musyawarah Besar">
                        <figcaption>Suasana Laporan Akhir Periode (LAP) masa khidmah 2024–2026 di Musala Pondok Pesantren Annuqayah Latee.</figcaption>
                    </figure>

                    <p>
                        Acara tersebut berlangsung pada <strong>Jumat (15/05/2026)</strong> bertempat di Musala Pondok Pesantren Annuqayah Latee. Kegiatan ini dihadiri sekitar <strong>128 orang</strong> yang terdiri dari Pengasuh, MPP, serta seluruh pengurus.
                    </p>

                    <blockquote>
                        <p>"Laporan kegiatan akhir periode ini di dalamnya kami menyampaikan status terlaksananya atau tidaknya suatu program kerja di masing-masing tingkatan kepengurusan..."</p>
                        <footer>— Ustaz Ahmad Rofiq, Ketua Pengurus</footer>
                    </blockquote>

                    <h3>Pesan Pengasuh: Menjadi Khadim</h3>

                    <p>
                        Dalam sambutannya, <strong>K.H. Abd. A'la Basyir</strong> menyampaikan terima kasih sebesar-besarnya kepada pengurus atas pengabdiannya kepada Allah melalui pondok pesantren.
                    </p>

                    <p>
                        "Makanya para kiai itu <em>khãdimul ma'had</em>, wong kiainya saja mengaku <em>khãdim</em>, apalagi pengurusnya," tambah beliau.
                    </p>
                </div>

                <!-- BIO PENULIS (Hanya untuk ARTICLE) -->
                @if($type === 'article')
                    <div class="mt-12 bg-slate-50 border border-slate-200 rounded-3xl p-6 md:p-8 flex flex-col md:flex-row items-center md:items-start gap-6 reveal">
                        <img src="https://ui-avatars.com/api/?name=A+Fiqkyy&background=2C3E50&color=fff&size=100" alt="Penulis" class="w-20 h-20 rounded-full object-cover shadow-md shrink-0">
                        <div class="text-center md:text-left">
                            <h4 class="text-lg font-bold text-slate-900">A. Fiqkyy</h4>
                            <p class="text-xs text-brand-600 font-semibold mb-2">Kontributor Annuqayah Latee</p>
                            <p class="text-sm text-slate-600 leading-relaxed">Santri aktif yang memiliki ketertarikan besar pada dunia literasi, jurnalistik, dan pengembangan sumber daya manusia. Menulis adalah cara saya untuk mengabadikan momen dan berbagi inspirasi.</p>
                        </div>
                    </div>
                @endif

                <!-- ========================================== -->
                <!-- BAGIAN INTERAKSI (LIKE, SHARE, KOMENTAR)   -->
                <!-- ========================================== -->
                <div class="mt-12 pt-8 border-t border-slate-200 reveal">

                    <!-- Action Bar: Like & Share -->
                    <div class="flex flex-wrap items-center justify-between gap-4 mb-10">
                        <div class="flex items-center gap-3">
                            <!-- Tombol Like (Warna Dinamis) -->
                            <button type="button" class="group inline-flex items-center gap-2 {{ $type === 'news' ? 'bg-rose-50 hover:bg-rose-100 text-rose-600 border-rose-200' : 'bg-brand-50 hover:bg-brand-100 text-brand-600 border-brand-200' }} border px-5 py-2.5 rounded-full font-semibold text-sm transition-all duration-300 hover:-translate-y-0.5 shadow-sm">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                <span>Suka (128)</span>
                            </button>

                            <!-- Tombol Share -->
                            <button type="button" class="group inline-flex items-center gap-2 bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 px-5 py-2.5 rounded-full font-semibold text-sm transition-all duration-300 hover:-translate-y-0.5 shadow-sm">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                                <span>Bagikan</span>
                            </button>
                        </div>
                        <span class="text-sm text-slate-500 font-medium">3 Komentar</span>
                    </div>

                    <!-- List Komentar -->
                    <div class="space-y-6 mb-10">
                        <!-- Komentar 1 -->
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full {{ $type === 'news' ? 'bg-rose-100 text-rose-700' : 'bg-brand-100 text-brand-700' }} flex items-center justify-center font-bold shrink-0">A</div>
                            <div class="flex-1 bg-slate-50 p-4 rounded-2xl rounded-tl-none border border-slate-100">
                                <div class="flex items-center justify-between mb-1">
                                    <h4 class="text-sm font-bold text-slate-900">Ahmad Fauzi</h4>
                                    <span class="text-[10px] text-slate-400">2 jam yang lalu</span>
                                </div>
                                <p class="text-sm text-slate-600">Alhamdulillah, semoga kepengurusan yang baru semakin membawa keberkahan dan kemajuan untuk Annuqayah Latee.</p>
                            </div>
                        </div>
                        <!-- Komentar 2 -->
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center font-bold shrink-0">S</div>
                            <div class="flex-1 bg-slate-50 p-4 rounded-2xl rounded-tl-none border border-slate-100">
                                <div class="flex items-center justify-between mb-1">
                                    <h4 class="text-sm font-bold text-slate-900">Siti Aminah</h4>
                                    <span class="text-[10px] text-slate-400">5 jam yang lalu</span>
                                </div>
                                <p class="text-sm text-slate-600">Terima kasih atas laporan dan dedikasinya selama satu periode. Sangat menginspirasi!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form Komentar -->
                    <div class="bg-slate-50 p-6 md:p-8 rounded-3xl border border-slate-100">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Tinggalkan Komentar</h3>
                        <form action="#" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="block text-xs font-semibold text-slate-700 mb-1">Nama Lengkap</label>
                                    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:border-{{ $colorTheme }}-500 focus:ring-2 focus:ring-{{ $colorTheme }}-200 outline-none transition-all text-sm bg-white">
                                </div>
                                <div>
                                    <label for="email" class="block text-xs font-semibold text-slate-700 mb-1">Alamat Email</label>
                                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:border-{{ $colorTheme }}-500 focus:ring-2 focus:ring-{{ $colorTheme }}-200 outline-none transition-all text-sm bg-white">
                                </div>
                            </div>
                            <div>
                                <label for="comment" class="block text-xs font-semibold text-slate-700 mb-1">Komentar</label>
                                <textarea id="comment" name="comment" rows="4" placeholder="Tulis komentar Anda di sini..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-{{ $colorTheme }}-500 focus:ring-2 focus:ring-{{ $colorTheme }}-200 outline-none transition-all text-sm bg-white resize-none"></textarea>
                            </div>
                            <div class="flex justify-end pt-2">
                                <button type="submit" class="inline-flex items-center gap-2 {{ $type === 'news' ? 'bg-rose-600 hover:bg-rose-700 shadow-rose-500/30' : 'bg-brand-600 hover:bg-brand-700 shadow-brand-500/30' }} text-white font-semibold px-6 py-2.5 rounded-full transition-all duration-300 hover:-translate-y-0.5 shadow-lg">
                                    <span>Kirim Komentar</span>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

                <!-- Tombol Kembali -->
                <div class="mt-12 text-center reveal">
                <a href="/#berita" class="inline-flex items-center gap-2 bg-slate-900 {{ $type === 'news' ? 'hover:bg-rose-600' : 'hover:bg-brand-600' }} text-white font-semibold px-6 py-3 rounded-full transition-all duration-300 group">
                    <!-- Perbaikan: Tag <article> diganti menjadi <svg> -->
                    <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <span>Kembali ke Berita</span>
                </a>
            </div>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
