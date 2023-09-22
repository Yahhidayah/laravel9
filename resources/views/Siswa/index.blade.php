@extends('template.default')

@section('body')
<h1>NOR HIDAYAH FITRIYANI</h1>

<div class="col-lg-8">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>nama_sekolah</th>
                          <th>alamat</th>
                          <th>jurusan</th>
                          <th>jumlah_guru</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($sekolahs as $sekolah)
                            <td>{{ $sekolah -> nama_sekolah }} </td>
                            <td>{{ $sekolah -> alamat  }} </td>
                            <td>{{ $sekolah -> jurusan }} </td>
                            <td>{{ $sekolah -> jumlah_guru  }} </td>
                          <td>
                            <a href="{{ route('sekolahs.edit', $sekolah->id) }}">Edit</a>
                            <form action="{{ route('sekolahs.hapus', $sekolah->id ) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" value="hapus" class= "btn btn-danger btn-sm">
                            </form>
                          </td>
                        </tr>
                        @endforeach
                        
                        
                      
</tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection