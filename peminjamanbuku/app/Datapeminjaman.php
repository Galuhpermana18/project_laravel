<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapeminjaman extends Model
{
    protected $table = 'datapeminjamen';
    protected $fillable = [
        'nama_peminjam',
        'email',
        'databukus_id',
        'stok',
        'tanggalpinjam',
        'tanggalkembali',
    ];
    public function databukus(){
        return $this->belongsTo('App\Databuku');
    }
}
