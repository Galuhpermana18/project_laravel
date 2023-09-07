<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengetahuan extends Model
{
    protected $guarded = ["id"];
    // protected $with = ['siswas','kelas','datarapots'];
    public function siswas(){
        return $this->belongsTo('App\Siswa');
    }
    public function kelas(){
        return $this->belongsTo('App\Kelas');
    }
    public function datarapots(){
        return $this->hashMany('App\Datarapot');
    }
}
