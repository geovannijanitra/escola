@extends('master.main')
@section('judul','Ubah Data Tugas')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data Tugas</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/tugas/{{ $tugas->idTugas }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Mata Pelajaran </label>
                        <select class="form-control select2" id="idMapel" name="idMapel" >
                        @foreach ($mapel as $mapel)
                        <option value="{{$mapel->idMapel}}"> {{$mapel->matkul}} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Judul</label>
                        <input type="text" class="form-control" value="{{$tugas->judul}}" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input value="{{$tugas->deskripsi}}" id="deskripsi" name="deskripsi" type="text" class="form-control">
                    </div>
                    <div class="button  pull-right">
                        <button href="#" class="btn btn-outline-success">Update</button>
                        <a href="/tugas" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</section>
</div>

@endsection
