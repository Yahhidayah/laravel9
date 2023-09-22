<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\sekolah;

class SekolahController extends controller
{
    public function index()
    {
        $sekolahs =sekolah::get();
        return view('Siswa.index') ->with('sekolahs',$sekolahs);
    }
    public function tambah()
    {
        return view('Siswa.tambah');
    }

public function simpan(Request $request)
{
    $sekolah = new Sekolah();

    $sekolah->nama_sekolah = $request->nama_sekolah;
    $sekolah->alamat = $request->alamat;
    $sekolah->jurusan = $request->jurusan;
    $sekolah->jumlah_guru = $request->jumlah_guru;

    $sekolah->save();

    return redirect()->back();

}
public function edit($id)
{
    $sekolah = Sekolah::find($id);

    return view('siswa.edit', [
        'sekolah' =>  $sekolah
    ]);
}
public function update(Request $request,$id)
{
    $sekolah =  Sekolah::find($id);

    $sekolah->nama_sekolah = $request->nama_sekolah;
    $sekolah->alamat = $request->alamat;
    $sekolah->jurusan = $request->jurusan;
    $sekolah->jumlah_guru = $request->jumlah_guru;

    $sekolah->save();
 
   
    return redirect()->route ('sekolahs.index');
}
  public function hapus($id)
  {
    $sekolah = sekolah::find($id);

    $sekolah->delete();

    return redirect()->route('sekolahs.index');

  }
}