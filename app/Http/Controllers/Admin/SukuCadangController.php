<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SukuCadangRequest;
use App\Models\SukuCadang;
use Illuminate\Http\Request;

class SukuCadangController extends Controller
{
    public function index()
    {
        $suku_cadang = SukuCadang::all();
        return view('admin.suku_cadang.index', compact('suku_cadang'));
    }
    public function create()
    {
        return view('admin.suku_cadang.create');
    }
    public function store(SukuCadangRequest $request)
    {
        $validatedData = $request->validated();
        $suku_cadang = new SukuCadang();
        $suku_cadang->nama = $validatedData['nama'];
        $suku_cadang->jenis_suku_cadang = $validatedData['jenis_suku_cadang'];
        $suku_cadang->merek = $validatedData['merek'];
        $suku_cadang->satuan = $validatedData['satuan'];
        $suku_cadang->stock = $validatedData['stock'];
        $suku_cadang->deskripsi = $validatedData['deskripsi'];
        $suku_cadang->harga = $validatedData['harga'];
        $suku_cadang->save();

        return redirect('admin/suku-cadang')->with('message', 'Suku Cadang berhasil ditambahkan');
    }
    public function edit()
    {
        $suku_cadang = SukuCadang::all()->first();
        return view('admin.suku_cadang.edit', compact('suku_cadang'));
    }
    public function update(SukuCadangRequest $request, int $suku_cadang)
    {
        $suku_cadang = SukuCadang::findOrFail($suku_cadang);
        $validatedData = $request->validated();
        $suku_cadang->nama = $validatedData['nama'];
        $suku_cadang->jenis_suku_cadang = $validatedData['jenis_suku_cadang'];
        $suku_cadang->merek = $validatedData['merek'];
        $suku_cadang->satuan = $validatedData['satuan'];
        $suku_cadang->stock = $validatedData['stock'];
        $suku_cadang->deskripsi = $validatedData['deskripsi'];
        $suku_cadang->harga = $validatedData['harga'];
        $suku_cadang->update();
        
        return redirect('admin/suku-cadang')->with('message', 'Suku Cadang berhasil di Update');

    }
    public function destroy(int $suku_cadang)
    {
        $suku_cadang = SukuCadang::findOrFail($suku_cadang);
        $suku_cadang->delete();
        return redirect('admin/suku-cadang')->with('message', 'Suku Cadang berhasil di Hapus');

    }
}
