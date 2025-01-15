@extends('layout')

@section('konten')

<h4>Tambah Barang</h4>
<form action="{{ route('barang.submit') }}" method="post">
    @csrf
    <label>Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control mb-2">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control mb-2">
    <label>Jumlah</label>
    <input type="text" name="jumlah" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection