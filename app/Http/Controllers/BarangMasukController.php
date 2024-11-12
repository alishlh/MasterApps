<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    function TititpanSupplier()
    {
        $data  = BarangMasuk::all();
        return view('supplier.data-titipan', [
            'data' => $data
        ]);
    }

    function createTitipan()
    {
        return view('supplier.create');
    }
    function storeTitipan(Request $request)
    {
        $request->validate([
            'barang' => 'required|string|max:225',
            'jumlah' => 'required',
            'satuan' => 'required|string|max:255',
            'total_harga' => 'required'
        ]);

        $user = Auth::user();
        $supplier = new BarangMasuk();
        $supplier->user_id = $user->id;

        $supplier->barang = $request->barang;
        $supplier->jumlah = $request->jumlah;
        $supplier->satuan = $request->satuan;
        $supplier->total_harga = $request->total_harga;
        $supplier->save();

        return redirect()->route('supplier.data-titapan')->with('msg', 'Pengaduan berhasil dikirim');
    }

    function detailTitipan($id)
    {
        $data = BarangMasuk::findlOrFail($id);
        return view('supplier.detail-supplier', compact('user'));
    }
}
