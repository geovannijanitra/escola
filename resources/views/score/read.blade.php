@extends('master.main')
@section('judul','Data Nilai')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Nilai</h4>
                  </div>
                  <div class="pull-left">
                  <a href="score/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Data</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Action</th>
                            <th>Nama Siswa</th>
                            <th>Kode Mata Pelajaran</th>
                            <th>Nilai</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $score as $score)
                          <tr>
                            <td>
                              <a href="/score/{{ $score->idScore }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ubah</a>
                              
                              <form action="/score/{{ $score->idScore }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf 
                              <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Hapus</button>
                              </form>
                            </td>
                            
                            <td>{{ $score->siswa->nama}}</td>
                            <td>{{ $score->mapel_id}}</td>
                            <td>{{ $score->nilai}}</td>
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