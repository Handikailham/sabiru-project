<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tampil Data Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Data Project Samudra Biru</h1>

        <div class="mb-4 flex justify-between items-center">
            <!-- Tombol Tambah Data -->
            <a href="{{ route('project.tambah') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Tambah Data
            </a>
        
            <!-- Tombol Logout -->
           <form action="{{ route('logout') }}" method="POST" class="inline-block">
        @csrf
        <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
            Logout
        </button>
    </form>
    
        </div>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Gambar</th>
                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                        <th class="border border-gray-300 px-4 py-2">Harga</th>
                        <th class="border border-gray-300 px-4 py-2">Status</th>
                        <th class="border border-gray-300 px-4 py-2">Tujuan</th>
                        <th class="border border-gray-300 px-4 py-2">Deskripsi</th>
                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($project as $no => $data)
                    <tr class="bg-white hover:bg-gray-100 text-center">
                        <td class="border border-gray-300 px-4 py-2">{{ $no + 1 }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <img src="{{ url('storage/img/' . $data->foto) }}" class="max-w-full h-auto mx-auto" style="max-height: 100px;">
                        </td>
                        <td class="border border-gray-300 px-4 py-2">{{ $data->nama }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $data->harga }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $data->status }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $data->tujuan }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $data->deskripsi }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('project.edit', $data->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                    Edit
                                </a>
                                
                                <form action="{{ route('project.delete', $data->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
