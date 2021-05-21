@extends('master.main')
@section('judul','Tambah Pengumuman')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Pengumuman</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{url('/pengumuman')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                </div>
                                <div class="form-group">
                                    <label>File</label>
                                    
                                        <input type="file" class="form-control" id="file" name="file" required>
                                    
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
        </div>  
    </section>
</div>
@endsection