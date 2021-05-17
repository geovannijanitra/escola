<?php

namespace App\Http\Controllers;

use App\Kritik;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kritik = Kritik::all();
        return view('kritik.read', compact('kritik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kritik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kritik::create([
            'sender' => $request->sender,
            'isi' => $request->isi,
            'saran' => $request->saran,
        ]);
        return redirect('/kritik');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function show(Kritik $kritik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kritik=Kritik::find($id);
        return view ('kritik.update', compact('kritik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Kritik::where('idKritik', $id)->update([
            
            'sender' => $request->sender,
            'isi' => $request->isi,
            'saran' => $request->saran,
        ]);
        return redirect('kritik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kritik $kritik)
    {
        Kritik::destroy($kritik->idKritik);
        return redirect('/kritik');
    }
}
