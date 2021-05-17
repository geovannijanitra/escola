@extends('master.main')
@section('judul','Tambah Data Mata Pelajaran')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Tambahkan Data Mata Pelajaran</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{url('/mapel')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Kode Mata Pelajaran</label>
                        <input type="number" class="form-control" id="kode" name="kode" required>
                    </div>
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input type="text" class="form-control" id="matkul" name="matkul" required >
                    </div>
                    <div class="form-group">
                        <label>Pengajar</label>
                        <select class="form-control select2" id="idGurumapel" name="idGurumapel" required>
                        @foreach ($gurumapel as $gurumapel)
                        <option value="{{$gurumapel->idGurumapel}}">{{$gurumapel->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="button  pull-right">
                        <button type="submit" class="btn btn-outline-success">Simpan</button>
                        <a href="/mapel" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection