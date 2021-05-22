<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;


class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('pengumuman.read', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create');
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
        //     'file' => 'required|size:5120',
        // ]);

        $data = $request->except(['file']);

        $extension = $request->file->extension();
        $filename = Uuid::uuid4(). ".{$extension}";
        $request->file->storeAs('public/pengumuman', $filename);
        $data['file'] = asset("/storage/pengumuman/{$filename}");

        Pengumuman::create($data);
        return redirect('/pengumuman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengumuman=Pengumuman::find($id);
        return view ('pengumuman.update', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        // $request->validate([
        //     'file' => 'required|file|size:5120',
        // ]);

        $data = $request->except(['file']);

        if($request->hasFile('file')){
            $extension = $request->file->extension();
            $filename = Uuid::uuid4(). ".{$extension}";
            $oldfile = basename($pengumuman->file);
            Storage::delete("pengumuman/{$oldfile}");
            $request->file->storeAs('/public/pengumuman', $filename);
            $data['file'] = asset("/storage/pengumuman/{$filename}");
        }
        $pengumuman->fill($data);
        $pengumuman->save();
        return redirect('/pengumuman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        Pengumuman::destroy($pengumuman->idPengumuman);
        return redirect('/pengumuman');
    }
}
