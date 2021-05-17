@extends('master.main')
@section('judul','Ubah Data Siswa')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data Siswa</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/siswa/{{ $siswa->idSiswa }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="{{$siswa->nama}}" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input value="{{$siswa->alamat}}" id="alamat" name="alamat" type="text" class="form-control phone-number">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" value="{{$siswa->tempat}}" id="tempat" name="tempat">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control datemask" placeholder="YYYY/MM/DD" value="{{$siswa->tgllahir}}" id="tgllahir" name="tgllahir">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control select2" value="{{$siswa->kelamin}}" id="kelamin" name="kelamin">
                        <option>-</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control select2" value="{{$siswa->kelas}}" id="kelas" name="kelas">
                        <option>-</option>
                        <option>Kelas 1</option>
                        <option>Kelas 2</option>
                        <option>Kelas 3</option>
                        </select>
                    </div>
                    <div class="button  pull-right">
                        <button href="#" class="btn btn-outline-success">Update</button>
                        <a href="/siswa" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection