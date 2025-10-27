<h2>Edit Kategori</h2>

@if($errors->any())
    <div style="background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.kategori.update', $kategori->idkategori) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div style="margin-bottom: 15px;">
        <label for="nama_kategori" style="display: block; margin-bottom: 5px; font-weight: bold;">
            Nama Kategori:
        </label>
        <input type="text" 
               name="nama_kategori" 
               id="nama_kategori" 
               value="{{ old('nama_kategori', $kategori->nama_kategori) }}"
               style="width: 100%; max-width: 400px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"
               required>
    </div>
    
    <button type="submit" style="padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">
        Update
    </button>
    
    <a href="{{ route('admin.kategori.index') }}" style="padding: 10px 20px; background: #6c757d; color: white; text-decoration: none; border-radius: 5px; margin-left: 10px;">
        Batal
    </a>
</form>