@extends('master.main')
@section('judul','Data Guru BK')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
            
        <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Guru BK</h4>
                  </div>
                  <div class="pull-left">
                  <a href="gurubk/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Data</a>
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
                            <th>BK Kelas</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $gurubk as $gurubk)
                          <tr>
                            <td>
                              <a href="/gurubk/{{ $gurubk->idGurubk }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ubah</a>
                              
                              <form action="/gurubk/{{ $gurubk->idGurubk }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf 
                              <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Hapus</button>
                              </form>
                            </td>
                            <td>{{ $gurubk->nama}}</td>
                            <td>{{ $gurubk->notelp}}</td>
                            <td>{{ $gurubk->tempat}}</td>
                            <td>{{ $gurubk->tgllahir}}</td>
                            <td>{{ $gurubk->kelas}}</td>
                            
                           
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