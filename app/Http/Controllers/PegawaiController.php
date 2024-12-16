<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gaji;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class PegawaiController extends Controller
{
    function dashboard()
    {
        return view('pegawai.dashboard');
    }
    function data()
    {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->first();
        return view('pegawai.data', ['user' => $user]);
    }

    public function gaji()
    {
        $gaji = Gaji::where('user_id', auth()->id())->get();


        return view('pegawai.gaji.index', [
            'gaji' => $gaji,
        ]);
    }

    function transaksi()
    {
        $data = Transaksi::all();
        return view('pegawai.transaksi.index', [
            'data' => $data
        ]);
    }
    function createTransaksi()
    {
        return view('pegawai.transaksi.create');
    }
}
