<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterampilan extends Model
{
    protected $guarded = ["id"];
    
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
