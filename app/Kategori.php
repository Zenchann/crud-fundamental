<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori'];
    public $timestamps = true;

    public function Artikel ()
    {
        return $this->hasOne('App\Artikel','kategori_id');
    }
}
