@extends('master.main')
@section('judul','Ubah Data Pengumuman')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data Ppengumuman</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/pengumuman/{{ $pengumuman->idPengumuman }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{$pengumuman->judul}}" required>
                    </div>
                    <label>File</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="file" value="{{$pengumuman->file}}" required>
                         <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                    <div class="button  pull-right">
                        <br><button type="submit" class="btn btn-outline-success">Simpan</button>
                        <a href="/pengumuman" class="btn btn-outline-danger">Batal</a>
                     </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection