@extends('master.main')
@section('judul','Tambah Kegiatan')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Kegiatan</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{url('/kegiatan')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar" required>
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
        </div>  
    </section>
</div>
@endsection