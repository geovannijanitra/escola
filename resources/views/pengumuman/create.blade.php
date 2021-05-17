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
                                <label>File</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file" name="file" required>
                                    <label class="custom-file-label" for="file">Choose file</label>
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