<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MahasiswaController extends Controller
{
    public function form(){
        return view('form');
    }

    public function simpan(Request $request){
        mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
        ]);
        
        return "Data mahasiswa berhasil disimpan!";
    }

    public function daftar(){
        $data = mahasiswa::all();
        return view('mahasiswa', ['mahasiswa' => $data]);
    }
}
