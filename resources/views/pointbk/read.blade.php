@extends('master.main')
@section('judul','Data Point BK')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
            
        <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Point BK</h4>
                  </div>
                  <div class="pull-left">
                  <a href="pointbk/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Data</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Action</th>
                            <th>Jenis Pelanggaran</th>
                            <th>Pelanggaran</th>
                            <th>Point</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $pointbk as $pointbk)
                          <tr>
                            <td>
                              <a href="/pointbk/{{ $pointbk->idPointbk }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Ubah</a>
                              
                              <form action="/pointbk/{{ $pointbk->idPointbk }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf 
                              <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Hapus</button>
                              </form>
                            </td>
                            <td>{{ $pointbk->jenis}}</td>
                            <td>{{ $pointbk->pelanggaran}}</td>
                            <td>{{ $pointbk->point}}</td>
                           
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