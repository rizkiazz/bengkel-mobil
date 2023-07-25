<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PelangganRequest;
use App\Models\Seed\JenisKendaraan;
use App\Models\Seed\MerekKendaraan;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.index', compact('pelanggan'));
    }
    public function create()
    {
        $jenis_kendaraan = JenisKendaraan::all();
        $merek_kendaraan = MerekKendaraan::all();
        return view('admin.pelanggan.create', compact('jenis_kendaraan', 'merek_kendaraan'));
    }
    public function store(PelangganRequest $request)
    {
        $validatedData = $request->validated();
        $pelanggan = new Pelanggan();
        $pelanggan->nama = $validatedData['nama'];
        $pelanggan->tipe = $validatedData['tipe'];
        $pelanggan->jenis_mobil = $validatedData['jenis_mobil'];
        $pelanggan->merek = $validatedData['merek'];
        $pelanggan->no_polisi = $validatedData['no_polisi'];
        $pelanggan->alamat = $validatedData['alamat'];
        $pelanggan->handphone = $validatedData['handphone'];
        $pelanggan->status = $request->status == true ? 1 : 0;
        dd($pelanggan);

        $pelanggan->save();


        return redirect('admin/pelanggan')->with('message', 'Pelanggan baru berhasil ditambahkan');
    }
    public function edit(int $pelanggan_id)
    {
        
        $pelanggan = Pelanggan::findOrFail($pelanggan_id);
        $jenis_kendaraan = JenisKendaraan::all();
        $merek_kendaraan = MerekKendaraan::all();
        return view('admin.pelanggan.edit', compact('jenis_kendaraan', 'merek_kendaraan', 'pelanggan'));
    }
    public function update(PelangganRequest $request, int $pelanggan_id)
    {
        // $validatedData = $request->validated();
        // $pelanggan = Pelanggan::findOrFail($pelanggan_id)->first();
        // $pelanggan->nama = $validatedData['nama'];
        // $pelanggan->tipe = $validatedData['tipe'];
        // $pelanggan->jenis_mobil = $validatedData['jenis_mobil'];
        // $pelanggan->merek = $validatedData['merek'];
        // $pelanggan->no_polisi = $validatedData['no_polisi'];
        // $pelanggan->alamat = $validatedData['alamat'];
        // $pelanggan->handphone = $validatedData['handphone'];
        // $pelanggan->status = $request->status == 'status' ? 0 : 1;
        // $pelanggan->update();


        return redirect('admin/pelanggan')->with('message', 'Pelanggan baru berhasil di update');
    }
    public function destroy(int $pelanggan_id)
    {
        $pelanggan = Pelanggan::findOrFail($pelanggan_id)->first();
        $pelanggan->delete();

        return redirect('admin/pelanggan')->with('message', 'Pelanggan baru berhasil di hapus');
    }
}
