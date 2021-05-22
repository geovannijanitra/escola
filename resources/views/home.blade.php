@extends('master.main')
@section('judul','Dashboard')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <a  href="/tugas">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Tugas</h5>
                                        <!-- <h2 class="mb-3 font-18">258</h2>
                                        <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{asset('fn')}}/assets/img/banner/1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <a  href="/tugas">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15"> Hasil Tugas</h5>
                                        <!-- <h2 class="mb-3 font-18">1,287</h2>
                                        <p class="mb-0"><span class="col-orange">09%</span> Decrease</p> -->
                                    </div>
                                </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                            <img src="{{asset('fn')}}/assets/img/banner/2.png" alt="">
                        </div>
                        </div>
                    </div>
                    </div>
                        </a>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                <div class="card-statistic-4">
                <a  href="/nilai">
                    <div class="align-items-center justify-content-between">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                            <h5 class="font-15">Nilai</h5>
                            <!-- <h2 class="mb-3 font-18">128</h2>
                            <p class="mb-0"><span class="col-green">18%</span>Increase</p> -->
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                            <img src="{{asset('fn')}}/assets/img/banner/3.png" alt="">
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                <div class="card-statistic-4">
                <a  href="/kritik">
                    <div class="align-items-center justify-content-between">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                            <h5 class="font-15">Kritik dan Saran</h5>
                            <!-- <h2 class="mb-3 font-18">$48,697</h2>
                            <p class="mb-0"><span class="col-green">42%</span> Increase</p> -->
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                            <img src="{{asset('fn')}}/assets/img/banner/4.png" alt="">
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
                </div>
                </div>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Pengumuman</h4>
                </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover mb-0" >
                <thead>
                  <tr>
                    <th>Judul Pengumuman</th>
                    <th>File</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $pengumuman as $pengumuman)
                    <tr>
                      <td>{{ $pengumuman->judul}}</td>
                      <td>
                        <a href="{{$pengumuman->file}}" width=250>Download File
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
              </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                            <h4>Kegiatan</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($kegiatan as $kegiatan)

                             <img src="{{$kegiatan->gambar}}"width="400">

                            @endforeach

                        </div>
            </div>
        </div>
    </section>
</div>



@endsection
