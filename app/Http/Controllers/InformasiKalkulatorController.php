<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiKalkulatorController extends Controller
{
    public function tampilkan()
    {
        return view('informasi_wajib_pajak');
    }
}

// {
//     public function index()
//     {
//         return view('layouts.informasi'); // Perbarui pemanggilan view di sini
//     }

//     public function saveInformasiWajibPajak(Request $request)
//     {
//         // Proses penyimpanan informasi wajib pajak ke database atau tempat penyimpanan lainnya
//         // Contoh: $request->npwp, $request->statusKawin, $request->tanggungan, dll.

//         // Setelah data disimpan, redirect ke langkah berikutnya atau tampilkan pesan sukses
//         return redirect()->route('informasiWajibPajak')->with('success', 'Informasi Wajib Pajak berhasil disimpan.');
//     }
// }
