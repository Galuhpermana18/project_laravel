<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datarapot;
use App\Siswa;
use App\Kelas;
use App\Datamapel;
use App\Datanilai;
use App\Keterampilan;
use App\Pengetahuan;
use PDF;
use App\Auth;
class DatarapotController extends Controller
{
    public function index(){
        $datarapot = Datarapot::all();
        return view('cetakrapot.index',compact('datarapot'));
    }

    // untuk keamanan akun
    public function __construct(){
        $this->middleware('auth');
   }
   
    public function tambah(){
        $siswas = Siswa::all();
        $kelas = Kelas::all();
        $datamapels = Datamapel::all();
        $datanilais = Datanilai::all();
        $pengetahuans = Pengetahuan::all();
        $keterampilans = Keterampilan::all();
        return view('cetakrapot.tambah',compact('siswas','kelas','datamapels','datanilais','pengetahuans','keterampilans'));
    }

    public function simpan(Request $request){
        // Datarapot::create($request->all());
        $datarapot = new DataRapot;
        $datarapot->siswas_id = $request->siswas_id;
        $datarapot->datamapels_id = $request->datamapels_id;
        $datarapot->kelas_id = $request->kelas_id;
        $datarapot->pengetahuans_id = $request->pengetahuans_id;
        $datarapot->datanilais_id = $request->datanilais_id;
        $datarapot->keterampilans_id = $request->keterampilans_id;
        $datarapot->nilaiakhir = $request->nilaiakhir;
        $datarapot->deskripsi = $request->deskripsi;

        if($datarapot->nilaiakhir >= 90) {
            $datarapot->predikat = "A";
        }
    else if($datarapot->nilaiakhir >= 80) {
            $datarapot->predikat = "B";
        } else if($datarapot->nilaiakhir >= 70) {
            $datarapot->predikat = "C";
        } else if($datarapot->nilaiakhir >= 60) {
            $datarapot->predikat = "D";
        }  else if($datarapot->nilaiakhir >= 40) {
            $datarapot->predikat = "E";
        }else {
            $datarapot->predikat = "tidak ada";
        }
        $datarapot->save();
        return redirect('datarapot');
    }

    public function detail($id){
        return view('cetakrapot.detail', ['datarapot'=>Datarapot::findorfail($id)]);
    }

    public function cetak_pdf(Datarapot $datarapot){
        $datarapot::all();
        $pdf = PDF::loadview('cetakrapot.pdf',compact('datarapot'));
        return $pdf->stream();
    }
}
