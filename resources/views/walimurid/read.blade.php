@extends('master.main')
@section('judul','Data Wali Murid')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
            
        <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Wali Murid</h4>
                  </div>
                  <div class="pull-left">
                  <a href="walimurid/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Data</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Action</th>
                                                        <th>Nama Siswa</th>
                            <th>Nama Ayah</th>
                            <th>Nomer Telfon</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Ibu</th>
                            <th>Nomer Telfon</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Wali</th>
                            <th>Nomer Telfon</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $walimurid as $walimurid)
                          <tr>
                            <td>
                              <a href="/walimurid/{{ $walimurid->idWalimurid }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ubah</a>
                              
                              <form action="/walimurid/{{ $walimurid->idWalimurid }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf 
                              <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Hapus</button>
                              </form>
                            </td>
                            
                            <td>{{ $walimurid->siswa->nama}}</td>
                            <td>{{ $walimurid->namaayah}}</td>
                            <td>{{ $walimurid->notelpayah}}</td>
                            <td>{{ $walimurid->tempatayah}}</td>
                            <td>{{ $walimurid->tgllahirayah}}</td>
                            <td>{{ $walimurid->namaibu}}</td>
                            <td>{{ $walimurid->notelpibu}}</td>
                            <td>{{ $walimurid->tempatibu}}</td>
                            <td>{{ $walimurid->tgllahiribu}}</td>
                            <td>{{ $walimurid->namawali}}</td>
                            <td>{{ $walimurid->notelpwali}}</td>
                            <td>{{ $walimurid->tempatwali}}</td>
                            <td>{{ $walimurid->tgllahirwali}}</td>
                            
                           
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