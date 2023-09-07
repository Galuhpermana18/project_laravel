<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Auth;

class DataKelasController extends Controller
{
    public function index(){
        
        $datakelas = Kelas::all();
        return view('datamaster/datakelas.index',compact('datakelas'));
    }

    public function tambah() {
        return view('datamaster/datakelas/tambah');
    }

    // untuk keamanan akun
    public function __construct(){
        $this->middleware('auth');
   }

    public function simpan(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'walas' => 'required',
            'tahunajaran' => 'required',
            'keterangan' => 'required',
        ]);
        {
        $kelas = new Kelas;

        $kelas->kelas = $request->kelas;
        $kelas->walas = $request->walas;
        $kelas->tahunajaran = $request->tahunajaran;
        $kelas->keterangan = $request->keterangan;

        $kelas->save();
    }
    return redirect('datamaster/datakelas')->with('status','Data Berhasil Di Tambah');
}

    public function delete($id)
    {


        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('datamaster/datakelas')->with('status','Data Berhasil Di Hapus');
    }
    public function edit($id)
    {
         $kelas = Kelas::where('id', $id)->first();
         return view('datamaster/datakelas.edit',compact('kelas'));
    }

    public function update(Request $request, $id)
{

    // $request->validate([
    //     'kelas' => 'required',
    //     'walas' => 'required',
    //     'tahunajaran' => 'required',
    //     'keterangan' => 'required',
    // ]);
    // dd($request,$id);
        $kelas = Kelas::find($id);
        $kelas->kelas = $request->kelas;
        $kelas->walas = $request->walas;
        $kelas->tahunajaran = $request->tahunajaran;
        $kelas->keterangan = $request->keterangan;
        $kelas->save(); 

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect('datamaster/datakelas')->with('status','Data Berhasil Di Ubah');
    }
}
