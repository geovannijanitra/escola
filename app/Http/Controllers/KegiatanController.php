<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('kegiatan.read', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate( [
        //     'gambar' => 'required|mimes:jpeg.jpg.png|size:5120',
        // ]);

        $data = $request->except(['gambar']);

        $extension = $request->gambar->extension();
        $filename = Uuid::uuid4(). ".{$extension}";
        $request->gambar->storeAs('public/kegiatan', $filename);
        $data['gambar'] = asset("/storage/kegiatan/{$filename}");

        Kegiatan::create($data);
        return redirect('/kegiatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatan=Kegiatan::find($id);
        return view ('kegiatan.update', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        // $request->validate([
        //     'gambar' => 'required|mimes:jpeg.jpg.png|size:5120',
        // ]);

        $data = $request->except(['gambar']);

        if($request->hasFile('gambar')){
            $extension = $request->gambar->extension();
            $filename = Uuid::uuid4(). ".{$extension}";
            $oldfile = basename($kegiatan->gambar);
            Storage::delete("kegiatan/{$oldfile}");
            $request->gambar->storeAs('/public/kegiatan',$filename);
            $data['gambar'] = asset("/storage/kegiatan/{$filename}");
        }
        $kegiatan->fill($data);
        $kegiatan->save();
        return redirect('/kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        Kegiatan::destroy($kegiatan->idKegiatan);
        return redirect('/kegiatan');
    }
}
