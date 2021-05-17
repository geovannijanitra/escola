@extends('master.main')
@section('judul','Ubah Data Point BK')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data Point BK</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/pointbk/{{ $pointbk->idPointbk }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Jenis Pelanggaran</label>
                        <select class="form-control select2" id="jenis" name="jenis" value="{{$pointbk->jenis}}">
                        <option>-</option>
                        <option>Ringan</option>
                        <option>Sedang</option>
                        <option>Berat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pelanggaran</label>
                        <input type="text" class="form-control" id="pelanggaran" name="pelanggaran" value="{{$pointbk->pelanggaran}}">
                    </div>
                    <div class="form-group">
                        <label>Point</label>
                        <input type="number" class="form-control" id="point" name="point" value="{{$pointbk->point}}">
                    </div>
                    <div class="button  pull-right">
                        <button href="#" class="btn btn-outline-success">Update</button>
                        <a href="/pointbk" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection