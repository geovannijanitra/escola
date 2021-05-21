<?php

namespace App\Http\Controllers;

use App\Score;
use App\Siswa;
use App\Mapel;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $score=Score::all();
        $siswa=Siswa::all();
        $mapel=Mapel::all();
        return view('score.read', compact('score','mapel','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $siswa=Siswa::all();
        $mapel=Mapel::all();
        return view('score.create', compact('score','mapel','siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Score::create([
            'mapel_id'=>$request->idMapel,
            'siswa_id'=>$request->idSiswa,
            'nilai' => $request->nilai,

        ]);

        return redirect('/score');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $score=Score::find($id);
        $siswa=Siswa::all();
        $mapel=Mapel::all();
        return view('score.update', compact('score','mapel','siswa')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Score::where('idScore', $id)->update([
            'mapel_id'=>$request->idMapel,
            'siswa_id'=>$request->idSiswa,
            'nilai' => $request->nilai,
        ]);

        return redirect('/score');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        Score::destroy($score->idScore);
        return redirect('/score');
    }
}
