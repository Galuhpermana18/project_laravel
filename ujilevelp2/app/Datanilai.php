<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datanilai extends Model
{
    protected $table = 'datanilais';
    protected $fillable = [
        'siswas_id',
        'nilai',
        'kkm',
        // 'nilai_pengetahuan',
        // 'nilai_keterampilan',
        // 'kkm',
        // 'deskripsi',
    ];
    public function dataraport(){
        return $this-hasMany('App\Dataraport');
    }
    public function siswas(){
        return $this->belongsTo('App\Siswa');
    }
}

