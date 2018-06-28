<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul','konten','slug','kategori_id','foto','publish'];
    public $timestamps = true;

    public function Kategori()
    {
        return $this->belongsTo('App\Kategori','kategori_id');
    }

    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
