@extends('template.default')

@section('body')
<h1>Tambah Data</h1>

<div class="card">
    <div class="card-body">
        <form action="/sekolah" class=""method="post">
            @csrf
<div class="mb-3">
             <label class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" name="example-text-input" placeholder="Tulis Nama Sekolah">
    </div>

    <div class="mb-3">
             <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" name="example-text-input" placeholder="Tulis Alamat Sekolah">
    </div>

    <div class="mb-3">
             <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" name="example-text-input" placeholder="Tulis Nama Jurusan">
    </div>

    <div class="mb-3">
             <label class="form-label">Jumlah guru</label>
            <input type="text" name="jumlah_guru" class="form-control" name="example-text-input" placeholder="Tulis Jumlah Guru">
    </div>

    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
</div>
</form>
</div>
</div>

@endsection