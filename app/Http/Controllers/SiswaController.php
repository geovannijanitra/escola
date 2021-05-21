<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.read', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::all();
        return view('siswa.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::create([
            'user_id'=>$request->idUser,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tempat' => $request->tempat,
            'tgllahir' => $request->tgllahir,
            'kelamin' => $request->kelamin,
            'kelas' => $request->kelas,

        ]);

        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::all();
        $siswa=Siswa::find($id);
        return view ('siswa.update', compact('siswa','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Siswa::where('idSiswa', $id)->update([
            'user_id'=>$request->idUser,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tempat' => $request->tempat,
            'tgllahir' => $request->tgllahir,
            'kelamin' => $request->kelamin,
            'kelas' => $request->kelas,
        ]);
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->idSiswa);
        return redirect('/siswa');
    }
}
