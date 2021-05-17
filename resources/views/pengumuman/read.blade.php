@extends('master.main')
@section('judul','Data Pengumuman')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Pengumuman</h4>
                  </div>
                  <div class="pull-left">
                  <a href="pengumuman/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Data</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Action</th>
                            <th>Judul Pengumuman</th>
                            <th>File</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $pengumuman as $pengumuman)
                          <tr>
                            <td>
                              <a href="/pengumuman/{{ $pengumuman->idPengumuman }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ubah</a>
                              
                              <form action="/pengumuman/{{ $pengumuman->idPengumuman }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf 
                              <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Hapus</button>
                              </form>
                            </td>
                            <td>{{ $pengumuman->judul}}</td>
                            <td>{{ $pengumuman->file}}</td>
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