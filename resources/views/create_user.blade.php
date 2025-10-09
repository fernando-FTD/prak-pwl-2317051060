@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6 border-b border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800">Buat Pengguna Baru</h1>
            <p class="mt-1 text-sm text-gray-600">Isi detail di bawah ini untuk menambahkan user baru.</p>
        </div>
        
        <form action="{{ route('user.store') }}" method="POST" class="p-6">
            @csrf

            <div class="mb-4">
                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">
                    Nama Mahasiswa:
                </label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap"
                       class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="npm" class="block text-gray-700 text-sm font-bold mb-2">
                    NPM:
                </label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM"
                       class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="kelas_id" class="block text-gray-700 text-sm font-bold mb-2">
                    Kelas:
                </label>
                <select name="kelas_id" id="kelas_id"
                        class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="flex items-center justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection