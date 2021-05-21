<?php

namespace App\Http\Controllers;

use App\Gurumapel;
use App\User;
use App\Mapel;
use Illuminate\Http\Request;

class GurumapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurumapel = Gurumapel::all();
        return view('gurumapel.read', compact('gurumapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel=Mapel::all();
        $user=User::all();
        return view('gurumapel.create', compact('user','mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gurumapel::create([
            'mapel_id'=>$request->idMapel,
            'user_id'=>$request->idUser,
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'tempat' => $request->tempat,
            'tgllahir' => $request->tgllahir,

        ]);

        return redirect('/gurumapel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gurumapel  $gurumapel
     * @return \Illuminate\Http\Response
     */
    public function show(Gurumapel $gurumapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gurumapel  $gurumapel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel=Mapel::all();
        $user=User::all();
        $gurumapel=Gurumapel::find($id);
        return view ('gurumapel.update', compact('gurumapel','user','mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gurumapel  $gurumapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        Gurumapel::where('idGurumapel', $id)->update([
            'mapel_id'=>$request->idMapel,
            'user_id'=>$request->idUser,
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'tempat' => $request->tempat,
            'tgllahir' => $request->tgllahir,

        ]);
        return redirect('gurumapel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gurumapel  $gurumapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gurumapel $gurumapel)
    {
        Gurumapel::destroy($gurumapel->idGurumapel);
        return redirect('/gurumapel');
    }
}
