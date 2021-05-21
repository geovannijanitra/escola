@extends('master.main')
@section('judul','Ubah Data User')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Data User</h4>
                </div>
                <div class="card-body">
                <form class="form-horizontal" method="POST" action="/user/{{ $user->idUser }}"enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                      <label>Level</label>
                      <select class="form-control" id="level" name="level" value="{{$user->level}}">
                        <option value="Admin">Admin</option>
                        <option value="Guru">Guru</option>
                        <option value="Siswa">Siswa</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" name="email" value="{{$user->email}}" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" name="password" value="{{$user->password}}" type="password" class="form-control">
                    </div>
                    <div class="button  pull-right">
                        <button href="#" class="btn btn-outline-success">Update</button>
                        <a href="/user" class="btn btn-outline-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>        
        </div>
    </div>
</section>
</div>

@endsection