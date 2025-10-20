<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemilik</th>
            <th>No. WA</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @forelse($pemilik as $index => $item)
        <tr class="hover:bg-blue-50 transition-colors">
            <td class="px-6 py-4 text-gray-800 font-medium">{{ $index + 1 }}</td>

            {{-- PERBAIKAN: Pastikan relasi user ter-load --}}
            <td class="px-6 py-4 text-gray-800 font-medium">
                {{ $item->user->nama ?? 'Nama tidak tersedia' }}
            </td>

            <td class="px-6 py-4 text-gray-600">
                {{ $item->no_wa ?? '-' }}
            </td>

            <td class="px-6 py-4 text-gray-600">
                {{ $item->alamat ?? '-' }}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center py-12 text-gray-500">
                <p class="text-lg font-medium">Tidak ada data pemilik</p>
            </td>
        </tr>
        @endforelse
    </tbody>

</table>