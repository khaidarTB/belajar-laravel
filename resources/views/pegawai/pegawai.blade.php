@extends('layout')

@section('title', 'About Page')

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
    </div>
@endif
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Pegawai</h1>

        <a href="/pegawai/create"
           class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow transition">
            + Tambah Pegawai
        </a>
    </div>

    <div class="bg-white shadow-lg rounded-xl overflow-hidden border">

        <table class="min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-100">
                <tr class="text-gray-700 text-sm uppercase tracking-wider">
                    <th class="px-6 py-3 text-left">Nama</th>
                    <th class="px-6 py-3 text-left">NIP</th>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Bidang</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">

                @forelse($pegawai as $item)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-medium text-gray-900">{{ $item->nama }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $item->nip }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $item->email }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $item->bidang }}</td>

                    <td class="px-6 py-4 text-center space-x-3">

                        <form action="/pegawai/{{ $item->id }}/edit" method="GET" class="inline">
                            <button type="submit" class="text-blue-600 hover:text-blue-800 font-medium">
                                Edit
                            </button>
                        </form>

                        <form action="/pegawai/{{ $item->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 font-medium">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                        Tidak ada data pegawai
                    </td>
                </tr>
                @endforelse

            </tbody>

        </table>

    </div>

</div>
@endsection