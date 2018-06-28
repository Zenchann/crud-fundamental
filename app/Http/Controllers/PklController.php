<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
class PklController extends Controller
{
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
