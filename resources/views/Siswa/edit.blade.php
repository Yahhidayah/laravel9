@extends('template.default')

@section('body')
<h1>Edit Data</h1>

<div class="card">
    <div class="card-body">
        <form action="{{ route('sekolahs.update', $sekolah->id)}}" class=""method="post">
            @csrf 
            @method('PUT')
                <div class="mb-3">
                <label class="from-label">Nama Sekolah</label>
                <input type="text" name="nama_sekolah" class="from-control" name="example=text-input"
                    placeholder="Masukan Nama Sekolah" value="{{ $sekolah->nama_sekolah }}">
</div>
<div class="mb-3">
                <label class="from-label">Alamat</label>
                <input type="text" name="alamat" class="from-control" name="example=text-input"
                    placeholder="Masukan Alamat" value="{{ $sekolah->alamat }}">
</div>
<div class="mb-3">
                <label class="from-label">Jurusan</label>
                <input type="text" name="jurusan" class="from-control" name="example=text-input"
                    placeholder="Masukan Nama Jurusan" value="{{ $sekolah->jurusan }}">
</div>
<div class="mb-3">
                <label class="from-label">Jumlah Guru</label>
                <input type="text" name="jumlah_guru" class="from-control" name="example=text-input"
                    placeholder="Masukan Jumlah Guru" value="{{ $sekolah->jumlah_guru }}">
</div>

<div>
    <input type="submit" value="Simpan" class="btn btn-primary">
</div>

</from>
</div>
</div>
@endsection