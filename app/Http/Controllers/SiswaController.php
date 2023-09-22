<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswas.index', [
            'siswas' => sekolah::get(),
        ]);
    }

    public function tambah()
    {
        return view('siswas.tambah', [
        
        ]);
    }

   public function store(Request $request)
    {
        $sekolah = new Sekolah();

        $sekolah->namasekolah = $request->namasekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlahguru = $request->jumlahguru;

        $sekolah->save();

        return redirect()->route('Siswa.index');
    }
}