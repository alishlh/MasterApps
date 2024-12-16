<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gaji = Gaji::get();

        return view('admin.gaji.index', [
            'gaji' => $gaji,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'pegawai')->get();
        $jabatan = Jabatan::all();
        return view('admin.gaji.create', [
            'users' => $users,
            'jabatan' => $jabatan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // Menyimpan data gaji ke database
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'gaji' => 'required|numeric',
            'noRek' => 'required|string|max:20',
            'pemabayaran' => 'required|in:tertunda,selesai',
        ]);

        $user = User::find($request->user_id);
        if (!$user || !$user->jabatan) {
            return redirect()->back()->withErrors('Jabatan tidak ditemukan untuk user ini.')->withInput();
        }

        $gaji = new Gaji();
        $gaji->user_id = $request->user_id;
        $gaji->jabatan_id = $user->jabatan->id; // Menggunakan ID jabatan dari relasi
        $gaji->gaji = $request->gaji;
        $gaji->noRek = $request->noRek;
        $gaji->pemabayaran = $request->pemabayaran;
        $gaji->save();


        return redirect()->route('admin.gaji')->with('msg', 'Pengaduan Berhasil Dikirim');
    }


    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    function edit($id)
    {
        $item = Gaji::findOrFail($id);
        $user = User::all();
        $jabatan = Jabatan::all();
        return view('admin.gaji.edit', [
            'item' => $item,
            'user' => $user,
            'jabatan' => $jabatan
        ]);
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'gaji' => 'required|numeric|min:1',
            'noRek' => 'required|numeric|min:0',
            'pemabayaran' => 'required',
        ]);

        $gaji = Gaji::find($id);
        if (!$gaji) {
            return redirect()->back()->with('status', 'Transaksi tidak ditemukan.');
        }

        $gaji->gaji = $validated['gaji'];
        $gaji->noRek = $validated['noRek'];
        $gaji->pemabayaran = $validated['pemabayaran'];
        $gaji->save();

        return redirect()->route('admin.gaji')->with('msg', 'Pengaduan Berhasil Diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    function destroyGaji($id)
    {
        $gaji = Gaji::findOrFail($id);
        $gaji->delete();
        return redirect()->route('admin.gaji');
    }
}
