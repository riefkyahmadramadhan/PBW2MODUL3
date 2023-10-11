<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-white">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>

    <div div class="py-12 flex justify-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <table class="min-w-full border border-white">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-white text-left text-xs leading-4 font-medium text-white-700 uppercase tracking-wider">Nama Koleksi</th>
                                <th class="px-6 py-3 border-b border-white text-left text-xs leading-4 font-medium text-white-700 uppercase tracking-wider">Jenis Koleksi</th>
                                <th class="px-6 py-3 border-b border-white text-left text-xs leading-4 font-medium text-white-700 uppercase tracking-wider">Jumlah Koleksi</th>
                                <th class="px-6 py-3 border-b border-white text-left text-xs leading-4 font-medium text-white-700 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collections as $collection)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-white">{{ $collection->namaKoleksi }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-white">{{ $collection->jenisKoleksi }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-white">{{ $collection->jumlahKoleksi }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-white"><a href="{{ route('koleksiView', $collection) }}">
                                <button class="px-4 py-2 text-white rounded-md underline">Rincian</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>