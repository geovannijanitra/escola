@extends('master.main')
@section('judul','Ubah Data Guru Mata Pelajaran')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data Guru Mata Pelajaran</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/gurumapel/{{ $gurumapel->idGurumapel }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Username </label>
                        <select class="form-control select2" id="idUser" name="idUser" >
                        @foreach ($user as $user)
                        <option value="{{$user->idUser}}"> {{$user->email}} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mata Pelajaran </label>
                        <select class="form-control select2" id="idMapel" name="idMapel" >
                        @foreach ($mapel as $mapel)
                        <option value="{{$mapel->idMapel}}"> {{$mapel->matkul}} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="{{$gurumapel->nama}}" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label>Nomer Telfon</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input value="{{$gurumapel->notelp}}" id="notelp" name="notelp" type="number" class="form-control phone-number">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input value="{{$gurumapel->tempat}}" id="tempat" name="tempat" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input value="{{$gurumapel->tgllahir}}" id="tgllahir" name="tgllahir" type="date" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>

                    <div class="button  pull-right">
                        <button href="#" class="btn btn-outline-success">Update</button>
                        <a href="/gurumapel" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection