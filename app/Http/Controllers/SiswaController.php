<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use App\Kelas;
use File;
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
        // dd($siswa);
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('siswa.create',compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->kelas_id = $request->kelas_id;

        // upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/fotosiswa/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $siswa->foto = $filename;
            }
        $siswa->save();
        return redirect()->route('siswa.index');
    
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
    public function edit(Siswa $siswa)
    {
        $siswa = Siswa::findOrFail($siswa->id);
        $kelas = Kelas::all();
        $selected = Siswa::findOrFail($siswa->id)->kelas_id;
        return view('siswa.edit',compact('kelas','siswa','selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa = Siswa::findOrFail($siswa->id);
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->kelas_id = $request->kelas_id;

// edit upload foto
if ($request->hasFile('foto')) {
    $file = $request->file('foto');
    $destinationPath = public_path().'/assets/img/fotosiswa/';
    $filename = str_random(6).'_'.$file->getClientOriginalName();
    $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($siswa->foto) {
        $old_foto = $siswa->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/fotosiswa'
        . DIRECTORY_SEPARATOR . $siswa->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
    $siswa->foto = $filename;
}
    
        $siswa->save();
        // dd($siswa);
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa = Siswa::findOrFail($siswa->id);
        if ($siswa->foto) {
            $old_foto = $siswa->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/fotosiswa/'
            . DIRECTORY_SEPARATOR . $siswa->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
            $siswa->delete();
    
        return redirect()->route('siswa.index');
    }
}
