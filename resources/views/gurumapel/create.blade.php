@extends('master.main')
@section('judul','Tambah Data Guru Mata Pelajaran')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Tambahkan Data Guru Mata Pelajaran</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{url('/gurumapel')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Nomer Telfon</label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input type="number" class="form-control phone-number" id="notelp" name="notelp" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control datemask" placeholder="YYYY/MM/DD" id="tgllahir" name="tgllahir" required>
                    </div>
                    <div class="button  pull-right">
                        <button type="submit" class="btn btn-outline-success">Simpan</a>
                        <button href="/gurumapel" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection