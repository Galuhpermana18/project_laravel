<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Databuku extends Model
{
    protected $table = 'databukus';
    protected $fillable = [
        'judul_buku',
        'deskripsi',
        'stock',
        'gambar',
    ];

    public function datapeminjaman(){
        return $this->HashMany('App\Datapeminjaman');
    }
}
