<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.index');
    }
    public function create()
    {
        return view('admin.kategori.create');
    }
}
