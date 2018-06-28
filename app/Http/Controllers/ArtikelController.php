<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use Session;
use App\Kategori;
use File;
use Auth;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        // dd($artikel);
        return view('admin.artikel.index',compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.artikel.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->slug =str_slug($request->judul,'-');
        $artikel->kategori_id = $request->kategori_id;
        $artikel->user_id = $user;
        // $artikel->publish = $request->publish;
        // upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/fotoartikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $artikel->foto = $filename;
            }
        $artikel->save();
        return redirect()->route('artikel.index');
    
    }

    public function Publish($id)
    {
        $artikel = Artikel::find($id);

        if ($artikel->status === 1) {
            $artikel->status = 0;
        } else {
            $artikel->status= 1;
        }

        $artikel->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        $artikel = Artikel::findOrFail($artikel->id);
        return view('admin.artikel.show',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        $artikel = Artikel::findOrFail($artikel->id);
        $kategori = Kategori::all();
        return view('admin.artikel.edit',compact('artikel','kategori'));
        
        // $selected = Artikel::findOrFail($artikel->id)->kategori_id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $artikel = Artikel::findOrFail($artikel->id);
        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->slug =str_slug($request->judul,'-');
        $artikel->kategori_id = $request->kategori_id;
        // $artikel->publish = $request->publish;

        // edit upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/fotoartikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($artikel->foto) {
        $old_foto = $artikel->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/fotoartikel'
        . DIRECTORY_SEPARATOR . $artikel->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $artikel->foto = $filename;
}
    
        $artikel->save();
        // dd($artikel);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $artikel = Artikel::findOrFail($artikel->id);
        if ($artikel->foto) {
            $old_foto = $artikel->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/fotoartikel/'
            . DIRECTORY_SEPARATOR . $artikel->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
            $artikel->delete();
    
        return redirect()->route('artikel.index');
    }
}
