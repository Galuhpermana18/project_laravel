<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datamapel extends Model
{
    protected $table = 'datamapels';
    protected $fillable = [
        'kodemapel',
        'kelas',
        'nama_mapel',
        'guru_pengajar',
    ];
    public function uasanduts(){
        return $this->hasMany('App\Uasanduts');
    }
}
