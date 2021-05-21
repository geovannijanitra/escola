@extends('master.main')
@section('judul','Data Mata Pelajaran')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
            
        <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Mata Pelajaran</h4>
                  </div>
                  <div class="pull-left">
                  <a href="mapel/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Data</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Action</th>
                            <th>Kode Mata Pelajaran</th>
                            <th>Mata Pelajaran</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $mapel as $mapel)
                          <tr>
                            <td>
                              <a href="/mapel/{{ $mapel->idMapel }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ubah</a>
                              
                              <form action="/mapel/{{ $mapel->idMapel }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf 
                              <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Hapus</button>
                              </form>
                            </td>
                            
                            <td>{{ $mapel->idMapel}}</td>
                            <td>{{ $mapel->matkul}}</td>
                           
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