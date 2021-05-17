<?php

namespace App\Http\Controllers;

use App\Gurumapel;
use App\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurumapel = Gurumapel::all();
        $mapel = Mapel::all();
        return view('mapel.read', compact('mapel','gurumapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gurumapel = Gurumapel::all();
        return view('mapel.create', compact('gurumapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mapel::create([
            'gurumapel_id'=>$request->idGurumapel,
            'kode'=>$request->kode,
            'matkul'=>$request->matkul,
        ]);
        return redirect('/mapel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $id)
    {
        $gurumapel = Gurumapel::all();
        $mapel=Mapel::find($id);
        return view ('mapel.update', compact('mapel','gurumapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Mapel::where('idMapel', $id)->update([
            'gurumapel_id'=>$request->idGurumapel,
            'kode' => $request->kode,
            'matkul' => $request->matkul,
        ]);
        return redirect('mapel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        Mapel::destroy($mapel->idMapel);
        return redirect('/mapel');
    }
}
