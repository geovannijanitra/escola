@extends('master.main')
@section('judul','Ubah Data Wali Murid')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data Wali Murid</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/walimurid/{{ $walimurid->idWalimurid }}"enctype="multipart/form-data">
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
                        <label>Nama Ayah</label>
                        <input id="namaayah" name="namaayah" value="{{$walimurid->namaayah}}" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nomer Telfon</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input id="notelpayah" name="notelpayah" value="{{$walimurid->notelpayah}}" type="number" class="form-control phone-number">
                        </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input id="tempatayah" name="tempatayah" value="{{$walimurid->tempatayah}}" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input id="tgllahirayah" name="tgllahirayah" value="{{$walimurid->tgllahirayah}}" type="date" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input id="namaibu" name="namaibu" value="{{$walimurid->namaibu}}" type="text" class="form-control phone-number">
                    </div>
                    <div class="form-group">
                        <label>Nomer Telfon</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input id="notelpibu" name="notelpibu" value="{{$walimurid->notelpibu}}" type="number" class="form-control phone-number">
                        </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input id="tempatibu" name="tempatibu" value="{{$walimurid->tempatibu}}" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input id="tgllahiribu" name="tgllahiribu" value="{{$walimurid->tgllahiribu}}" type="date" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>
                    <div class="form-group">
                        <label>Nama Wali</label>
                        <input id="namawali" name="namawali" value="{{$walimurid->namawali}}" type="text" class="form-control phone-number">
                    </div>
                    <div class="form-group">
                        <label>Nomer Telfon</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input id="notelpwali" name="notelpwali" value="{{$walimurid->notelpwali}}" type="number" class="form-control phone-number">
                        </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input id="tempatwali" name="tempatwali" value="{{$walimurid->tempatwali}}" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input id="tgllahirwali" name="tgllahirwali" value="{{$walimurid->tgllahirwali}}" type="date" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>
                    <div class="button  pull-right">
                        <button href="#" class="btn btn-outline-success">Update</button>
                        <a href="/walimurid" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection