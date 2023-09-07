<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datapeminjaman;
use App\Databuku;

class PeminjamanController extends Controller
{
    public function index(){
        $peminjamans = Datapeminjaman::all();
        return view('datapeminjaman.index',compact('peminjamans'));
    }
    public function tambah(){
        $bukus = Databuku::all();
        return view('/datapeminjaman.tambah',compact('bukus'));
    }
    public function simpan(Request $request){
        $request->validate([
            'nama_peminjam' => 'required',
            'email' => 'required',
            'databukus_id' => 'required',
            'stok' => 'required',
            'tanggalpinjam' => 'required',
            'tanggalkembali' => 'required',
        ]);

        $peminjamans = new Datapeminjaman;

        $peminjamans->nama_peminjam = $request->nama_peminjam;
        $peminjamans->email = $request->email;
        $peminjamans->databukus_id = $request->databukus_id;
        $peminjamans->stok = $request->stok;
        $peminjamans->tanggalpinjam = $request->tanggalpinjam;
        $peminjamans->tanggalkembali = $request->tanggalkembali;

        $peminjamans->save();

        $bukus = Databuku::findorFail($request->databukus_id);
        $bukus->stock -= intval($request->stok);
        if($bukus->stock <= 0 ){
            return redirect('/datapeminjaman')->with('status','Stok buku habis');
        }else{
            $bukus->save();

            return redirect('/datapeminjaman')->with('status','Data Berhasil Di Tambah');
        }
       
    }
    public function kembalikan(Request $request,$id_peminjam){
        // var_dump($request->id_buku);
        $peminjams = Datapeminjaman::find($id_peminjam);
        $peminjams->delete();
        $bukus = Databuku::where('id','=',intval($request->id_buku))->first();
        // var_dump(intval($request->stok));
        $bukus->stock = $bukus->stock + intval($request->stok);
        $bukus->save();
        return redirect('/datapeminjaman')->with('status','buku berhasil di kembalikan');
    }
}
