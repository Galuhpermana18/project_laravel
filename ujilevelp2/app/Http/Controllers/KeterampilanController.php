<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keterampilan;
use App\Siswa;
use App\Kelas;

class KeterampilanController extends Controller
{
    public function index(){
        $keterampilans = Keterampilan::latest()->paginate();
        return view('keterampilan.index',compact('keterampilans'));
    }
    public function tambah(){
        $siswas = Siswa::all();
        $kelas = Kelas::all();
        return view('keterampilan.tambah',compact('siswas','kelas'));
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
        $keterampilans = new Keterampilan;
        $keterampilans->siswas_id = $request->siswas_id;
        $keterampilans->kelas_id = $request->kelas_id;
        $keterampilans->nilaikd1 = $request->nilaikd1;
        $keterampilans->nilaikd2 = $request->nilaikd2;
        $keterampilans->nilaikd3 = $request->nilaikd3;
        $keterampilans->nilaikd4 = $request->nilaikd4;
        $keterampilans->nilaikd5 = $request->nilaikd5;
        $keterampilans->nilaikd6 = $request->nilaikd6;
        $keterampilans->nilaikd7 = $request->nilaikd7;
        $keterampilans->nilaikd8 = $request->nilaikd8;
        $keterampilans->nilaikd9 = $request->nilaikd9;
        $keterampilans->nilaikd10 = $request->nilaikd10;
        $keterampilans->totalsemua = $request->totalsemua;
        $keterampilans->save();
        // Keterampilan::create($request->all());
        return redirect('keterampilan')->with('status','berhasil di tambah');
    }
}
