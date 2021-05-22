@extends('master.main')
@section('judul','Ubah Data Kegiatan')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data Kegiatan</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/kegiatan/{{ $kegiatan->idKegiatan }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{$kegiatan->judul}}" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$kegiatan->deskripsi}}" required>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" value="{{$kegiatan->gambar}}" >
                    </div>
                    <div class="button  pull-right">
                        <br><button type="submit" class="btn btn-outline-success">Simpan</button>
                        <a href="/kegiatan" class="btn btn-outline-danger">Batal</a>
                     </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection