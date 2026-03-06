@extends('layout')

@section('title', 'Tambah Pegawai')

@section('content')
<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white shadow-lg rounded-xl p-8">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Tambah Pegawai
        </h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/pegawai" method="POST" class="space-y-5">
            @csrf

            <!-- Nama -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nama
                </label>
                <input type="text" name="nama" value="{{ old('nama') }}"
                    class="w-full border @error('nama') border-red-500 @else border-gray-300 @enderror rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan nama pegawai">
                @error('nama') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- NIP -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    NIP (18 digit)
                </label>
                <input type="text" name="nip" value="{{ old('nip') }}"
                    class="w-full border @error('nip') border-red-500 @else border-gray-300 @enderror rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan NIP (18 digit)">
                @error('nip') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full border @error('email') border-red-500 @else border-gray-300 @enderror rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan email">
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Bidang -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Bidang
                </label>
                <select name="bidang"
                    class="w-full border @error('bidang') border-red-500 @else border-gray-300 @enderror rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="">Pilih Bidang</option>
                    <option value="IT" {{ old('bidang') == 'IT' ? 'selected' : '' }}>IT</option>
                    <option value="HRD" {{ old('bidang') == 'HRD' ? 'selected' : '' }}>HRD</option>
                    <option value="Keuangan" {{ old('bidang') == 'Keuangan' ? 'selected' : '' }}>Keuangan</option>
                </select>
                @error('bidang') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-3 pt-4">

                <a href="/pegawai"
                    class="px-4 py-2 bg-gray-400 text-white rounded-lg hover:bg-gray-500">
                    Batal
                </a>

                <button type="submit"
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>
@endsection