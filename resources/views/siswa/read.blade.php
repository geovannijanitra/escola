@extends('master.main')
@section('judul','Data Siswa')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
            
        <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Siswa</h4>
                  </div>
                  <div class="pull-left">
                  <a href="siswa/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Data</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Action</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $siswa as $siswa)
                          <tr>
                            <td>
                              <a href="/siswa/{{ $siswa->idSiswa }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ubah</a>
                              
                              <form action="/siswa/{{ $siswa->idSiswa }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf 
                              <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Hapus</button>
                              </form>
                            </td>
                            <td>{{ $siswa->nama}}</td>
                            <td>{{ $siswa->alamat}}</td>
                            <td>{{ $siswa->tempat}}</td>
                            <td>{{ $siswa->tgllahir}}</td>
                            <td>{{ $siswa->kelamin}}</td>
                            <td>{{ $siswa->kelas}}</td>
                                                       
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
</div>

@endsection