<h2>Tambah Kode Tindakan/Terapi Baru</h2>

@if($errors->any())
    <div style="background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.kodeTindakanTerapi.store') }}" method="POST">
    @csrf
    
    <div style="margin-bottom: 15px;">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Kode:</label>
        <input type="text" name="kode" value="{{ old('kode') }}" style="width: 100%; max-width: 400px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
    </div>
    
    <div style="margin-bottom: 15px;">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Deskripsi Tindakan/Terapi:</label>
        <textarea name="deskripsi_tindakan_terapi" style="width: 100%; max-width: 400px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; min-height: 100px;" required>{{ old('deskripsi_tindakan_terapi') }}</textarea>
    </div>
    
    <div style="margin-bottom: 15px;">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Kategori:</label>
        <select name="idkategori" style="width: 100%; max-width: 400px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach($kategori as $k)
                <option value="{{ $k->idkategori }}" {{ old('idkategori') == $k->idkategori ? 'selected' : '' }}>
                    {{ $k->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
    
    <div style="margin-bottom: 15px;">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Kategori Klinis:</label>
        <select name="idkategori_klinis" style="width: 100%; max-width: 400px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" required>
            <option value="">-- Pilih Kategori Klinis --</option>
            @foreach($kategoriKlinis as $kk)
                <option value="{{ $kk->idkategori_klinis }}" {{ old('idkategori_klinis') == $kk->idkategori_klinis ? 'selected' : '' }}>
                    {{ $kk->nama_kategori_klinis }}
                </option>
            @endforeach
        </select>
    </div>
    
    <button type="submit" style="padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
        Simpan
    </button>
    
    <a href="{{ route('admin.kodeTindakanTerapi.index') }}" style="padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; border-radius: 5px; margin-left: 10px;">
        Batal
    </a>
</form>