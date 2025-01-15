<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Proyek</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
    <h2>Form Input Data Proyek</h2>
    <div x-data="{ 
        imageUrl: '{{ asset('storage/img/' . $project->foto) }}' 
    }">

        <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="foto">Foto</label><br>
            <td><img :src="imageUrl" style="max-width: 500px"></td> <br>
            <input type="file" id="foto" name="foto" 
            @change="imageUrl = URL.createObjectURL($event.target.files[0])"
            >
            </div>
            
            
            <div>
                <label for="project-name">Nama Proyek:</label><br>
            <input type="text" id="project-name" value="{{ $project->nama }}" name="nama" required><br><br>

            <div>
                <label for="project-name">Harge</label><br>
            <input type="text" id="project-name" value="{{ $project->harga }}" name="harga" required><br><br>
    
            <label for="status">Status:</label><br>
            <select id="status" name="status" value="{{ $project->status }}" required>
                <option value="belum_terlaksana">Belum Terlaksana</option>
                <option value="sedang_berjalan">Sedang Berjalan</option>
                <option value="selesai">Selesai</option>
            </select><br><br>
    
            <label for="description">Deskripsi:</label><br>
            <textarea id="description"  name="deskripsi" rows="4" cols="50" required>{{ $project->deskripsi }}</textarea><br><br>
    
            <button type="submit">Kirim</button>
            </div>

            
        </form>
    </div>
    
</body>
</html>
