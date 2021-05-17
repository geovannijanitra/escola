@extends('master.main')
@section('judul','Data Kritik dan Saran')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
            
        <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Kritik dan Saran</h4>
                  </div>
                  <div class="pull-left">
                  <a href="kritik/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Kritik</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Action</th>
                            <th>Pengirim</th>
                            <th>Kritik</th>
                            <th>Saran</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $kritik as $kritik)
                          <tr>
                            <td>
                              <form action="/kritik/{{ $kritik->idKritik }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf 
                              <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Hapus</button>
                              </form>
                            </td>
                            <td>{{ $kritik->sender}}</td>
                            <td>{{ $kritik->isi}}</td>
                            <td>{{ $kritik->saran}}</td>
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