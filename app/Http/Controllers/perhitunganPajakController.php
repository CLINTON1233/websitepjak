<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perhitunganPajakController extends Controller
{
    public function tampilkan()
    {
        return view('perhitungan_pajak');
    }
}
