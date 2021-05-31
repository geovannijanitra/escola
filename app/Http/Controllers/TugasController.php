<?php

namespace App\Http\Controllers;

use App\Tugas;
use App\Mapel;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugas = Tugas::all();
        return view('tugas.read', compact('tugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel=Mapel::all();
        return view('tugas.create', compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tugas::create([
            'mapel_id'=>$request->idMapel,
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
        ]);

        return redirect('/tugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function show(Tugas $tugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel=Mapel::all();
        $tugas=Tugas::find($id);
        return view('tugas.update', compact('tugas','mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Tugas::where('idTugas', $id)->update([
            'mapel_id'=>$request->idMapel,
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
        ]);

        return redirect('tugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tugas::destroy($id);
        return redirect('/tugas');
    }
}
