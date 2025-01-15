<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function tampil(){
        $project = Project::get();
        return view('project.tampil', compact('project'));
    }

    public function tambah(){
        return view('project.tambah');
    }

    public function submit(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'harga' => 'required|',
        'status' => 'required|string',
        'deskripsi' => 'required|string',
        'foto' => 'required|image|mimes:jpeg,png,jpg', // Validasi untuk gambar
    ]);

    // Simpan file gambar jika ada
    $fileName = null;
    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $fileName = $file->hashName(); // Mengambil nama file yang unik
        $file->storeAs('img/', $fileName, 'public'); // Simpan file di storage
    }

    // Simpan data ke database
    $project = new Project();
    $project->nama = $request->nama;
    $project->harga = $request->harga;
    $project->status = $request->status;
    $project->deskripsi = $request->deskripsi;
    $project->foto = $fileName; // Simpan nama file di kolom foto
    $project->save();

    return redirect()->route('project.tampil')->with('success', 'Proyek berhasil ditambahkan!');
}



    public function edit($id){
        $project = Project::find($id);
        return view('project.edit', compact('project'));
    }

    

    public function update(Request $request, $id)
{
    // Temukan proyek berdasarkan ID
    $project = Project::findOrFail($id);

    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'harga' => 'required|',
        'status' => 'required|string',
        'deskripsi' => 'required|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg', // Validasi foto opsional
    ]);

    // Periksa apakah ada file baru untuk foto
    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($project->foto && Storage::disk('public')->exists('img/' . $project->foto)) {
            // Hapus foto lama dari folder storage
            Storage::disk('public')->delete('img/' . $project->foto);
        }

        // Simpan foto baru
        $fileName = $request->file('foto')->hashName();
        $request->file('foto')->storeAs('img/', $fileName, 'public');  // Simpan ke storage

        // Perbarui kolom foto dengan nama file baru
        $project->foto = $fileName;
    }

    // Perbarui data lainnya
    $project->nama = $request->nama;
    $project->harga = $request->harga;
    $project->status = $request->status;
    $project->deskripsi = $request->deskripsi;

    // Simpan perubahan
    $project->save();

    // Redirect ke halaman tampil dengan pesan sukses
    return redirect()->route('project.tampil')->with('success', 'Proyek berhasil diperbarui!');
}





    public function delete($id){
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('project.tampil'); 
    }
}
