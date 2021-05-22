<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use App\Pengumuman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        $kegiatan = Kegiatan::all();
        return view('home',compact('pengumuman','kegiatan'));
    }
}
