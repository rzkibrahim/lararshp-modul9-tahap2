<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Ras</th>
            <th>Nama Ras</th>
            <th>ID Jenis Hewan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rasHewan as $index => $ras)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $ras->idras_hewan }}</td>
            <td>{{ $ras->nama_ras }}</td>
            <td>{{ $ras->idjenis_hewan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>