@extends('master.main')
@section('judul','Tambah Data Point BK')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Tambahkan Data Point BK</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{url('/pointbk')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Jenis Pelanggaran</label>
                        <select class="form-control select2" id="jenis" name="jenis">
                        <option>-</option>
                        <option>Rendah</option>
                        <option>Sedang</option>
                        <option>Berat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pelanggaran</label>
                        <input type="text" class="form-control"  id="pelanggaran" name="pelanggaran">
                    </div>
                    <div class="form-group">
                        <label>Point</label>
                        <input type="number" class="form-control"  id="point" name="point">
                    </div>
                    <div class="button  pull-right">
                        <button type="submit" class="btn btn-outline-success">Simpan</button>
                        <button href="/pointbk" class="btn btn-outline-danger">Batal</button>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection