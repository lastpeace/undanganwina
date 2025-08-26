@extends('layouts.app')

@section('content')
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
        style="background-image: url('https://ibb.co.com/84RVR56t');">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Ornamen Atas -->
    <div class="absolute top-0 left-0 right-0 flex justify-between p-6 opacity-80">
        <img src="https://i.ibb.co/pbn3H9d/flower-left.png" class="w-24 md:w-36 animate-pulse" alt="flower-left">
        <img src="https://i.ibb.co/1mX8F4f/flower-right.png" class="w-24 md:w-36 animate-pulse" alt="flower-right">
    </div>

    <!-- Konten Utama -->
    <div class="relative z-10 animate-fadeIn">
        <p class="uppercase tracking-widest text-sm md:text-base text-white-300 mb-3">The Wedding Of</p>
        <h1 class="font-['Lora'] text-6xl md:text-8xl text-white drop-shadow-lg">Rasyad & Wina</h1>
        <p class="mt-4 text-lg md:text-xl text-gray-200 italic">Sabtu, 13 September 2025</p>
        <p class="text-gray-300 text-sm md:text-base">Kediaman Mempelai Wanita, Majalengka</p>

        <!-- Tombol Lihat Undangan -->
        <a href="#acara" 
           class="mt-8 inline-block px-8 py-3 bg-slate-500 text-gray-900 font-semibold rounded-full 
                  shadow-lg hover:bg-white-400 transition transform hover:scale-105">
            Lihat Undangan
        </a>
    </div>
</section>
</div>
@endsection