<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'kelas',
        'walas',
        'tahunajaran',
        'keterangan',
    ];
    public function datarapot(){
        return $this->hasMany('App\Datarapot');
    }
    public function keterampilans(){
        return $this->hashOne('App\Keterampilan');
    }
    public function pengetahuans(){
        return $this->hashMany('App\Pengetahuan');
    }
}
