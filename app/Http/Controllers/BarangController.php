<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function tampil()  {
        $barang = Barang::get();
        return view('barang.tampil', compact('barang'));
    }

    function tambah()  {
        return view('barang.tambah');
    }

    function submit(Request $request){
        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->jumlah = $request->jumlah;
        
        $barang->save();
        return redirect()->route('barang.tampil');
    }

    function edit($id)  {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }

    function update(Request $request, $id)  {
        $barang = Barang::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->jumlah = $request->jumlah;
        
        $barang->update();
        return redirect()->route('barang.tampil');
    }

    function delete($id)  {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('barang.tampil');
    }
}
