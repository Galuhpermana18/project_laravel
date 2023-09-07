<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uasanduts;
use App\Siswa;
use App\Datamapel;

class UasandutsController extends Controller
{
    public function index(){
        $uasanduts = Uasanduts::latest()->paginate();
        return view('uasanduts.index',compact('uasanduts'));
    }

    public function tambah(){
        $siswas = Siswa::all();
        $datamapels = Datamapel::all();
        return view('uasanduts.tambah',compact('siswas','datamapels'));
    }

    public function simpan(Request $request){
        $request->validate([
            'nilaiuts_satu' => 'required',
            'nilaiuts_dua' => 'required',
            'jumlahuts' => 'required',
            'nilaiuas_satu' => 'required',
            'nilaiuas_dua' => 'required',
            'jumlahuas' => 'required',
            'totalsemua' => 'required',
        ]);
        $uasanduts = new Uasanduts;
        $uasanduts->siswas_id = $request->siswas_id;
        $uasanduts->datamapels_id = $request->datamapels_id;
        $uasanduts->nilaiuts_satu = $request->nilaiuts_satu;
        $uasanduts->nilaiuts_dua = $request->nilaiuts_dua;
        $uasanduts->jumlahuts = $request->jumlahuts;
        $uasanduts->nilaiuas_satu = $request->nilaiuas_satu;
        $uasanduts->nilaiuas_dua = $request->nilaiuas_dua;
        $uasanduts->jumlahuas = $request->jumlahuas;
        $uasanduts->totalsemua = $request->totalsemua;
        $uasanduts->save();
        
        return redirect('uasanduts')->with('status','berhasil di tambah');
    }
}
