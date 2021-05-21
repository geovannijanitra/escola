@extends('master.main')
@section('judul','Ubah Data Nilai')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data Nilai</h4>
                </div>
                <div class="card-body">

                <form class="form-horizontal" method="POST" action="/score/{{ $score->idScore }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <select class="form-control select2" id="idSiswa" name="idSiswa">
                        @foreach ($siswa as $siswa)
                        <option value="{{$siswa->idSiswa}}"> {{$siswa->nama}} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <select class="form-control select2" id="idMapel" name="idMapel">
                        @foreach ($mapel as $mapel)
                        <option value="{{$mapel->idMapel}}"> {{$mapel->matkul}} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input id="nilai" name="nilai" value="{{$score->nilai}}" type="text" class="form-control">
                    </div>
                    <div class="button  pull-right">
                        <button type="submit" class="btn btn-outline-success">Simpan</button>
                        <a href="/score" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection