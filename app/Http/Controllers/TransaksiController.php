<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;

use Illuminate\Http\Request;




class TransaksiController extends Controller
{
    function index()
    {
        $transaksi = Transaksi::all();
        return view('admin.transaksi.index', ['transaksi' => $transaksi]);
    }
    function create()
    {
        $barang = Barang::all();
        return view('admin.transaksi.create', ['barang' => $barang]);
    }
    function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required',
            'jumlah' => 'required',
            'total' => 'required'
        ]);

        $transaksi = new Transaksi();
        $transaksi->barang_id = $request->barang_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total = $request->total;
        $transaksi->save();


        return redirect()->route('admin.transaksi')->with('msg', 'Pengaduan Berhasil Dikirim');
    }

    function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.edit', ['transaksi' => $transaksi]);
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jumlah' => 'required|numeric|min:1',
            'total' => 'required|numeric|min:0',
        ]);

        $transaksi = Transaksi::find($id);
        if (!$transaksi) {
            return redirect()->back()->with('status', 'Transaksi tidak ditemukan.');
        }

        $transaksi->jumlah = $validated['jumlah'];
        $transaksi->total = $validated['total'];
        $transaksi->save();

        return redirect()->route('admin.transaksi')->with('status', 'Transaksi berhasil diperbarui.');
    }
    function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('admin.transaksi');
    }
}
