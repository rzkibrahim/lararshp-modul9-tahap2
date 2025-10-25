<div class="overflow-x-auto bg-white rounded-xl shadow-lg mb-8">
    <table class="min-w-full border-collapse">
        <thead>
            <tr class="bg-gradient-to-r from-blue-700 to-blue-600 text-white text-left">
                <th class="p-4">No</th>
                <th class="p-4">ID Kategori</th>
                <th class="p-4">Nama Kategori</th>
                <th class="p-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $index => $item)
            <tr class="border-b border-gray-200 hover:bg-blue-50">
                <td class="p-4">{{ $index + 1 }}</td>
                <td class="p-4">{{ $item->idkategori }}</td>
                <td class="p-4">{{ $item->nama_kategori }}</td>
                <td class="p-4 flex gap-2">
                    <button class="px-3 py-1 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-700">Edit</button>
                    <button class="px-3 py-1 text-sm text-white bg-red-600 rounded-lg hover:bg-red-700">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
