<div class="overflow-x-auto bg-white rounded-xl shadow-lg mb-8">
    <table class="min-w-full border-collapse">
        <thead>
            <tr class="bg-gradient-to-r from-blue-700 to-blue-600 text-white text-left">
                <th class="p-4">No</th>
                <th class="p-4">Nama User</th>
                <th class="p-4">Email</th>
                <th class="p-4">Role</th>
                <th class="p-4">Status Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $index => $u)
            <tr class="border-b border-gray-200 hover:bg-blue-50">
                <td class="p-4">{{ $index + 1 }}</td>
                <td class="p-4">{{ $u->nama }}</td>
                <td class="p-4">{{ $u->email }}</td>
                <td class="p-4">
                    @foreach($u->roles as $role)
                        <span class="block text-blue-700 font-medium">{{ $role->nama_role }}</span>
                    @endforeach
                </td>
                <td class="p-4">
                    @foreach($u->roles as $role)
                        <span class="{{ $role->pivot->status == 1 ? 'text-green-600 font-semibold' : 'text-red-500 font-medium' }}">
                            {{ $role->pivot->status == 1 ? 'Aktif' : 'Nonaktif' }}
                        </span>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
