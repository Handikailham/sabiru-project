<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Proyek</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-12 px-6">

    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Edit Data Proyek</h2>

    <div x-data="{ 
        imageUrl: '{{ asset('storage/img/' . $project->foto) }}' 
    }" class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg space-y-8">

        <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Foto Preview -->
            <div class="flex justify-center mb-6">
                <img :src="imageUrl" alt="Preview Foto" class="w-48 h-48 object-cover rounded-lg border-2 border-gray-300 shadow-sm">
            </div>

            <!-- Input Foto -->
            <div class="space-y-2">
                <label for="foto" class="block text-sm font-medium text-gray-700">Pilih Foto Proyek</label>
                <input type="file" id="foto" name="foto" 
                       @change="imageUrl = URL.createObjectURL($event.target.files[0])"
                       class="w-full py-2 px-4 bg-gray-100 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Input Nama Proyek -->
            <div class="space-y-2">
                <label for="project-name" class="block text-sm font-medium text-gray-700">Nama Proyek</label>
                <input type="text" id="project-name" name="nama" value="{{ $project->nama }}" required 
                       class="w-full py-2 px-4 bg-gray-100 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Input Harga -->
            <div class="space-y-2">
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="number" id="harga" name="harga" value="{{ $project->harga }}" required 
                       class="w-full py-2 px-4 bg-gray-100 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div class="space-y-2">
                <label for="p" class="block text-sm font-medium text-gray-700">Tujuan Proyek</label>
                <input type="text" id="project-name" name="tujuan" value="{{ $project->tujuan }}" required 
                       class="w-full py-2 px-4 bg-gray-100 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Select Status -->
            <div class="space-y-2">
                <label for="status" class="block text-sm font-medium text-gray-700">Status Proyek</label>
                <select id="status" name="status" required 
                        class="w-full py-2 px-4 bg-gray-100 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="belum terlaksana" {{ $project->status == 'belum_terlaksana' ? 'selected' : '' }}>Belum Terlaksana</option>
                    <option value="sedang berjalan" {{ $project->status == 'sedang_berjalan' ? 'selected' : '' }}>Sedang Berjalan</option>
                    <option value="selesai" {{ $project->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>

            

            <!-- Input Deskripsi -->
            <div class="space-y-2">
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea id="description" name="deskripsi" rows="4" required 
                          class="w-full py-2 px-4 bg-gray-100 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ $project->deskripsi }}</textarea>
            </div>

            <!-- Button Section -->
            <div class="flex justify-between items-center space-x-4">
                <a href="{{ route('project.tampil') }}" class="w-1/2 bg-gray-500 text-white py-2 px-6 rounded-lg text-center hover:bg-gray-600">
                    Kembali
                </a>
                <button type="submit" class="w-1/2 bg-blue-500 text-white py-2 px-6 rounded-lg text-center hover:bg-blue-600">
                    Edit
                </button>
            </div>
        </form>

    </div>

</body>
</html>
