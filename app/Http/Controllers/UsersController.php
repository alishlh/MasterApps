<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;




class UsersController extends Controller
{
    public function users()
    {
        $data = User::all();
        $jabatan = Jabatan::all();
        return view('admin.users.users', [
            'data' => $data,
            'jabatan' => $jabatan
        ]);
    }
    function create()
    {
        $data = Jabatan::all();
        return view('admin.users.create', [
            'data' => $data
        ]);
    }
    function getUser($id)
    {
        $users = User::with('jabatan', 'gaji')->find($id);

        if ($users) {
            return response()->json([
                'success' => true,
                'data' => $users
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Data tidak ditemukan'
        ], 405);
    }
    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role' => 'required',
            'alamat' => 'required|string|max:255',
            'telp' => 'required',
            'tgl_lahir' => 'required|date',
            'status' => 'nullable',
            'jabatan_id' => 'nullable|exists:jabatans,id'
        ]);



        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->role = $request->role;
        $users->alamat = $request->alamat;
        $users->telp = $request->telp;
        $users->tgl_lahir = $request->tgl_lahir;
        $users->status = $request->status;
        $users->jabatan_id = $request->jabatan_id;

        $users->save();
        return redirect()->route('users')->with('success', 'anda berhasil create data user!');
    }
    function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('users');
    }
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $data = Jabatan::all();
        return view('admin.users.edit', compact('user', 'data'));
    }



    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'role' => 'required',
            'alamat' => 'required|string|max:255',
            'telp' => 'required',
            'tgl_lahir' => 'required|date',
            'status' => 'nullable',
            'jabatan_id' => 'nullable|exists:jabatans,id'
        ]);

        // Temukan barang berdasarkan ID
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('status', 'Barang tidak ditemukan.');
        }

        // Perbarui data barang
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];
        $user->alamat = $validated['alamat'];
        $user->telp = $validated['telp'];
        $user->tgl_lahir = $validated['tgl_lahir'];
        $user->status = $validated['status'];
        $user->jabatan_id = $validated['jabatan_id'];
        return redirect()->route('users')->with('status', 'Barang berhasil diperbarui.');
    }

    function usersSupplier()
    {
        $data = User::where('role', 'supplier')->get();
        return view('admin.supplier.supplier', [
            'data' => $data
        ]);
    }
    function usersPegawai()
    {
        $data = User::where('role', 'pegawai')->get();
        return view('admin.pegawai.pegawai', [
            'data' => $data
        ]);
    }

    //DIVISI
    public function divisi()
    {
        $data = User::where('role', 'pegawai')->get();
        return view('admin.divisi.index', [
            'data' => $data
        ]);
    }
}
