<?php

namespace App\Http\Controllers;

use App\Gurubk;
use Illuminate\Http\Request;

class GurubkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurubk = Gurubk::all();
        return view('gurubk.read', compact('gurubk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gurubk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gurubk::create([
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'tempat' => $request->tempat,
            'tgllahir' => $request->tgllahir,
            'kelas' => $request->kelas,

        ]);

        return redirect('/gurubk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gurubk  $gurubk
     * @return \Illuminate\Http\Response
     */
    public function show(Gurubk $gurubk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gurubk  $gurubk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gurubk=Gurubk::find($id);
        return view ('gurubk.update', compact('gurubk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gurubk  $gurubk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Gurubk::where('idGurubk', $id)->update([
            
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'tempat' => $request->tempat,
            'tgllahir' => $request->tgllahir,
            'kelas' => $request->kelas,

        ]);
        return redirect('gurubk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gurubk  $gurubk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gurubk $gurubk)
    {
        Gurubk::destroy($gurubk->idGurubk);
        return redirect('/gurubk');
    }
}
