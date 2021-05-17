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
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" id="judul" name="judul" value="{{$pengumuman->judul}}">
                            </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File</label>
                        <div class="col-sm-12 col-md-7">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="file" id="file" value="{{$pengumuman->file}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button href="#" class="btn btn-primary">Publish</button>
                                <a href="/pengumuman" class="btn btn-outline-danger">Batal</a>
                            </div>
                   </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection