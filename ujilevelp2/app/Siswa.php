<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = [
        'nama_lengkap',
        'nipd',
        'jenis_kelamin',
        'kelas',
        'nisn',
        'ttl',
        'agama',
        'alamat',
        'email',
        'gambar',
    ];
    public function datarapot(){
        return $this-hasOne('App\Datarapot');
    }

    public function uasanduts(){
        return $this->hasOne('App\Uasanduts');
    }
    public function datanilai(){
        return $this->hasMany('App\Datanilai');
    }
    public function keterampilans(){
        return $this->hashMany('App\Keterampilan');
    }
    public function pengetahuans(){
        return $this->hashMany('App\Pengetahuan');
    }
}
