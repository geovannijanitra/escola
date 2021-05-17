@extends('master.main')
@section('judul','Ubah Data Guru BK')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data Guru BK</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/gurubk/{{ $gurubk->idGurubk }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" value="{{$gurubk->nama}}" id="nama" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nomer Telfon</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input value="{{$gurubk->notelp}}" type="number" id="notelp" name="notelp" class="form-control phone-number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" value="{{$gurubk->tempat}}" id="tempat" name="tempat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" value="{{$gurubk->tgllahir}}" id="tgllahir" name="tgllahir" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>
                    <div class="form-group">
                        <label>BK Kelas</label>
                        <select id="kelas" value="{{$gurubk->kelas}}" name="kelas" class="form-control select2">
                        <option>-</option>
                        <option>Kelas 1</option>
                        <option>Kelas 2</option>
                        <option>Kelas 3</option>
                        </select>
                    </div>
                    <div class="button  pull-right">
                        <button href="#" class="btn btn-outline-success">Update</button>
                        <a href="/gurubk" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection