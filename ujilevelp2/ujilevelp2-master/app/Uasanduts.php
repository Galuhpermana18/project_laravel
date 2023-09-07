<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uasanduts extends Model
{
    protected $guarded = ["id"];

    public function siswas(){
        return $this->belongsTo('App\Siswa');
    }
    public function datamapels(){
        return $this->belongsTo('App\DataMapel');
    }
}
