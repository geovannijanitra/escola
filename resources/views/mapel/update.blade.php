@extends('master.main')
@section('judul','Ubah Data Mata Pelajaran')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data Mata Pelajaran</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/mapel/{{ $mapel->idMapel }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                <div class="form-group">
                    <label>Kode Mata Pelajaran</label>
                    <input type="number" class="form-control" id="kode" name="kode" value="{{$mapel->kode}}">
                </div>
                <div class="form-group">
                    <label>Mata Pelajaran</label>
                    <input type="text" class="form-control" id="matkul" name="matkul" value="{{$mapel->matkul}}">
                </div>
                <div class="form-group">
                    <label>Pengajar</label>
                    <select class="form-control select2" id="idPengajar" name="idPengajar">
                    @foreach ($gurumapel as $gurumapel)
                    <option value="{{$gurumapel->idPengajar}}"> {{$gurumapel->nama}} </option>
                    @endforeach
                    </select>
                </div>
                <div class="button  pull-right">
                    <a href="#" class="btn btn-outline-success">Update</a>
                    <a href="/mapel" class="btn btn-outline-danger">Batal</a>
                </div>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection