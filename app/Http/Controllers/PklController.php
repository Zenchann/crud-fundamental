<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
class PklController extends Controller
{
    public function index()
    {
        // $kategori = Kategori::all();
        $artikel = Artikel::orderBy('created_at', 'desc')->take(6)->get();
        return view('frontend.index',compact('artikel'));
    }
    public function blog()
    {
        $artikel = Artikel::paginate(6);
        return view('frontend.blog.all',compact('artikel'));
    }

    public function singleblog($id) 
    {
        $artikel = Artikel::findOrFail($id);
        return view('frontend.blog.single',compact('artikel'));
    }
}
