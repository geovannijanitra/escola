@extends('master.main')
@section('judul','Ubah Kritik dan Saran')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Kritik dan Saran</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/kritik/{{ $kritik->idKritik }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                <div class="form-group">
                    <label>Pengirim</label>
                    <input type="text" class="form-control" id="sender" name="sender" required value="{{$kritik->sender}}">
                </div>
                <div class="form-group">
                    <label>Kritik</label>
                    <input type="text" class="form-control" id="isi" name="isi" required value="{{$kritik->isi}}">
                </div>
                <div class="form-group">
                    <label>Saran</label>
                    <input type="text" class="form-control" id="saran" name="saran" required value="{{$kritik->saran}}">
                </div>
                <div class="button  pull-right">
                    <a href="#" class="btn btn-outline-success">Update</a>
                    <a href="/kritik" class="btn btn-outline-danger">Batal</a>
                </div>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection