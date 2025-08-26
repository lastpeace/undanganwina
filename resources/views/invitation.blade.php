@extends('layouts.app')

@section('content')


<style>
@keyframes pop {
    0% { transform: scale(0); opacity: 0; }
    100% { transform: scale(1); opacity: 1; }
}
@keyframes slide-left {
    0% { transform: translateX(-50px); opacity: 0; }
    100% { transform: translateX(0); opacity: 1; }
}
@keyframes slide-right {
    0% { transform: translateX(50px); opacity: 0; }
    100% { transform: translateX(0); opacity: 1; }
}
.animate-pop {
    animation: pop 0.6s ease forwards;
    animation-delay: 0.3s;
}
.animate-slide-left {
    animation: slide-left 0.8s ease forwards;
    animation-delay: 0.4s;
}
.animate-slide-right {
    animation: slide-right 0.8s ease forwards;
    animation-delay: 0.4s;
}
#countdown .text-4xl { font-variant-numeric: tabular-nums; }

#music-control {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #325d55; 
        color: #111827; 
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        cursor: pointer;
        z-index: 9999;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        transition: transform 0.2s ease, background 0.2s ease;
    }
    #music-control:hover {
        background: #ccd6c0; /* lebih terang saat hover */
        transform: scale(1.1);
    }
</style>

<style>
@keyframes fadeIn {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn { animation: fadeIn 2s ease-in-out; }
</style>

<div class="w-full  min-h-screen font-['Playfair Display'] text-white" style="background-color : #325d55">
    {{-- Hero Section --}}
<section class="relative w-full h-screen flex flex-col justify-center items-center text-center bg-cover bg-center 
        bg-gradient-to-b from-[#013128] to-[#325d55]"
        style="background-image: url('{{ asset('images/background.png') }}');">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Konten Utama -->
    <div class="relative z-10 animate-fadeIn">
        <p class="uppercase tracking-widest text-sm md:text-base text-white-300 mb-3">Kepada</p>
        <p class="uppercase tracking-widest text-sm md:text-base text-white-300 mb-3">{{ $guest->name }}</p>
        <p class="uppercase tracking-widest text-sm md:text-base text-white-300 mb-3">We invite you to the Wedding of</p>
        <h1 class="font-['Lora'] italic text-6xl md:text-8xl text-white drop-shadow-lg">Rasyad & Wina</h1>
        <p class="mt-4 text-lg md:text-xl text-gray-200 italic">Sabtu, 13 September 2025</p>
        <p class="text-gray-300 text-sm md:text-base">Kediaman Mempelai Wanita, Majalengka</p>

        <!-- Tombol Lihat Undangan -->
        <a href="#mempelai" id="lihatUndanganBtn" 
   class="mt-8 inline-block px-8 py-3 bg-slate-500 text-gray-900 font-semibold rounded-full 
          shadow-lg hover:bg-slate-400 transition transform hover:scale-105">
    Buku Undangan
</a>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 z-10">
        <div class="animate-bounce text-white text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
            </svg>
            <span class="text-sm">Tekan tombol di atas</span>
        </div>
    </div>
</section>

{{-- Section Mempelai --}}
<section id="mempelai" class="py-16 px-6 bg-gradient-to-b from-[#ccd6c0] to-[#9bb5a4]">
    <h2 class="text-3xl font-bold text-slate-800 text-center mb-10">Mempelai</h2>

    {{-- Pembukaan --}}
    <div class="text-center mb-10">
        <div class="p-6 rounded-lg md:w-1/2 mx-auto">
            <p class="text-slate-800 italic font-['Lora']">
                Dengan segala kerendahan hati dan rasa syukur atas rahmat serta karunia Allah SWT, 
                kami ingin berbagi kabar bahagia tentang pernikahan kami.<br>
                Kehadiran dan doa restu dari Bapak/Ibu/Saudara/i akan menjadi kehormatan 
                dan kebahagiaan bagi kami.
            </p>
        </div>
        <div class="p-6 rounded-lg md:w-1/2 mx-auto mt-6 ">
            <h3 class="text-xl font-semibold text-slate-800 mb-2">Allah Subhanahu Wa Ta'ala berfirman</h3>
            <p class="text-slate-800 italic font-['Lora']">
                Dan segala sesuatu Kami ciptakan <br> 
                berpasang-pasangan <br> 
                agar kamu mengingat (kebesaran Allah).
            </p>
            <p class="mt-2 text-black font-['Lora']">QS. Adh-Dhariyat: 49</p>
        </div>
    </div>

    {{-- Data Mempelai --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto items-start">
    {{-- Mempelai Pria --}}
    <div class="text-center flex flex-col h-full justify-start">
        <h3 class="text-3xl font-['Lora'] italic text-slate-800 mt-6">
            Muhammad Abdullah Rasyad, S.T.
        </h3>
        <p class="mt-2 text-slate-800 italic font-['Lora']">
            Putra dari <br>
            Muhammad Wachid Muslih <br>& <br>Dwi Erviani
        </p>
        <p class="mt-4 text-slate-800 font-['Lora']">Jogja, Jawa Tengah</p>
    </div>

    {{-- Mempelai Wanita --}}
    <div class="text-center flex flex-col h-full justify-start">
        <h3 class="text-3xl font-['Lora'] italic text-slate-800 mt-6">
            Wina Azhariyati Muchlis, S.T.
        </h3>
        <p class="mt-2 text-slate-800 italic font-['Lora']">
            Putri dari <br>
            Muhlis <br>& <br>Ii Bidayah
        </p>
        <p class="mt-4 text-slate-800 font-['Lora']">Majalengka, Jawa Barat</p>
    </div>
</div>

</section>

    {{-- Section Our Story --}}
    <section class="py-16 px-6 relative overflow-hidden bg-gradient-to-b from-[#9bb5a4] to-[#325d55]">
    <h2 class="text-3xl font-bold text-black text-center mb-12">Our Story</h2>
        <div class="max-w-3xl mx-auto relative">
            @php
                $timeline = [
                    ['year' => '2024', 'title' => 'The Beginning', 'desc' => 'Sekelas di bangku kuliah, tetapi hidup seolah tak pernah benar-benar mempertemukan.
                                                                            Dekat, tapi tak pernah benar-benar bersentuhan.
                                                                            Masing-masing menapaki jalannya sendiri dan hanya dibutuhkan sedikit pemantik untuk saling menoleh kembali.
                                                                            Lelaki yang mungkin dulu tampak acuh, perlahan mendekat memberanikan diri.
                                                                            Percakapan sederhana perlahan mencairkan jarak, berkembang berganti niat
                                                                            '],
                    ['year' => '2025', 'title' => 'Second Phase', 'desc' => 'Hari dimana lelaki mengutarakan niat baiknya untuk melamar. Sambutan hangat datang dari keluarga kedua belah pihak. Menetapkan tanggal 13 September 2025 sebagai tanggal untuk mengikrarkan janji suci.'],
                    ['year' => '2025', 'title' => 'Third Phase', 'desc' => 'Enam bulan mungkin bukan waktu yang panjang, tapi cukup untuk saling belajar.
Penyesuaian, pertukaran pikiran, bahkan guncangan yang menguji hati satu sama lain.'],
                    ['year' => '2025', 'title' => 'The Sacred Oath', 'desc' => 'Kami sadar, ini baru permulaan dari perjalanan panjang kami.
Dengan segala kerendahan hati, kami memohon doa restu. Semoga ikhtiar ini diridai, dijaga agar tetap langgeng, dan dipersatukan hingga ke Surga-Nya.'],
                ];
            @endphp

            <div class="space-y-12">
                @foreach($timeline as $index => $item)
                    <div class="flex flex-col md:flex-row items-center relative group">
                        
                        @if($index % 2 == 0)
                            {{-- Kiri: Cerita --}}
                            <div class="md:w-5/12 text-right order-2 md:order-1 animate-slide-left opacity-0">
                                <h3 class="text-xl font-semibold text-black">{{ $item['title'] }}</h3>
                                <p class="mt-2 text-slate-800 text-justify">{{ $item['desc'] }}</p>
                            </div>
                            {{-- Titik --}}
                            <div class="order-1 md:order-2 flex flex-col items-center mx-4">
                                <div class="w-6 h-6  rounded-full shadow-lg scale-0 animate-pop" style="background-color : #013128"></div>
                                <span class="mt-2 text-black font-bold">{{ $item['year'] }}</span>
                            </div>
                            {{-- Kosong kanan --}}
                            <div class="md:w-5/12 order-3"></div>
                        @else
                            {{-- Kosong kiri --}}
                            <div class="md:w-5/12 order-1"></div>
                            {{-- Titik --}}
                            <div class="order-2 flex flex-col items-center mx-4">
                                <div class="w-6 h-6  rounded-full shadow-lg scale-0 animate-pop"  style="background-color : #013128"></div>
                                <span class="mt-2 text-black font-bold">{{ $item['year'] }}</span>
                            </div>
                            {{-- Kanan: Cerita --}}
                            <div class="md:w-5/12 text-left order-3 animate-slide-right opacity-0">
                                <h3 class="text-xl font-semibold text-black">{{ $item['title'] }}</h3>
                                <p class="mt-2 text-slate-800">{{ $item['desc'] }}</p>
                            </div>
                        @endif

                    </div>
                @endforeach
            </div>
        </div>
    </section>

     {{-- Detail Acara --}}
    <section id="acara" class="py-16 px-6 bg-gradient-to-b from-[#325d55] to-[#246047]">
    <h2 class="text-3xl font-bold text-white text-center mb-6">Detail Acara</h2>
    <h2 class="font-arabic py-4 m-0 text-center text-white" style="font-size: 2rem;">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h2>
    <p class="max-w-2xl mx-auto text-white text-center">
        Dengan memohon rahmat dan ridho Allah SWT, kami bermaksud menyelenggarakan resepsi pernikahan kami.
    </p>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
        <div class="border border-white-500 p-6 rounded-lg shadow-lg md:col-span-2 md:w-1/2 mx-auto text-center" style="background-color: #325d55;">
            <h3 class="text-xl font-semibold text-white-300 mb-2 text-center"> Allah Subhanahu Wa Ta'ala berfirman</h3>
            <p> Dan di antara tanda-tanda (kebesaran) -Nya ialah Dia menciptakan pasangan-pasangan untukmu dari (jenis) 
                dirimu sendiri agar kamu merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa cinta dan kasih sayang. 
                Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir</p>
            <p class="mt-2 text-gray-400">QS. Ar - Rum : 21</p>
        </div>
        <div class="border border-white-500 p-6 rounded-lg shadow-lg" style="background-color: #325d55;">
            <h3 class="text-xl font-semibold text-white-300 mb-2">Akad Nikah</h3>
            <p>Saturday, 13 September 2025<br>08:00 - 10.00 WIB</p>
            <p class="mt-2 text-gray-400">Kediaman Mempelai Perempuan</p>
            <p class="mt-2 text-gray-400">Blok Desa Genteng RT/RW 001/001 Desa Genteng, Kec. Banjaran</p>
        </div>

        <div class="border border-white-500 p-6 rounded-lg shadow-lg" style="background-color: #325d55;">
            <h3 class="text-xl font-semibold text-white-300 mb-2">Resepsi</h3>
            <p>Saturday, 13 September 2025<br>11.00 - 15.00 WIB</p>
            <p class="mt-2 text-gray-400">Kediaman Mempelai Perempuan</p>
            <p class="mt-2 text-gray-400">Blok Desa Genteng RT/RW 001/001 Desa Genteng, Kec. Banjaran</p>
        </div>

       
    </div>
    </section>

    {{-- Section Countdown / Perhitungan Mundur --}}
    <section id="countdown-section" class="py-12 px-6 bg-gradient-to-b from-[#246047] to-[#013128]">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Countdown</h2>
            <p class="text-white mb-6">Menuju hari bahagia kami, jangan sampai terlewat!</p>

            {{-- set data-time sesuai tanggal & jam acara (format: YYYY-MM-DD HH:MM:SS) --}}
            <div id="countdown" data-time="2025-09-13 08:00:00" class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <div class="bg-gray-800 border border-white rounded-lg p-4">
                    <div class="text-4xl font-semibold text-white" id="countdown-days">0</div>
                    <div class="text-sm text-gray-400 mt-1">Hari</div>
                </div>
                <div class="bg-gray-800 border border-white rounded-lg p-4">
                    <div class="text-4xl font-semibold text-white" id="countdown-hours">0</div>
                    <div class="text-sm text-gray-400 mt-1">Jam</div>
                </div>
                <div class="bg-gray-800 border border-white rounded-lg p-4">
                    <div class="text-4xl font-semibold text-white" id="countdown-minutes">0</div>
                    <div class="text-sm text-gray-400 mt-1">Menit</div>
                </div>
                <div class="bg-gray-800 border border-white rounded-lg p-4">
                    <div class="text-4xl font-semibold text-white" id="countdown-seconds">0</div>
                    <div class="text-sm text-gray-400 mt-1">Detik</div>
                </div>
            </div>

            <p id="countdown-message" class="mt-4 text-green-300 hidden"></p>
        </div>
    </section>
    
    {{-- Section Konfirmasi Kehadiran --}}
    <section class="py-12 px-6 bg-gradient-to-b from-[#013128] to-[#325d55]">
    <h2 class="text-3xl font-bold text-white text-center mb-6">Konfirmasi Kehadiran</h2>
        <form method="POST" action="{{ route('invitation.comment') }}" class="max-w-lg mx-auto bg-gray-800 p-6 rounded-lg border border-white">
            @csrf
            <input type="hidden" name="code" value="{{ $guest->code ?? '' }}">
            <div class="mb-4">
                <label class="block text-gray-300 mb-2">Nama</label>
                <input type="text" value="{{ $guest->name ?? 'Tamu' }}" readonly class="w-full p-3 rounded bg-gray-700 text-gray-200">
            </div>
            <div class="mb-4">
                <label class="block text-gray-300 mb-2">Status Kehadiran</label>
                <select name="status" class="w-full p-3 rounded bg-gray-700 text-gray-200" required>
                    <option value="">Pilih</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
            </div>
             <div class="mb-4">
                <label class="block text-gray-300 mb-2">Status Kehadiran</label>
                <select name="jumlah_tamu" class="w-full p-3 rounded bg-gray-700 text-gray-200" required>
                    <option value="">Pilih</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-300 mb-1">Ucapan & Doa</label>
                <p class="mb-2 text-gray-400">Kami mengundang Bapak/Ibu/Saudara/i untuk sejenak menyampaikan salam hangat serta doa-doa terbaik</p>
                <textarea name="comment" class="w-full p-3 rounded bg-gray-700 text-gray-200" rows="3"></textarea>
            </div>
            <button type="submit" class="w-full bg-white text-gray-900 py-3 rounded-lg hover:bg-white">Kirim</button>
        </form>
        
    </section>

    {{-- Section Daftar Tamu (Hanya jika ada komentar) --}}
    @php
    $guestsWithCommentsPaginated = \App\Models\Guest::whereNotNull('comment')
        ->where('comment', '!=', '')
        ->latest()
        ->paginate(5);

    // Tambahkan anchor di setiap link pagination
    $guestsWithCommentsPaginated->withPath(url()->current());
    @endphp

    @if($guestsWithCommentsPaginated->count() > 0)
<section id="comments" class="py-12 px-6 bg-gradient-to-b from-[#325d55] to-[#013128]">
    <div class="max-w-3xl mx-auto space-y-4">
        @foreach($guestsWithCommentsPaginated as $g)
            <div class=" border border-white p-4 rounded-lg shadow"  style="background-color : #013128">
                <p class="text-white font-semibold">{{ $g->name }}</p>
                <p class="text-gray-300 mt-1 italic">"{{ $g->comment }}"</p>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="mt-6 flex justify-center">
            {!! str_replace('/?', '/?#comments&', $guestsWithCommentsPaginated->links('pagination::tailwind')->toHtml()) !!}
    </div>
    </section>
    @endif

    {{-- Auto Scroll ke Komentar --}}
    @if(request()->has('page'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const target = document.getElementById("comments");
            if(target){
                target.scrollIntoView({ behavior: "smooth" });
            }
        });
    </script>
    @endif

    {{-- Section Hadiah Pernikahan --}}
<section class="py-16 px-6 bg-gradient-to-b from-[#013128] to-[#325d55] text-center relative overflow-hidden">
    <div class="max-w-3xl mx-auto bg-[#013128]/80 backdrop-blur-md border border-white/20 
                rounded-2xl shadow-2xl p-8 relative z-10">

        {{-- Judul --}}
        <h2 class="text-4xl font-bold text-white mb-3">Wedding Gift</h2>
        <p class="text-gray-200 mb-6 italic">
            Berikan doa restu, atau hadiah melalui rekening dibawah ini
        </p>

        {{-- Info Rekening --}}
        <div class="bg-gray-900/80 border border-white/10 rounded-xl p-5 shadow-inner mb-6 hover:scale-105 transition">
            <p class="text-white text-lg font-semibold">Mandiri - 134001054767</p>
            <p class="text-gray-300 text-sm">a.n. Wina Azhariati Muchlis</p>
        </div>
    </div>

    {{-- Efek background glow --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] 
                bg-[#013128] opacity-20 rounded-full blur-3xl"></div>
</section>


    {{-- Section Alamat & Maps --}}
   <section class="py-16 px-6 bg-gradient-to-b from-[#325d55] to-[#013128]">
    <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-white-400 mb-6">Alamat Acara</h2>
            <p class="text-gray-300 mb-8">
                Kediaman Mempelai Perempuan
                <br>
                Blok Desa Genteng <br>
                RT/RW 001/001
                <br>
                Desa Genteng
                Kec. Banjaran
                Jawa Barat, Indonesia
            </p>

            {{-- Google Maps Embed --}}
            <div class="rounded-lg overflow-hidden border-4 border-white-500 shadow-lg">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1218.240688064705!2d108.32445!3d-6.979907!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f3b1fd59e304d%3A0xcb708285952b8f5b!2sMuchlis%20House&#39;s!5e1!3m2!1sen!2sid!4v1755010244882!5m2!1sen!2sid" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            {{-- Tombol Petunjuk Arah --}}
            <div class="mt-6">
                <a href="https://www.google.com/maps/dir/?api=1&destination=-6.979966, 108.324465" 
                target="_blank" 
                class="inline-block px-6 py-3 bg-white text-gray-900 font-semibold rounded-lg shadow hover:bg-slate-800 transition">
                📍 Lihat Petunjuk Arah
                </a>
            </div>
        </div>
    </section>


    <audio id="bgMusic" loop>
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
    </audio>

    {{-- Penutup --}}
    <section class="py-16 px-6 bg-gradient-to-b from-[#013128] to-[#325d55] text-center relative overflow-hidden">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-white mb-4">Terima Kasih</h2>
            <p class="text-gray-300 leading-relaxed mb-6">
                Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir 
                dan memberikan doa restu pada hari pernikahan kami.
            </p>
            <p class="text-white font-semibold mb-8">
                Kehadiran dan doa Anda adalah hadiah terindah bagi kami.
            </p>

            {{-- Nama mempelai --}}
            <div class="text-white text-xl font-bold mb-2">Rasyad & Wina</div>
            <div class="text-gray-400 italic">~ Dengan penuh cinta ~</div>
        </div>

        {{-- Ornamen garis tipis --}}
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-32 border-t-2 border-white mt-8"></div>
    </section>

    {{-- Audio Player --}}
    <audio id="bg-music" autoplay loop >
         <source src="{{ asset('music/song.mp3') }}" type="audio/mpeg">
    </audio>
    <div id="music-control" title="Putar Musik">
    <button id="musicBtn">🎵</button>
</div>
</div>


<script>
const music = document.getElementById('bg-music');
    const musicBtn = document.getElementById('musicBtn');
    const undanganBtn = document.getElementById('lihatUndanganBtn');

    // Klik tombol "Lihat Undangan" → musik langsung jalan
    undanganBtn.addEventListener('click', function() {
        music.play();
        musicBtn.innerText = '⏸️';
    });

    // Tombol kontrol manual
    musicBtn.addEventListener('click', function(){
        if (music.paused) {
            music.play();
            this.innerText = '⏸️';
        } else {
            music.pause();
            this.innerText = '🎵';
        }
    });

//Script Jam 
(function () {
    // ambil container dan atribut data-time
    const countdownEl = document.getElementById('countdown');
    if (!countdownEl) return;

    // baca data-time, contoh format "2025-09-13 09:30:00"
    const timeString = countdownEl.getAttribute('data-time') || '';
    // konversi ke format ISO yang bisa diparse oleh Date: "YYYY-MM-DDTHH:MM:SS"
    const isoTime = timeString.trim().replace(' ', 'T');

    let targetDate = null;
    if (isoTime) {
        targetDate = new Date(isoTime);
        // jika browser gagal parse (NaN), coba menambahkan ":00" atau fallback
        if (isNaN(targetDate.getTime())) {
            // coba menambahkan 'Z' (UTC) lalu parse kembali
            const tryUtc = isoTime + 'Z';
            targetDate = new Date(tryUtc);
        }
    }

    const daysEl = document.getElementById('countdown-days');
    const hoursEl = document.getElementById('countdown-hours');
    const minutesEl = document.getElementById('countdown-minutes');
    const secondsEl = document.getElementById('countdown-seconds');
    const messageEl = document.getElementById('countdown-message');

    if (!targetDate || isNaN(targetDate.getTime())) {
        // invalid date: tampilkan pesan
        messageEl.classList.remove('hidden');
        messageEl.textContent = 'Tanggal acara belum diset atau format salah.';
        daysEl.textContent = hoursEl.textContent = minutesEl.textContent = secondsEl.textContent = '-';
        return;
    }

    function pad(n) {
        return n < 10 ? '0' + n : n;
    }

    function update() {
        const now = new Date();
        let diff = targetDate.getTime() - now.getTime(); // selisih ms

        if (diff <= 0) {
            // sudah sampai atau lewat
            daysEl.textContent = '00';
            hoursEl.textContent = '00';
            minutesEl.textContent = '00';
            secondsEl.textContent = '00';
            messageEl.classList.remove('hidden');
            messageEl.textContent = 'Hari ini adalah hari bahagia kami — sampai jumpa di acara!';
            clearInterval(timer);
            return;
        }

        // hitung komponen waktu
        const msInSecond = 1000;
        const msInMinute = msInSecond * 60;
        const msInHour = msInMinute * 60;
        const msInDay = msInHour * 24;

        // jumlah hari (bilangan bulat)
        const days = Math.floor(diff / msInDay);
        diff -= days * msInDay;

        // jumlah jam
        const hours = Math.floor(diff / msInHour);
        diff -= hours * msInHour;

        // jumlah menit
        const minutes = Math.floor(diff / msInMinute);
        diff -= minutes * msInMinute;

        // jumlah detik
        const seconds = Math.floor(diff / msInSecond);

        // tampilkan (dengan padding)
        daysEl.textContent = String(days);
        hoursEl.textContent = pad(hours);
        minutesEl.textContent = pad(minutes);
        secondsEl.textContent = pad(seconds);
    }

    // jalankan segera dan set interval 1 detik
    update();
    const timer = setInterval(update, 1000);
})();
</script>

{{-- Sakura Falling --}}
<style>
.sakura {
    position: fixed;
    top: -50px;
    pointer-events: none;
    animation: fall linear forwards;
}
@keyframes fall {
    to {
        transform: translateY(110vh) rotate(360deg);
    }
}
</style>

<script>
    function createSakura() {
        const sakura = document.createElement('div');
        sakura.classList.add('sakura');
        sakura.innerHTML = '🍀'; // bisa diganti 🌸 atau pakai <img>
        sakura.style.left = Math.random() * 100 + 'vw';
        sakura.style.fontSize = Math.random() * 20 + 20 + 'px';
        sakura.style.animationDuration = (Math.random() * 5 + 5) + 's'; 
        sakura.style.opacity = Math.random();

        document.body.appendChild(sakura);

        setTimeout(() => sakura.remove(), 10000);
    }

    // Deteksi ukuran layar
    let intervalTime = window.innerWidth < 768 ? 3500 : 800; 
    // HP = setiap 2 detik, Desktop = setiap 0.8 detik

    setInterval(createSakura, intervalTime);
</script>

<script>
  feather.replace(); // aktifkan feather icons
</script>


@endsection
