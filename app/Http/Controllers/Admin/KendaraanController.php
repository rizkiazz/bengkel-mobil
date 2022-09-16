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
        return view('admin.kendaraan.index', compact('kendaraan'));
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
        //masih perbaikan


        //// $data = new Kendaraan();
        // // $data = $data->create( $request->all() );
        //// $validatedData = $request->validated();
        //// $kendaraan = new Kendaraan();
        //// $kendaraan->merek = $validatedData['merek'];
        //// $kendaraan->model = $validatedData['model'];
        //// $kendaraan->nama = $validatedData['nama'];
        //// $kendaraan->bahan_bakar = $validatedData['bahan_bakar'];
        //// $kendaraan->save();

        // $merek = json_encode($request->merek);
        // $model = json_encode($request->model);
        // $nama = json_encode($request->nama);
        // $bahan_bakar = json_encode($request->bahan_bakar);
        

        // // $i = 0;
        // $datasave = [
        //     'merek' => $merek,
        //     'model' => $model,
        //     'nama' => $nama,
        //     'bahan_bakar' => $bahan_bakar,
        // ];
        // $integerIDs = array_map('intval', explode('"$nama"', $nama));
        // $datasave = substr_replace($datasave);
        
        // dd($datasave);
        // DB::table('kendaraan')->insert($datasave);

        return redirect('admin/kendaraan')->with('message', 'Data Kendaraan berhasil dibuat');
    }
    public function edit(Kendaraan $kendaraan)
    {
        return view('admin.kendaraan.edit', compact('kendaraan'));
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
