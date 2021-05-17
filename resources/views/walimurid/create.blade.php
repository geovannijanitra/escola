@extends('master.main')
@section('judul','Tambah Data Wali Murid')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Tambahkan Data Wali Murid</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{url('/walimurid')}}" enctype="multipart/form-data">
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
                        <label>Nama Ayah</label>
                        <input id="namaayah" name="namaayah" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nomer Telfon</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input id="notelpayah" name="notelpayah"type="number" class="form-control phone-number">
                        </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input id="tempatayah" name="tempatayah" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input id="tgllahirayah" name="tgllahirayah" type="date" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input id="namaibu" name="namaibu" type="text" class="form-control phone-number">
                    </div>
                    <div class="form-group">
                        <label>Nomer Telfon</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input id="notelpibu" name="notelpibu" type="number" class="form-control phone-number">
                        </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input id="tempatibu" name="tempatibu" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input id="tgllahiribu" name="tgllahiribu" type="date" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>
                    <div class="form-group">
                        <label>Nama Wali</label>
                        <input id="namawali" name="namawali" type="text" class="form-control phone-number">
                    </div>
                    <div class="form-group">
                        <label>Nomer Telfon</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input id="notelpwali" name="notelpwali" type="number" class="form-control phone-number">
                        </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input id="tempatwali" name="tempatwali" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input id="tgllahirwali" name="tgllahirwali" type="date" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>
                    <div class="button  pull-right">
                        <button type="submit" class="btn btn-outline-success">Simpan</button>
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