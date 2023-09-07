<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Auth;

class DataGuruController extends Controller
{
    public function index(){
        $guru = Guru::all();
        return view('datamaster/dataguru.index',compact('guru'));
    }

    public function tambah() {
        return view('datamaster/dataguru/tambah');
    }
    // untuk keamanan akun
    public function __construct(){
        $this->middleware('auth');
   }

    public function simpan(Request $request)
    {
        $request->validate([
            'gambar'=>'mimes:png,jpg,jpeg,gif,svg',
            'nuptk' => 'required',
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'statuspegawai' => 'required',
            'tmt' => 'required',
            'nohp' => 'required',
            'usernametelegram' => 'required',
        ]);
        {
            $sendgambar = $request->gambar->getClientOriginalName().'_'. time().'_'. $request->gambar->extension();
            $request->gambar->move(public_path('images'),$sendgambar);
            Guru::create([
                'nuptk'=>$request['nuptk'],
                'nik'=>$request['nik'],
                'nama_lengkap'=>$request['nama_lengkap'],
                'jenis_kelamin'=>$request['jenis_kelamin'],
                'ttl'=>$request['ttl'],
                'statuspegawai'=>$request['statuspegawai'],
                'tmt'=>$request['tmt'],
                'nohp'=>$request['nohp'],
                'usernametelegram'=>$request['usernametelegram'],
                'gambar'=>$sendgambar,
                
            ]);
    }
    return redirect('datamaster/dataguru')->with('status','Data Berhasil Di Tambah');
}
public function edit($id)
{
    $guru = Guru::where('id', $id)->first();

    return view('datamaster/dataguru.edit',compact('guru'));
}
public function update(Request $request, $id)
{

    $request->validate([
        'nuptk' => 'required',
        'nik' => 'required',
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required',
        'ttl' => 'required',
        'statuspegawai' => 'required',
        'tmt' => 'required',
        'nohp' => 'required',
        'usernametelegram' => 'required',
    ]);
    // dd($request->all());
// dd($request,$id);
    $guru = Guru::find($id);
    $guru->nuptk = $request->nuptk;
    $guru->nik = $request->nik;
    $guru->jenis_kelamin = $request->jenis_kelamin;
    $guru->ttl = $request->ttl;
    $guru->statuspegawai = $request->statuspegawai;
    $guru->tmt = $request->tmt;
    $guru->nohp = $request->nohp;
    $guru->usernametelegram = $request->usernametelegram;
    $guru->gambar = $request->gambar;
    $guru->save(); 

    //jika data berhasil diupdate, akan kembali ke halaman utama
    return redirect('datamaster/dataguru')->with('status','Data Berhasil Di Ubah');
}
public function delete(Guru $guru)
{
    $kelas = Guru::find($guru->id);
    $kelas->delete();
    return redirect('datamaster/dataguru')->with('status','Data Berhasil Di Hapus');
}
}
