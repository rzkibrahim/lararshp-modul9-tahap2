<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Deskripsi Tindakan/Terapi</th>
            <th>ID Kategori</th>
            <th>ID Kategori Klinis</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tindakanTerapi as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->kode }}</td>
            <td>{{ $item->deskripsi_tindakan_terapi }}</td>
            <td>{{ $item->idkategori }}</td>
            <td>{{ $item->idkategori_klinis }}</td>
        </tr>
        @endforeach
    </tbody>
</table>