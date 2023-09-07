<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengetahuan;
use App\Siswa;
use App\Kelas;

class PengetahuanController extends Controller
{
    public function index(){
        $pengetahuans = Pengetahuan::latest()->paginate();
        return view('pengetahuan.index',compact('pengetahuans'));
    }
    public function tambah(){
        $siswas = Siswa::all();
        $kelas = Kelas::all();
        return view('pengetahuan.tambah',compact('siswas','kelas'));
    }
    public function simpan(Request $request){
        $request->validate([
            'nilaikd1' => 'required',
            'nilaikd2' => 'required',
            'nilaikd3' => 'required',
            'nilaikd4' => 'required',
            'nilaikd5' => 'required',
            'nilaikd6' => 'required',
            'nilaikd7' => 'required',
            'nilaikd8' => 'required',
            'nilaikd9' => 'required',
            'nilaikd10' => 'required',
            'totalsemua' => 'required',
        ]);
        $pengetahuans = new Pengetahuan;
        $pengetahuans->siswas_id = $request->siswas_id;
        $pengetahuans->kelas_id = $request->kelas_id;
        $pengetahuans->nilaikd1 = $request->nilaikd1;
        $pengetahuans->nilaikd2 = $request->nilaikd2;
        $pengetahuans->nilaikd3 = $request->nilaikd3;
        $pengetahuans->nilaikd4 = $request->nilaikd4;
        $pengetahuans->nilaikd5 = $request->nilaikd5;
        $pengetahuans->nilaikd6 = $request->nilaikd6;
        $pengetahuans->nilaikd7 = $request->nilaikd7;
        $pengetahuans->nilaikd8 = $request->nilaikd8;
        $pengetahuans->nilaikd9 = $request->nilaikd9;
        $pengetahuans->nilaikd10 = $request->nilaikd10;
        $pengetahuans->totalsemua = $request->totalsemua;
        $pengetahuans->save();
        // Pengetahuan::create($request->all());
        return redirect('pengetahuan')->with('status','Data berhasil di tambah');
    }
}   
