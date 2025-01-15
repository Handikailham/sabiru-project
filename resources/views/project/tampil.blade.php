<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Data</title>
</head>
<body>
    <h1>DATA PROJEK SAMUDRA BIRU</h1>
        <a href="{{ route('project.tambah') }}">Tambah Data</a>
        <br>
        <table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>STATUS</th>
        <th>DESKRIPS</th>
        <th>AKSI</th>
    </tr>

    @foreach ($project as $no=>$data )
    <tr>
        <td>{{ $no+1 }}</td>
        <td><img src="{{ url('storage/img/'. $data->foto) }}" style="max-width: 500px"></td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->status }}</td>
        <td>{{ $data->deskripsi }}</td>
        <td>
            <a href="{{ route('project.edit', $data->id) }}"> EDIT</a>

            <form action="{{ route('project.delete', $data->id) }}" method="POST">
                @csrf
                <button type="submit">HAPUS</button>
            </form>
        </td>
    </tr>
</table>
    @endforeach
</body>
</html>