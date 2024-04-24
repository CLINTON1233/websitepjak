<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenghasilanController extends Controller
{
    public function tampilkan()
    {
        return view('penghasilan_kalkulator');
    }
}
