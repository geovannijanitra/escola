<?php

namespace App\Http\Controllers;

use App\Pointbk;
use Illuminate\Http\Request;

class PointbkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pointbk = Pointbk::all();
        return view('pointbk.read', compact('pointbk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pointbk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pointbk::create([
            'jenis' => $request->jenis,
            'pelanggaran' => $request->pelanggaran,
            'point' => $request->point,
        ]);
        return redirect('/pointbk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pointbk  $pointbk
     * @return \Illuminate\Http\Response
     */
    public function show(Pointbk $pointbk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pointbk  $pointbk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pointbk=Pointbk::find($id);
        return view ('pointbk.update', compact('pointbk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pointbk  $pointbk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pointbk::where('idPointbk', $id)->update([
            
            'jenis' => $request->jenis,
            'pelanggaran' => $request->pelanggaran,
            'point' => $request->point,

        ]);
        return redirect('pointbk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pointbk  $pointbk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pointbk $pointbk)
    {
        Pointbk::destroy($pointbk->idPointbk);
        return redirect('/pointbk');
    }
}
