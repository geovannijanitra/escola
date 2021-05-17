@extends('master.main')
@section('judul','Data Guru Mata Pelajaran')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
            
        <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Guru Mata Pelajaran</h4>
                  </div>
                  <div class="pull-left">
                  <a href="gurumapel/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Data</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Action</th>
                            <th>Nama</th>
                            <th>Nomer Telfon</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $gurumapel as $gurumapel)
                          <tr>
                            <td>
                              <a href="/gurumapel/{{ $gurumapel->idGurumapel }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ubah</a>
                              
                              <form action="/gurumapel/{{ $gurumapel->idGurumapel }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf 
                              <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Hapus</button>
                              </form>
                            </td>
                            <td>{{ $gurumapel->nama}}</td>
                            <td>{{ $gurumapel->notelp}}</td>
                            <td>{{ $gurumapel->tempat}}</td>
                            <td>{{ $gurumapel->tgllahir}}</td>
                            
                           
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