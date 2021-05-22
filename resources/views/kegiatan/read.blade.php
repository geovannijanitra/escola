@extends('master.main')
@section('judul','Data Kegiatan')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Kegiatan</h4>
          </div>
          <div class="pull-left">
            <a href="kegiatan/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>Action</th>
                    <th>Judul Kegiatan</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $kegiatan as $kegiatan)
                    <tr>
                      <td>
                        <a href="/kegiatan/{{ $kegiatan->idKegiatan }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ubah</a> 
                        <form action="/kegiatan/{{ $kegiatan->idKegiatan }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf 
                          <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Hapus</button>
                        </form>
                      </td>
                      <td>{{ $kegiatan->judul}}</td>
                      <td>{{ $kegiatan->deskripsi}}</td>
                      <td>
                        <img src="{{$kegiatan->gambar}}" width=100>
                      </td>
                      <!-- <td>{{ $kegiatan->gambar}}</td> -->
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