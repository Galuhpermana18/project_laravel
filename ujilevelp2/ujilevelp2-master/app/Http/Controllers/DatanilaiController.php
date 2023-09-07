<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datanilai;
use App\Auth;
use App\Siswa;
class DatanilaiController extends Controller
{
    // untuk keamanan akun
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $datanilai = Datanilai::all();
        return view('datanilai.index',compact('datanilai'));
    }

    public function tambah(){
        $siswas = Siswa::all();
        return view('/datanilai/tambah',compact('siswas'));
    }
    public function simpan(Request $request)
    {
        $request->validate([
            // 'namasiswa' => 'required',
            // 'kelas' => 'required',
            // 'nama_mapel' => 'required',
            // 'nilai' => 'required',
            // 'nilai_keterampilan' => 'required',
            // 'kkm' => 'required',
            // 'deskripsi' => 'required',
            // 'siswas_id'=>'required',
            // 'nilai'=>'required',
            // 'kkm'=>'required',

        ]);
        {
        $datanilai = new Datanilai;

        // $datanilai->namasiswa = $request->namasiswa;
        $datanilai->siswas_id = $request->siswas_id;
        // $datanilai->nama_mapel = $request->nama_mapel;
        // $datanilai->nilai_pengetahuan = $request->nilai_pengetahuan;    
        // $datanilai->nilai_keterampilan = $request->nilai_keterampilan;
        $datanilai->nilai = $request->nilai;
        $datanilai->kkm = $request->kkm;
        // $datanilai->predikat = $request->predikat;

        $datanilai->save();
    }
    return redirect('/datanilai')->with('status','Data Berhasil Di Tambah');
}
public function edit($id)
    {
        $datanilai = Datanilai::where('id', $id)->first();
        $siswas = Siswa::all();
        return view('/datanilai.edit',compact('datanilai','siswas'));
    }

    public function update(Request $request, $id)
    {
        $datanilai = Datanilai::find($id);
        // $datanilai->namasiswa = $request->namasiswa;
        // $datanilai->kelas = $request->kelas;
        // $datanilai->nama_mapel = $request->nama_mapel;
        $datanilai->nilai = $request->nilai;    
        // $datanilai->nilai_keterampilan = $request->nilai_keterampilan;
        $datanilai->kkm = $request->kkm;
        // $datanilai->deskripsi = $request->deskripsi;
        // $datanilai->predikat = $request->predikat;
        $datanilai->save(); 

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect('/datanilai')->with('status','Data Berhasil Di Ubah');
    }

    public function delete($id)
    {
        $datanilai = Datanilai::find($id);
        $datanilai->delete();
        return redirect('datanilai')->with('status','Data Berhasil Di Hapus');
    }
}
