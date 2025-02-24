<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function pengembalian(){
        return view('layouts.backend.pengembalian');
    }
}
