@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List Barang</h4>
    <div class="ms-auto">
        <a href="{{ route('barang.tambah') }}" class="btn btn-success">Tambah Barang</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>
    @foreach($barang as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nama_barang }}</td>
        <td>{{ $data->harga }}</td>
        <td>{{ $data->jumlah }}</td>
        <td>
            <a href="{{ route('barang.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('barang.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection