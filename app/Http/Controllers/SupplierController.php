<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier()
    {
        $data = Supplier::all();
        return view('admin.supplier.supplier', [
            'data' => $data
        ]);
    }
    public function create()
    {
        return view('admin.supplier.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|max:255|required',
            'alamat' => 'string|max:255|required',
            'telp' => 'numeric|min:10|required',
        ]);

        $supplier = new Supplier;
        $supplier->name = $request->name;
        $supplier->alamat = $request->alamat;
        $supplier->telp = $request->telp;

        $supplier->save();

        return redirect()->route('supplier');
    }
    public function delete($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('supplier');
    }
    // public function edit($id)
    // {
    //     $supplier = Supplier::findOrFail($id);
    //     return view('admin.supplier.edit', compact('supplier'));
    //     //ccompact ('supplier') variable digunakan untuk menmpilkan data pada view.
    // }
    public function edit()
    {
        return view('admin.supplier.supplier');
    }

    //     public function update(Request $request, $id)
    // {
    //     // Validasi data yang diterima
    //     $request->validate([
    //         'name' => 'string|max:255|required',
    //         'alamat' => 'string|max:255|required',
    //         'telp' => 'numeric|min:10|required',
    //     ]);

    //     // Mencari supplier berdasarkan ID
    //     $supplier = Supplier::findOrFail($id);

    //     // Memperbarui data supplier
    //     $supplier->name = $request->name;
    //     $supplier->alamat = $request->alamat;
    //     $supplier->telp = $request->telp;

    //     // Menyimpan perubahan ke database
    //     $supplier->save();

    //     // Mengarahkan kembali ke route supplier dengan pesan sukses (opsional)
    //     return redirect()->route('supplier')->with('success', 'Supplier berhasil diperbarui.');

    // }
    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'name' => 'string|max:255|required',
            'alamat' => 'string|max:255|required',
            'telp' => 'numeric|min:10|required',
        ]);

        // Mencari supplier berdasarkan ID
        $supplier = Supplier::findOrFail($id);

        // Memperbarui data supplier
        $supplier->name = $request->name;
        $supplier->alamat = $request->alamat;
        $supplier->telp = $request->telp;

        // Menyimpan perubahan ke database
        $supplier->save();

        // Mengarahkan kembali ke route supplier dengan pesan sukses (opsional)
        return redirect()->route('supplier')->with('success', 'Supplier berhasil diperbarui.');
    }
}
