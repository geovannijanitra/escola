@extends('master.main')
@section('judul','Tambah Data Nilai')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Tambahkan Data Nilai</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{url('/score')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <select class="form-control select2" id="idSiswa" name="idSiswa" >
                        @foreach ($siswa as $siswa)
                        <option value="{{$siswa->idSiswa}}"> {{$siswa->nama}} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <select class="form-control select2" id="idMapel" name="idMapel" >
                        @foreach ($mapel as $mapel)
                        <option value="{{$mapel->idMapel}}"> {{$mapel->matkul}} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input id="nilai" name="nilai" type="number" class="form-control">
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