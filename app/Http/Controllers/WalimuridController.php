<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Walimurid;
use Illuminate\Http\Request;

class WalimuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        $walimurid = Walimurid::all();
        return view('walimurid.read', compact('walimurid','siswa'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $siswa = Siswa::all();
        return view('walimurid.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Walimurid::create([
            'siswa_id'=>$request->idSiswa,
            'namaayah' => $request->namaayah,
            'notelpayah' => $request->notelpayah,
            'tempatayah' => $request->tempatayah,
            'tgllahirayah' => $request->tgllahirayah,
            'namaibu' => $request->namaibu,
            'notelpibu' => $request->notelpibu,
            'tempatibu' => $request->tempatibu,
            'tgllahiribu' => $request->tgllahiribu,
            'namawali' => $request->namawali,
            'notelpwali' => $request->notelpwali,
            'tempatwali' => $request->tempatwali,
            'tgllahirwali' => $request->tgllahirwali,

        ]);
        return redirect('/walimurid');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Walimurid  $walimurid
     * @return \Illuminate\Http\Response
     */
    public function show(Walimurid $walimurid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Walimurid  $walimurid
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $siswa = Siswa::all();
        $walimurid=Walimurid::find($id);
        return view ('walimurid.update', compact('walimurid','siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Walimurid  $walimurid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Walimurid::where('idWalimurid', $id)->update([
            'siswa_id'=>$request->idSiswa,
            'namaayah' => $request->namaayah,
            'notelpayah' => $request->notelpayah,
            'tempatayah' => $request->tempatayah,
            'tgllahirayah' => $request->tgllahirayah,
            'namaibu' => $request->namaibu,
            'notelpibu' => $request->notelpibu,
            'tempatibu' => $request->tempatibu,
            'tgllahiribu' => $request->tgllahiribu,
            'namawali' => $request->namawali,
            'notelpwali' => $request->notelpwali,
            'tempatwali' => $request->tempatwali,
            'tgllahirwali' => $request->tgllahirwali,
        ]);
        return redirect('walimurid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Walimurid  $walimurid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Walimurid $walimurid)
    {
        Walimurid::destroy($walimurid->idWalimurid);
        return redirect('/walimurid');
    }
}
