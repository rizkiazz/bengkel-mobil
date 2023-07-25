<?php

namespace App\Http\Controllers\Admin;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierFormRequest;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return view('admin.supplier.index', compact('supplier'));
    }
    public function create()
    {
        return view('admin.supplier.create');
    }
    public function store(SupplierFormRequest $request)
    {
        $validatedData = $request->validated();
        $supplier = new Supplier();
        $supplier->kode = $validatedData['kode'];
        $supplier->nama = $validatedData['nama'];
        $supplier->badan_usaha = $validatedData['badan_usaha'];
        $supplier->kepemilikan = $validatedData['kepemilikan'];
        $supplier->no_hp = $validatedData['no_hp'];
        $supplier->alamat = $validatedData['alamat'];
        $supplier->status = $validatedData['status'];
        $supplier->keterangan = $validatedData['keterangan'];
        // dd($supplier);
        $supplier->save();

        return redirect('admin/supplier')->with('message', 'Supplier berhasil ditambahkan');
    }
    public function edit()
    {
        $supplier = Supplier::all()->first();
        return view('admin.supplier.edit', compact('supplier'));
    }
    public function update(SupplierFormRequest $request, int $supplier)
    {
        $supplier = Supplier::findOrFail($supplier);
        $validatedData = $request->validated();
        $supplier->kode = $validatedData['kode'];
        $supplier->nama = $validatedData['nama'];
        $supplier->badan_usaha = $validatedData['badan_usaha'];
        $supplier->kepemilikan = $validatedData['kepemilikan'];
        $supplier->no_hp = $validatedData['no_hp'];
        $supplier->alamat = $validatedData['alamat'];
        $supplier->status = $validatedData['status'];
        $supplier->keterangan = $validatedData['keterangan'];
        $supplier->update();
        
        return redirect('admin/supplier')->with('message', 'Supplier berhasil di Update');

    }
    public function destroy(int $supplier)
    {
        $supplier = Supplier::findOrFail($supplier);
        $supplier->delete();
        return redirect('admin/supplier')->with('message', 'Supplier berhasil di Hapus');

    }
}