<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datarapot extends Model
{
    protected $table = 'datarapots';
    protected $fillable = ["siswas_id","datamapels_id","kelas_id","pengetahuans_id","datanilais_id","keterampilans_id","nilaiakhir","deskripsi","predikat"];
    public function siswas(){
        return $this->belongsTo('App\Siswa');
    }
    public function kelas(){
        return $this->belongsTo('App\Kelas');
    }
    public function datamapels(){
        return $this->belongsTo('App\Datamapel');
    }
    public function datanilais(){
        return $this->belongsTo('App\Datanilai');
    }
    public function keterampilans(){
        return $this->belongsTo('App\Keterampilan');
    }
    public function pengetahuans(){
        return $this->belongsTo('App\Pengetahuan');
    }
}
