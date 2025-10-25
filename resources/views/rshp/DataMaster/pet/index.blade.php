<div class="overflow-x-auto bg-white rounded-xl shadow-lg mb-8">
    <table class="min-w-full border-collapse">
        <thead>
            <tr class="bg-gradient-to-r from-blue-700 to-blue-600 text-white text-left">
                <th class="p-4">No</th>
                <th class="p-4">ID Pet</th>
                <th class="p-4">Nama Pet</th>
                <th class="p-4">Jenis Hewan</th>
                <th class="p-4">Ras Hewan</th>
                <th class="p-4">Pemilik</th>
                <th class="p-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pet as $index => $item)
            <tr class="border-b border-gray-200 hover:bg-blue-50">
                <td class="p-4">{{ $index + 1 }}</td>
                <td class="p-4">{{ $item->idpet }}</td>
                <td class="p-4">{{ $item->nama_pet }}</td>
                <td class="p-4">{{ $item->jenisHewan->nama_jenis ?? '-' }}</td>
                <td class="p-4">{{ $item->rasHewan->nama_ras ?? '-' }}</td>
                <td class="p-4">{{ $item->user->nama ?? '-' }}</td>
                <td class="p-4 flex gap-2">
                    <button class="px-3 py-1 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-700">Edit</button>
                    <button class="px-3 py-1 text-sm text-white bg-red-600 rounded-lg hover:bg-red-700">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
