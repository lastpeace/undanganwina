@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
    <h1 class="text-3xl font-bold text-yellow-400 mb-6">📊 Dashboard Admin</h1>
    
     <div class="bg-gray-900 border border-yellow-500 rounded-lg p-6 mb-10">
        <h2 class="text-2xl font-bold text-yellow-300 mb-4">➕ Tambah Tamu Baru</h2>
        <form action="{{ route('admin.guests.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @csrf
            <input type="text" name="name" placeholder="Nama Tamu" class="px-4 py-2 rounded bg-gray-800 border border-yellow-500 text-gray-200" required>
            <input type="text" name="code" placeholder="Kode Undangan" class="px-4 py-2 rounded bg-gray-800 border border-yellow-500 text-gray-200" required>
            <select name="status" class="px-4 py-2 rounded bg-gray-800 border border-yellow-500 text-gray-200" required>
                <option value="Belum Konfirmasi">Belum Konfirmasi</option>
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
            </select>
            <input type="text" name="comment" placeholder="Komentar (opsional)" class="px-4 py-2 rounded bg-gray-800 border border-yellow-500 text-gray-200">
            <div class="md:col-span-2">
                <button type="submit" class="px-6 py-2 bg-yellow-500 rounded hover:bg-yellow-400 font-bold">💾 Simpan</button>
            </div>
        </form>
    </div>

    {{-- Tabel Guest --}}
    <div class="bg-gray-900 border border-yellow-500 rounded-lg p-6 mb-10">
        <h2 class="text-2xl font-bold text-yellow-300 mb-4">Daftar Tamu</h2>
        <table class="w-full text-left text-gray-300 border-collapse">
            <thead>
                <tr class="bg-gray-800 text-yellow-400">
                    <th class="p-3 border border-yellow-500">Nama</th>
                    <th class="p-3 border border-yellow-500">Kode</th>
                    <th class="p-3 border border-yellow-500">Status</th>
                    <th class="p-3 border border-yellow-500">Komentar</th>
                    <th class="p-3 border border-yellow-500">Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guests as $guest)
                <tr class="hover:bg-gray-800 transition">
                    <td class="p-3 border border-yellow-500">{{ $guest->name }}</td>
                    <td class="p-3 border border-yellow-500">{{ $guest->code }}</td>
                    <td class="p-3 border border-yellow-500">{{ $guest->status }}</td>
                    <td class="p-3 border border-yellow-500">{{ $guest->comment ?? '-' }}</td>
                    <td class="p-3 border border-yellow-500">{{ $guest->created_at->format('d M Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">{{ $guests->links() }}</div>
    </div>

    {{-- Tabel Gift --}}
    <div class="bg-gray-900 border border-yellow-500 rounded-lg p-6">
        <h2 class="text-2xl font-bold text-yellow-300 mb-4">Daftar Hadiah</h2>
        <table class="w-full text-left text-gray-300 border-collapse">
            <thead>
                <tr class="bg-gray-800 text-yellow-400">
                    <th class="p-3 border border-yellow-500">Nama</th>
                    <th class="p-3 border border-yellow-500">Bukti Transfer</th>
                    <th class="p-3 border border-yellow-500">Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gifts as $gift)
                <tr class="hover:bg-gray-800 transition">
                    <td class="p-3 border border-yellow-500">{{ $gift->name }}</td>
                    <td class="p-3 border border-yellow-500">
                        <img src="data:image/png;base64,{{ $gift->image }}" alt="Bukti" class="h-20 rounded-lg border border-yellow-500">
                    </td>
                    <td class="p-3 border border-yellow-500">{{ $gift->created_at->format('d M Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">{{ $gifts->links() }}</div>
    </div>
</div>
@endsection
