<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data  =  Barang::all();
        return view('admin.barang.index', [
            'data' => $data
        ]);
    }
    public function getBarang($id)
    {
        $barang = Barang::with('user')->find($id); // Model Barang harus sesuai dengan nama tabel Anda

        if ($barang) {
            return response()->json([
                'success' => true,
                'data' => $barang
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan'
        ], 404);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::where('role', 'supplier')->get();
        return view(
            'admin.barang.create',
            [
                'user' => $user
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'stok' => 'required',
            'harga_jual' => 'required',
            'satuan' => 'required',
            'user_id' => 'required'
        ]);

        $user = Auth::user();
        $barang = new Barang();
        $barang->user_id = $user->id;

        $barang->name = $request->name;
        $barang->stok = $request->stok;
        $barang->harga_jual = $request->harga_jual;
        $barang->satuan = $request->satuan;
        $barang->save();

        return redirect()->route('admin.barang.index');
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
    public function edit($barang)
    {
        // $user = User::findOrFail($id);
        $barang = Barang::findOrFail($barang);
        return view('admin.barang.edit', [
            'barang' => $barang
        ]);
    }
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'stok' => 'required|numeric|min:0',
            'harga_jual' => 'required|numeric|min:0',
            'satuan' => 'required|string|max:255',
        ]);

        // Temukan barang berdasarkan ID
        $barang = Barang::find($id);
        if (!$barang) {
            return redirect()->back()->with('status', 'Barang tidak ditemukan.');
        }

        // Perbarui data barang
        $barang->stok = $validated['stok'];
        $barang->harga_jual = $validated['harga_jual'];
        $barang->satuan = $validated['satuan'];
        $barang->save();

        return redirect()->route('admin.barang.index')->with('status', 'Barang berhasil diperbarui.');
    }
    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('admin.barang.index');
    }
}
