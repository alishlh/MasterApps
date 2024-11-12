<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('admin.index');
    }

    function barangMasuk()
    {
        $value = Barangmasuk::all();
        return view('admin.barangMasuk.index', compact('value'));
    }
}
