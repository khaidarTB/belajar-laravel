@extends('layout')

@section('title', 'Edit Pegawai')

@section('content')
<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white shadow-lg rounded-xl p-8">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Edit Pegawai
        </h1>

        <form action="/pegawai/{{ $pegawai->id }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Nama -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nama
                </label>
                <input type="text" name="nama"
                    value="{{ $pegawai->nama }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
            </div>

            <!-- NIP -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    NIP
                </label>
                <input type="text" name="nip"
                    value="{{ $pegawai->nip }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input type="email" name="email"
                    value="{{ $pegawai->email }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
            </div>

            <!-- Bidang -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Bidang
                </label>
                <select name="bidang"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                    <option value="IT" {{ $pegawai->bidang == 'IT' ? 'selected' : '' }}>IT</option>
                    <option value="HRD" {{ $pegawai->bidang == 'HRD' ? 'selected' : '' }}>HRD</option>
                    <option value="Keuangan" {{ $pegawai->bidang == 'Keuangan' ? 'selected' : '' }}>Keuangan</option>

                </select>
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-3 pt-4">

                <a href="/pegawai"
                    class="px-4 py-2 bg-gray-400 text-white rounded-lg hover:bg-gray-500">
                    Batal
                </a>

                <button type="submit"
                    class="px-5 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Update
                </button>

            </div>

        </form>

    </div>

</div>
@endsection 