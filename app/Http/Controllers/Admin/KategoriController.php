<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;


class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }
    public function create()
    {
        return view('admin.kategori.create');
    }
    public function store(KategoriRequest $request)
    {
        $validatedData = $request->validated();
        $kategori = new Kategori();
        $kategori->nama = $validatedData['nama'];
        $kategori->sub_nama = $validatedData['sub_nama'];
        $kategori->save();
        return redirect('admin/kategori')->with('message', 'Kategori baru berhasil dibuat');
    }
    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }
    public function update(KategoriRequest $request, $kategori)
    {
        $kategori = Kategori::findOrFail($kategori);
        $validatedData = $request->validated();
        $kategori->nama = $validatedData['nama'];
        $kategori->sub_nama = $validatedData['sub_nama'];
        $kategori->update();
        return redirect('admin/kategori')->with('message', 'Kategori berhasil diupdate');
    }
    public function destroy(int $kategori_id)
    {
        $kategori =  Kategori::findOrFail($kategori_id);
        $kategori->delete();
        return redirect('admin/kategori')->with('message', 'Kategori berhasil dihapus');
    }
}
