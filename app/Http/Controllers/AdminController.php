<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        $users = User::all();
        $supplier = User::where('role', 'supplier')->count();
        return view(
            'admin.index',
            [
                'users' => $users,
                'supplier' => $supplier
            ]
        );
    }


    function barangMasuk()
    {
        $value = Barangmasuk::all();
        return view('admin.barangMasuk.index', compact('value'));
    }

    public function persetujuanBarangMasuk($id)
    {
        // Ambil data barang masuk berdasarkan ID
        $barangMasuk = BarangMasuk::findOrFail($id);

        // Cek apakah barang sudah ada di tabel barang
        $barang = Barang::where('name', $barangMasuk->barang->barang)->first();

        if ($barang) {
            // Jika barang sudah ada, tambahkan jumlah ke stok barang
            $barang->stok += $barangMasuk->jumlah;
            $barang->save();
        } else {
            // Jika barang belum ada, tambahkan barang baru ke tabel barang
            Barang::create([
                'name' => $barangMasuk->barang->barang,
                'satuan' => $barangMasuk->barang->satuan,
                'harga_jual' => $barangMasuk->harga,
                'stok' => $barangMasuk->jumlah,
            ]);
        }

        // Tandai barang masuk sebagai disetujui
        $barangMasuk->save();

        return redirect()->route('admin.barangMasuk.index')->with('success', 'Barang berhasil ditambahkan atau stok diperbarui.');
    }
}
