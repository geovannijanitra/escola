@extends('master.main')
@section('judul','Tambah Data Guru BK')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Tambahkan Data Guru BK</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{url('/gurubk')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nomer Telfon</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input type="number" id="notelp" name="notelp" class="form-control phone-number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" id="tempat" name="tempat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" id="tgllahir" name="tgllahir" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>
                    <div class="form-group">
                        <label>BK Kelas</label>
                        <select class="form-control select2" id="kelas" name="kelas">
                        <option>-</option>
                        <option>Kelas 1</option>
                        <option>Kelas 2</option>
                        <option>Kelas 3</option>
                        </select>
                    </div>
                    <div class="button  pull-right">
                        <button type="submit" class="btn btn-outline-success">Simpan</button>
                        <button href="/gurubk" class="btn btn-outline-danger">Batal</button>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection