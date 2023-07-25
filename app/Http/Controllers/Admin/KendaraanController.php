<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\KendaraanFormRequest;
use App\Models\Seed\BahanBakar;
use App\Models\Seed\JenisKendaraan;
use App\Models\Seed\MerekKendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        $jenis_kendaraan = JenisKendaraan::all();
        $merek_kendaraan = MerekKendaraan::all();
        $bahan_bakar_kendaraan = BahanBakar::all();
        return view('admin.kendaraan.index', compact('kendaraan','jenis_kendaraan','merek_kendaraan', 'bahan_bakar_kendaraan'));
    }
    public function create()
    {
        $jenis_kendaraan = JenisKendaraan::all();
        $merek_kendaraan = MerekKendaraan::all();
        $bahan_bakar_kendaraan = BahanBakar::all();
        return view('admin.kendaraan.create', compact('jenis_kendaraan','merek_kendaraan', 'bahan_bakar_kendaraan'));
    }
    public function store(KendaraanFormRequest $request)
    {

        $validatedData = $request->validated();
        $kendaraan = new Kendaraan();
        $kendaraan->merek = $validatedData['merek'];
        $kendaraan->model = $validatedData['model'];
        $kendaraan->nama = $validatedData['nama'];
        $kendaraan->bahan_bakar = $validatedData['bahan_bakar'];
        // dd(var_dump($kendaraan));
        $kendaraan->save();

        return redirect('admin/kendaraan')->with('message', 'Data Kendaraan berhasil dibuat');
    }
    public function edit(int $kendaraan)
    {
        $jenis_kendaraan = JenisKendaraan::all();
        $merek_kendaraan = MerekKendaraan::all();
        $bahan_bakar_kendaraan = BahanBakar::all();
        $kendaraan = Kendaraan::findOrFail($kendaraan);
        return view('admin.kendaraan.edit', compact('kendaraan', 'jenis_kendaraan','merek_kendaraan', 'bahan_bakar_kendaraan'));
    }
    public function update(Request $request, $kendaraan)
    {
        $kendaraan = Kendaraan::findOrFail($kendaraan);
        $kendaraan->merek = $request->input('merek');
        $kendaraan->model = $request->input('model');
        $kendaraan->nama = $request['nama'];
        $kendaraan->bahan_bakar = $request->input('bahan_bakar');
        $kendaraan->update();

        return redirect('admin/kendaraan')->with('message', 'Data Kendaraan berhasil diupdate');
    }
    public function destroy(int $kendaraan_id)
    {
        $kendaraan = Kendaraan::findOrFail($kendaraan_id);
        $kendaraan->delete();
        return redirect('admin/kendaraan')->with('message', 'Data Kendaraan berhasil dihapus');
    }

}