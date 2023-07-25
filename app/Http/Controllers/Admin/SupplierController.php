<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        // $pelanggan = Pelanggan::all();
        return view('admin.supplier.index');
    }
}