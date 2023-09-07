<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = [
        'nuptk',
        'nik',
        'nama_lengkap',
        'jenis_kelamin',
        'ttl',
        'statuspegawai',
        'tmt',
        'nohp',
        'usernametelegram',
        'gambar',
    ];
}
