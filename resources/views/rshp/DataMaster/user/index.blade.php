<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($userRoles as $index => $ur)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $ur->nama }}</td>
            <td>{{ $ur->email }}</td>
            <td>{{ $ur->nama_role }}</td>
            <td>{{ $ur->status == 1 ? 'Aktif' : 'Nonaktif' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>