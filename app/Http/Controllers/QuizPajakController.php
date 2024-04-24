<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizPajakController extends Controller
{
    public function tampilkan()
    {
        return view('quiz_pajak');
    }
}
