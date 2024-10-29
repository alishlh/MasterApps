<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        return view('index');
    }

    function i()
    {
        return view('login');
    }
}
