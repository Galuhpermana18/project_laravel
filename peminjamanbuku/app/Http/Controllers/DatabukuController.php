<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Databuku;

class DatabukuController extends Controller
{
    public function index(){
        $bukus = Databuku::all();
        return view('databuku.index',compact('bukus'));
    }
    public function tambah(){
        return view('/databuku.tambah');
    }

    public function simpan(Request $request){
        $request->validate([
            'judul_buku' => 'required',
            'deskripsi' => 'required',
            'stock' => 'required',
            'gambar'=>'required',
        ]);

        // $sendgambar = $request->gambar->getClientOriginalName().'_'. time().'_'. $request->gambar->extension();
        // $request->gambar->move(public_path('images'),$sendgambar);
        Databuku::create([
            'judul_buku'=>$request['judul_buku'],
            'deskripsi'=>$request['deskripsi'],
            'stock'=>$request['stock'],
            'gambar'=>$request['gambar']
        ]);
        return redirect('databuku')->with('status','Data Berhasil Di Tambah');
    }

    public function edit($id){
        $bukus = Databuku::where('id' , $id)->first();
        return view('databuku.edit' , compact('bukus'));
    }
    public function update(Request $request,$id){
        $bukus = Databuku::find($id);
        $bukus->judul_buku = $request->judul_buku;
        $bukus->deskripsi = $request->deskripsi;
        $bukus->stock = $request->stock;
        if($request->gambar == ''){
            $bukus->save();
            return redirect('databuku')->with('status','data berhasil di ubah');
        }
        else{
            $bukus->gambar = $request->gambar;

            $bukus->save();
            return redirect('databuku')->with('status','data berhasil di ubah');

        }
        
    }

    public function delete(Request $request,$id){
        $bukus = Databuku::find($id);
        $bukus->delete();
        return redirect('databuku')->with('status','data berhasil di hapus');

    }
}
