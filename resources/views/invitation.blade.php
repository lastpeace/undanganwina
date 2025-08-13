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
        background: #facc15; /* kuning emas */
        color: #111827; /* abu gelap */
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
        background: #fde047; /* lebih terang saat hover */
        transform: scale(1.1);
    }
</style>

<div class="w-full  min-h-screen font-[Josefin Sans] text-white" style="background-color : #325d55">
    {{-- Hero Section --}}
   <section class="relative w-full h-screen flex flex-col justify-center items-center text-center bg-cover bg-center"
        style="background-image: url('https://images.unsplash.com/photo-1529257414770-1960c85f7844?auto=format&fit=crop&w=1950&q=80');">
        <div class=" absolute inset-0" style="background-color : #325d55" ></div>
        <div class="relative z-10">
            <h1 class="font-[Sacramento] text-6xl md:text-8xl text-white">Rasyad & Wina</h1>
            <p class="mt-4 text-lg md:text-xl text-white">Minggu, 1 Januari 2024</p>
           
        </div>
    </section>

    {{-- Section Perkenalan Mempelai --}}
    <section class="py-16 px-6" style="background-color : #2e522a">
        <h2 class="text-3xl font-bold text-white-400 text-center mb-10">Mempelai</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
            
            {{-- Mempelai Pria --}}
            <div class="text-center">
                <img src="https://images.unsplash.com/photo-1604999565976-8913d1d83a6f?auto=format&fit=crop&w=600&q=80" 
                    alt="Mempelai Pria"
                    class="w-48 h-48 object-cover rounded-full border-4 border-white-500 mx-auto mb-6 shadow-lg">
                <h3 class="text-2xl font-semibold text-white-300">Rasyad Al Fikri</h3>
                <p class="mt-2 text-gray-300 italic">Putra dari Bapak Ahmad & Ibu Siti</p>
                <p class="mt-4 text-gray-400 max-w-md mx-auto">
                    Jogja, Jawa Tengah
                </p>
            </div>

            {{-- Mempelai Wanita --}}
            <div class="text-center">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=600&q=80" 
                    alt="Mempelai Wanita"
                    class="w-48 h-48 object-cover rounded-full border-4 border-white-500 mx-auto mb-6 shadow-lg">
                <h3 class="text-2xl font-semibold text-white-300">Wina Maharani</h3>
                <p class="mt-2 text-gray-300 italic">Putri dari Bapak Budi & Ibu Rina</p>
                <p class="mt-4 text-gray-400 max-w-md mx-auto">
                    Majalengka, Jawa Barat
                </p>
            </div>

        </div>
    </section>

    {{-- Section Our Story --}}
    <section class="py-16 px-6 bg-gray-800 relative overflow-hidden">
        <h2 class="text-3xl font-bold text-yellow-400 text-center mb-12">Our Story</h2>
        
        <div class="max-w-3xl mx-auto relative">
            @php
                $timeline = [
                    ['year' => '2018', 'title' => 'Pertemuan Pertama', 'desc' => 'Kami pertama kali bertemu di sebuah acara kampus pada tahun 2018. Saat itu hanya saling menyapa, namun siapa sangka itu menjadi awal kisah kami.'],
                    ['year' => '2019', 'title' => 'Mulai Dekat', 'desc' => 'Setahun kemudian, kami mulai sering berkomunikasi dan bertukar cerita. Dukungan satu sama lain membuat hubungan semakin erat.'],
                    ['year' => '2023', 'title' => 'Lamaran', 'desc' => 'Awal tahun 2023, kami melangkah ke tahap yang lebih serius. Momen lamaran menjadi awal baru bagi perjalanan kami.'],
                    ['year' => '2024', 'title' => 'Hari Bahagia', 'desc' => 'Tahun ini, kami resmi mengikat janji suci. Semoga perjalanan ini penuh kebahagiaan, cinta, dan berkah dari Allah SWT.'],
                ];
            @endphp

            <div class="space-y-12">
                @foreach($timeline as $index => $item)
                    <div class="flex flex-col md:flex-row items-center relative group">
                        
                        @if($index % 2 == 0)
                            {{-- Kiri: Cerita --}}
                            <div class="md:w-5/12 text-right order-2 md:order-1 animate-slide-left opacity-0">
                                <h3 class="text-xl font-semibold text-yellow-300">{{ $item['title'] }}</h3>
                                <p class="mt-2 text-gray-300">{{ $item['desc'] }}</p>
                            </div>
                            {{-- Titik --}}
                            <div class="order-1 md:order-2 flex flex-col items-center mx-4">
                                <div class="w-6 h-6 bg-yellow-500 rounded-full shadow-lg scale-0 animate-pop"></div>
                                <span class="mt-2 text-yellow-300 font-bold">{{ $item['year'] }}</span>
                            </div>
                            {{-- Kosong kanan --}}
                            <div class="md:w-5/12 order-3"></div>
                        @else
                            {{-- Kosong kiri --}}
                            <div class="md:w-5/12 order-1"></div>
                            {{-- Titik --}}
                            <div class="order-2 flex flex-col items-center mx-4">
                                <div class="w-6 h-6 bg-yellow-500 rounded-full shadow-lg scale-0 animate-pop"></div>
                                <span class="mt-2 text-yellow-300 font-bold">{{ $item['year'] }}</span>
                            </div>
                            {{-- Kanan: Cerita --}}
                            <div class="md:w-5/12 text-left order-3 animate-slide-right opacity-0">
                                <h3 class="text-xl font-semibold text-yellow-300">{{ $item['title'] }}</h3>
                                <p class="mt-2 text-gray-300">{{ $item['desc'] }}</p>
                            </div>
                        @endif

                    </div>
                @endforeach
            </div>
        </div>
    </section>

     {{-- Detail Acara --}}
    <section id="acara" class="py-16 px-6 " style="background-color : #ccd6c0">
        <h2 class="text-3xl font-bold text-white-400 text-center mb-6 ">Detail Acara</h2>
        <h2 class="font-arabic py-4 m-0 text-center" style="font-size: 2rem;" >بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h2>
        <p class="max-w-2xl mx-auto text-white-300 text-center">
            Dengan memohon rahmat dan ridho Allah SWT, kami bermaksud menyelenggarakan resepsi pernikahan kami.
        </p>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class=" border border-white-500 p-6 rounded-lg shadow-lg" style="background-color : #325d55">
                <h3 class="text-xl font-semibold text-white-300 mb-2">Akad Nikah</h3>
                <p>Saturday, 13 September 2025<br>08:00 - 10.00 WIB</p>
                <p class="mt-2 text-gray-400">Kediaman Mempelai Perempuan</p>
                <p class="mt-2 text-gray-400">Blok Desa Genteng RT/RW 001/001 Desa Genteng, Kec. Banjaran</p>
            </div>
            <div class=" border border-white-500 p-6 rounded-lg shadow-lg" style="background-color : #325d55">
                <h3 class="text-xl font-semibold text-white-300 mb-2" >Resepsi</h3>
                 <p>Saturday, 13 September 2025<br>11.00 - 15.00 WIB</p>
                <p class="mt-2 text-gray-400">Kediaman Mempelai Perempuan</p>
                <p class="mt-2 text-gray-400">Blok Desa Genteng RT/RW 001/001 Desa Genteng, Kec. Banjaran</p>
            </div>
        </div>
    </section>

    {{-- Galeri --}}
    {{-- <section id="galeri" class="py-16 px-6 bg-gray-900">
        <h2 class="text-3xl font-bold text-yellow-400 text-center mb-6">Galeri</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-5xl mx-auto">
            <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=500&q=80" class="w-full h-48 object-cover rounded-lg shadow border border-yellow-500">
            <img src="https://images.unsplash.com/photo-1606800052052-a08af7148866?auto=format&fit=crop&w=500&q=80" class="w-full h-48 object-cover rounded-lg shadow border border-yellow-500">
            <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=500&q=80" class="w-full h-48 object-cover rounded-lg shadow border border-yellow-500">
            <img src="https://images.unsplash.com/photo-1529635436167-dc99e6df87f9?auto=format&fit=crop&w=500&q=80" class="w-full h-48 object-cover rounded-lg shadow border border-yellow-500">
        </div>
    </section> --}}

    {{-- Section Countdown / Perhitungan Mundur --}}
    <section id="countdown-section" class="py-12 px-6 bg-gray-900">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-yellow-400 mb-4">Countdown</h2>
            <p class="text-gray-300 mb-6">Menuju hari bahagia kami — jangan sampai terlewat!</p>

            {{-- set data-time sesuai tanggal & jam acara (format: YYYY-MM-DD HH:MM:SS) --}}
            <div id="countdown" data-time="2025-09-13 08:00:00" class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <div class="bg-gray-800 border border-yellow-500 rounded-lg p-4">
                    <div class="text-4xl font-semibold text-yellow-300" id="countdown-days">0</div>
                    <div class="text-sm text-gray-400 mt-1">Hari</div>
                </div>
                <div class="bg-gray-800 border border-yellow-500 rounded-lg p-4">
                    <div class="text-4xl font-semibold text-yellow-300" id="countdown-hours">0</div>
                    <div class="text-sm text-gray-400 mt-1">Jam</div>
                </div>
                <div class="bg-gray-800 border border-yellow-500 rounded-lg p-4">
                    <div class="text-4xl font-semibold text-yellow-300" id="countdown-minutes">0</div>
                    <div class="text-sm text-gray-400 mt-1">Menit</div>
                </div>
                <div class="bg-gray-800 border border-yellow-500 rounded-lg p-4">
                    <div class="text-4xl font-semibold text-yellow-300" id="countdown-seconds">0</div>
                    <div class="text-sm text-gray-400 mt-1">Detik</div>
                </div>
            </div>

            <p id="countdown-message" class="mt-4 text-yellow-300 hidden"></p>
        </div>
    </section>
    
    {{-- Section Konfirmasi Kehadiran --}}
    <section class="py-12 px-6 bg-gray-900">
        <h2 class="text-3xl font-bold text-yellow-400 text-center mb-6">Konfirmasi Kehadiran</h2>
        <form method="POST" action="{{ route('invitation.comment') }}" class="max-w-lg mx-auto bg-gray-800 p-6 rounded-lg border border-yellow-500">
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
                <label class="block text-gray-300 mb-2">Komentar / Ucapan</label>
                <textarea name="comment" class="w-full p-3 rounded bg-gray-700 text-gray-200" rows="3"></textarea>
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-gray-900 py-3 rounded-lg hover:bg-yellow-400">Kirim</button>
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
<section id="comments" class="py-12 px-6 bg-gray-800">
    <h2 class="text-3xl font-bold text-yellow-400 text-center mb-6">Ucapan dari Teman-Teman</h2>
    <div class="max-w-3xl mx-auto space-y-4">
        @foreach($guestsWithCommentsPaginated as $g)
            <div class="bg-gray-900 border border-yellow-500 p-4 rounded-lg shadow">
                <p class="text-yellow-300 font-semibold">{{ $g->name }}</p>
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

    {{-- Section Hadiah Pernikahan--}}
    <section class="py-16 px-6 bg-gradient-to-b from-gray-900 to-black text-center relative overflow-hidden">
    <div class="max-w-3xl mx-auto bg-gray-800 bg-opacity-50 backdrop-blur-md border border-yellow-500 rounded-2xl shadow-xl p-8 relative z-10">
        
        {{-- Judul --}}
        <h2 class="text-4xl font-bold text-yellow-400 mb-3">🎁 Hadiah Pernikahan</h2>
        <p class="text-gray-300 mb-6 italic">Berikan doa restu, atau hadiah melalui rekening dan QRIS di bawah ini</p>

        {{-- Info Rekening --}}
        <div class="bg-gray-900 border border-yellow-500 rounded-xl p-5 shadow-inner mb-6">
            <p class="text-yellow-300 text-lg font-semibold">BCA - 123456789</p>
            <p class="text-gray-400 text-sm">a.n Rasyad</p>
        </div>

        {{-- QRIS --}}
        <div class="bg-gray-900 border border-yellow-500 rounded-xl p-4 inline-block">
            <img src="https://via.placeholder.com/220x220.png?text=QRIS" 
                 alt="QRIS" 
                 class="rounded-lg shadow-lg border border-yellow-500 transform hover:scale-105 transition duration-300">
        </div>

        {{-- Garis pemisah --}}
        <div class="my-8 border-t border-yellow-500 opacity-40"></div>

        {{-- Form Upload Bukti Transfer --}}
       {{-- <form action="{{ route('gifts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 max-w-lg mx-auto bg-gray-800 p-6 rounded-xl border border-yellow-500">
        @csrf
        <input type="text" name="name" placeholder="Nama Anda" class="w-full px-4 py-2 rounded-lg bg-gray-900 border border-yellow-500 text-gray-200" value="{{ $guest->name ?? 'Tamu' }}" required readonly>
        <input type="file" name="gift_file" accept="image/*" class="w-full text-gray-200 border border-yellow-500 rounded-lg bg-gray-900" required>
        <button type="submit" class="px-8 py-3 bg-yellow-500 text-gray-900 font-bold rounded-lg hover:bg-yellow-400">📤 Upload</button>
        </form> --}}

        {{-- Pesan sukses --}}
        @if(session('success'))
            <p class="text-green-400 mt-4">{{ session('success') }}</p>
        @endif
        </div>

        {{-- Efek background glow --}}
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-[500px] h-[500px] bg-yellow-500 opacity-10 rounded-full blur-3xl"></div>
    </section>

    {{-- Section Alamat & Maps --}}
    <section class="py-16 px-6 bg-gray-800">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-yellow-400 mb-6">Alamat Acara</h2>
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
            <div class="rounded-lg overflow-hidden border-4 border-yellow-500 shadow-lg">
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
                class="inline-block px-6 py-3 bg-yellow-500 text-gray-900 font-semibold rounded-lg shadow hover:bg-yellow-400 transition">
                📍 Lihat Petunjuk Arah
                </a>
            </div>
        </div>
    </section>


    <audio id="bgMusic" loop>
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
    </audio>

    {{-- Penutup --}}
    <section class="py-16 px-6 bg-gray-900 text-center relative overflow-hidden">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-yellow-400 mb-4">Terima Kasih</h2>
            <p class="text-gray-300 leading-relaxed mb-6">
                Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir 
                dan memberikan doa restu pada hari pernikahan kami.
            </p>
            <p class="text-yellow-300 font-semibold mb-8">
                Kehadiran dan doa Anda adalah hadiah terindah bagi kami.
            </p>

            {{-- Nama mempelai --}}
            <div class="text-yellow-400 text-xl font-bold mb-2">Rasyad & Wina</div>
            <div class="text-gray-400 italic">~ Dengan penuh cinta ~</div>
        </div>

        {{-- Ornamen garis tipis --}}
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-32 border-t-2 border-yellow-500 mt-8"></div>
    </section>

    {{-- Audio Player --}}
    <audio id="bg-music" loop>
        <source src="https://cdn.pixabay.com/download/audio/2023/03/17/audio_b64bb9cd0f.mp3" type="audio/mpeg">
    </audio>
    <div id="music-control" title="Putar Musik"><button id="musicBtn">🎵</button></div>
</div>


<script>
document.getElementById('musicBtn').addEventListener('click', function(){
    var music = document.getElementById('bgMusic');
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
        z-index: 9999;
        user-select: none;
        pointer-events: none;
        animation-name: fall;
        animation-timing-function: linear;
    }

    @keyframes fall {
        0% { transform: translateY(0) rotate(0deg); opacity: 1; }
        100% { transform: translateY(100vh) rotate(360deg); opacity: 0.8; }
    }
</style>

<script>
    function createSakura() {
        const sakura = document.createElement('div');
        sakura.classList.add('sakura');
        sakura.innerHTML = '🌸'; // emoji sakura (bisa diganti gambar <img>)
        sakura.style.left = Math.random() * 100 + 'vw';
        sakura.style.fontSize = Math.random() * 20 + 20 + 'px';
        sakura.style.animationDuration = (Math.random() * 5 + 5) + 's'; // lama jatuh
        sakura.style.opacity = Math.random();

        document.body.appendChild(sakura);

        setTimeout(() => {
            sakura.remove();
        }, 10000); // hapus setelah 10 detik
    }

    // buat kelopak tiap 300ms
    setInterval(createSakura, 800);
</script>


@endsection
