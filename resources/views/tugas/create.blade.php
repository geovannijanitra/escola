@extends('master.main')
@section('judul','Tambah Data Tugas')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Tambahkan Data Tugas</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{url('/tugas')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Mata Pelajaran </label>
                        <select class="form-control select2" id="idMapel" name="idMapel" >
                        @foreach ($mapel as $mapel)
                        <option value="{{$mapel->idMapel}}"> {{$mapel->matkul}} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                    </div>
                    <div class="button  pull-right">
                        <button type="submit" class="btn btn-outline-success">Simpan</a>
                        <button href="/tugas" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</section>
</div>

@endsection


