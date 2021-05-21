@extends('master.main')
@section('judul','Tambah Data Siswa')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Tambahkan Data Siswa</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{url('/siswa')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama </label>
                        <select class="form-control select2" id="idUser" name="idUser" >
                        @foreach ($user as $user)
                        <option value="{{$user->idUser}}"> {{$user->email}} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input id="alamat" name="alamat" type="text" class="form-control phone-number">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input id="tempat" name="tempat" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input id="tgllahir" name="tgllahir" type="date" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select id="kelamin" name="kelamin" class="form-control select2">
                        <option>-</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select id="kelas" name="kelas" class="form-control select2">
                        <option>-</option>
                        <option>Kelas 1</option>
                        <option>Kelas 2</option>
                        <option>Kelas 3</option>
                        </select>
                    </div>
                    <div class="button  pull-right">
                        <button type="submit" class="btn btn-outline-success">Simpan</button>
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