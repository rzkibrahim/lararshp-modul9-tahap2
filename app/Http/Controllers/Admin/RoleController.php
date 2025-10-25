<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role; // ✅ Huruf besar!

class RoleController extends Controller
{
    // Menampilkan daftar semua role
    public function index()
    {
        $roles = Role::all();
        return view('rshp.DataMaster.role.index', compact('roles'));
    }

    // Menampilkan form untuk membuat role baru
    public function create()
    {
        return view('rshp.DataMaster.role.create');
    }

    // Menyimpan role baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_role' => 'required|string|max:100|unique:role,nama_role'
        ], [
            'nama_role.required' => 'Nama role wajib diisi',
            'nama_role.unique' => 'Nama role sudah ada',
            'nama_role.max' => 'Nama role maksimal 100 karakter'
        ]);

        // Simpan ke database
        Role::create([
            'nama_role' => $request->nama_role
        ]);

        return redirect()->route('admin.role.index')
            ->with('success', 'Role berhasil ditambahkan');
    }

    // Menampilkan form untuk edit role
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('rshp.DataMaster.role.edit', compact('role'));
    }

    // Update role di database
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        // Validasi input
        $request->validate([
            'nama_role' => 'required|string|max:100|unique:role,nama_role,' . $id . ',idrole'
        ], [
            'nama_role.required' => 'Nama role wajib diisi',
            'nama_role.unique' => 'Nama role sudah ada',
            'nama_role.max' => 'Nama role maksimal 100 karakter'
        ]);

        // Update data
        $role->update([
            'nama_role' => $request->nama_role
        ]);

        return redirect()->route('admin.role.index')
            ->with('success', 'Role berhasil diupdate');
    }

    // Hapus role dari database
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        
        // Cek apakah role sedang digunakan
        if ($role->users()->count() > 0) {
            return redirect()->route('admin.role.index')
                ->with('error', 'Role tidak dapat dihapus karena sedang digunakan oleh user');
        }

        $role->delete();

        return redirect()->route('admin.role.index')
            ->with('success', 'Role berhasil dihapus');
    }
}