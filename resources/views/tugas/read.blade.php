@extends('master.main')
@section('judul','Data Tugas')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Tugas</h4>
                  </div>
                  <div class="pull-left">
                  <a href="tugas/create" class="btn btn-icon icon-left btn-success"><i class="fa fa-plus"></i> Tambahkan Data</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                          <th>Action</th>
                            <th>Mata Pelajaran</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Detail</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ( $tugas as $tugas)
                          <tr>
                          <td>
                          <a href="/tugas/{{ $tugas->idTugas }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> </a>

                              <form action="/tugas/{{ $tugas->idTugas }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> </button>
                              </form></td>
                            <td>{{ $tugas->mapel_id}}</td>
                            <td>{{ $tugas->judul}}</td>
                            <td>{{ $tugas->deskripsi}}</td>
                            <td>
                            <a href="/tugas/{{ $tugas->idTugas }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-copy"></i> Hasil Tugas</a>
                            <!-- <a href="/tugas/{{ $tugas->idTugas }}/edit" class="btn btn-icon icon-left btn-primary"><i class="far fa-calendar-check"></i> Penilaian</a> -->

                            </td>

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
