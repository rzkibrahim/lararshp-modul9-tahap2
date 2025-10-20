<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pet</th>
            <th>Tgl. Lahir</th>
            <th>Jenis Kelamin</th>
            <th>ID Pemilik</th>
            <th>ID Ras Hewan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pets as $index => $pet)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $pet->nama }}</td>
            <td>{{ $pet->tanggal_lahir }}</td>
            <td>{{ $pet->jenis_kelamin }}</td>
            <td>{{ $pet->idpemilik }}</td>
            <td>{{ $pet->idras_hewan }}</td>
        </tr>
        @endforeach
        <tr class="text-center">
            <td colspan="6">... Terdapat 11 data pet di database ...</td>
        </tr>
    </tbody>
</table>