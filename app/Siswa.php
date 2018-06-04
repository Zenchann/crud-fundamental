<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nama','nis','kelas_id'];
    public function kelas()
    {
        return $this->belongsTo('App\Kelas','kelas_id');
    }
}
