<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layananPajakController extends Controller
{
    public function tampilkan()
    {
        return view('layanan_pajak');
    }
}
