<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.index');
        } elseif (Auth::user()->role == 'supplier') {
            return redirect()->route('supplier.index');
        } elseif (Auth::user()->role == 'pegawai') {
            return redirect()->route('pegawai.index');
        }
    }
}
