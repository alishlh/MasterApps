<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UsersController extends Controller
{
    public function users()
    {
        $data = User::all();
        return view('admin.users.users', [
            'data' => $data
        ]);
    }
    function create()
    {
        return view('admin.users.create');
    }
    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'img' => 'required',
            'role' => 'required',
            'alamat' => 'required|string|max:255',
            'telp' => 'required|min:10|numeric',
            'tgl_lahir' => 'required|date'
        ]);

        $users = new User;
        $users->name = $request->name;
        $users->password = $request->password;
        $users->email = $request->email;
        $users->img = $request->img;
        $users->role = $request->role;
        $users->alamat = $request->alamat;
        $users->telp = $request->telp;
        $users->tgl_lahir = $request->tgl_lahir;

        $users->save();
        return redirect()->route('users');
    }
    function delete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('users');
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
}
