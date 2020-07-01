<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function Congrats(Request $request) {
        $namaDpn= $request["namaDpn"];
        $namaBlkg= $request["namaBlkg"];
        return view('Congrats', ["namaDpn" => $namaDpn, "namaBlkg" => $namaBlkg]);
    }
}
