@extends('layout')

@section('konten')

<h4>Edit Barang</h4>
<form action="{{ route('barang.update', $barang->id) }}" method="post">
    @csrf
    <label>Nama Barang</label>
    <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control mb-2">
    <label>harga</label>
    <input type="text" name="harga" value="{{ $barang->harga }}" class="form-control mb-2">
    <label>Jumlah</label>
    <input type="text" name="jumlah" value="{{ $barang->jumlah }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection