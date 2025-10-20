<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Role</th>
            <th>Nama Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $index => $role)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $role->idrole }}</td>
            <td>{{ $role->nama_role }}</td>
        </tr>
        @endforeach
    </tbody>
</table>