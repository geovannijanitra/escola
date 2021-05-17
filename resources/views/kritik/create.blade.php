@extends('master.main')
@section('judul','Tambah Kritik dan Saran')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Tambahkan Kritik dan Saran</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{url('/kritik')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Pengirim</label>
                        <input type="text" class="form-control" id="sender" name="sender" required>
                    </div>
                    <div class="form-group">
                        <label>Kritik</label>
                        <input type="text" class="form-control" id="isi" name="isi" required >
                    </div>                    
                    <div class="form-group">
                        <label>Saran</label>
                        <input type="text" class="form-control" id="saran" name="saran" required >
                    </div>
                    <div class="button  pull-right">
                        <button type="submit" class="btn btn-outline-success">Simpan</button>
                        <a href="/kritik" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection