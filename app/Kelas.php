<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['kelas'];
    public function siswa()
    {
        return $this->hasMany('App\Siswa','kelas_id');
    }
}
