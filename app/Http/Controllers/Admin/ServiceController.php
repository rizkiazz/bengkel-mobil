<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceFromRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return view('admin.service.index', compact('service'));
    }
    public function create()
    {
        return view('admin.service.create');
    }
    public function store(ServiceFromRequest $request)
    {
        $validatedData = $request->validated();
        $service = new service();
        $service->pelanggan_id = $validatedData['pelanggan_id'];
        $service->jenis_service = $validatedData['jenis_service'];
        $service->keluhan = $validatedData['keluhan'];
        $service->mulai = $validatedData['mulai'];
        $service->selesai = $validatedData['selesai'];
        $service->status = $request->status == true ? 1 : 0;
        $service->biaya_service = $validatedData['biaya_service'];
        $service->biaya_suku_cadang = $validatedData['biaya_suku_cadang'];
        $service->total_biaya = $validatedData['total_biaya'];
        $service->detail = $validatedData['detail'];
        $service->save();


        return redirect('admin/service')->with('message', 'service baru berhasil ditambahkan');
    }
    public function edit(int $service_id)
    {
        
        $service = Service::findOrFail($service_id);
        return view('admin.service.edit', compact('jenis_kendaraan', 'merek_kendaraan', 'service'));
    }
    public function update(ServiceFromRequest $request, int $service_id)
    {
        // $validatedData = $request->validated();
        // $service = service::findOrFail($service_id)->first();
        // $service->nama = $validatedData['nama'];
        // $service->tipe = $validatedData['tipe'];
        // $service->jenis_mobil = $validatedData['jenis_mobil'];
        // $service->merek = $validatedData['merek'];
        // $service->no_polisi = $validatedData['no_polisi'];
        // $service->alamat = $validatedData['alamat'];
        // $service->handphone = $validatedData['handphone'];
        // $service->status = $request->status == 'status' ? 0 : 1;
        // $service->update();


        return redirect('admin/service')->with('message', 'service baru berhasil di update');
    }
    public function destroy(int $service_id)
    {
        $service = Service::findOrFail($service_id)->first();
        $service->delete();

        return redirect('admin/service')->with('message', 'service baru berhasil di hapus');
    }
}
