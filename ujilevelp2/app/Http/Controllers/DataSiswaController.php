<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Auth;

class DataSiswaController extends Controller
{
    public function index(){
        $datasiswas = Siswa::all();
        return view('datamaster/datasiswa.index',compact('datasiswas'));
    }

    // untuk keamanan akun
    public function __construct(){
        $this->middleware('auth');
   }
   
    public function tambah(){
        return view('datamaster/datasiswa/tambah');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'gambar'=>'mimes:png,jpg,jpeg,gif,svg',
            'nama_lengkap' => 'required',
            'nipd' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
            'nisn' => 'required',
            'ttl' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
        ]);

        {
        // dd($request->thumbnail);
        $sendgambar = $request->gambar->getClientOriginalName().'_'. time().'_'. $request->gambar->extension();
        $request->gambar->move(public_path('images'),$sendgambar);

        // $siswa = new Siswa;

        Siswa::create([
            'nama_lengkap'=>$request['nama_lengkap'],
            'nipd'=>$request['nipd'],
            'jenis_kelamin'=>$request['jenis_kelamin'],
            'kelas'=>$request['kelas'],
            'nisn'=>$request['nisn'],
            'ttl'=>$request['ttl'],
            'agama'=>$request['agama'],
            'alamat'=>$request['alamat'],
            'gambar'=>$sendgambar,
            
        ]);
    }
    return redirect('datamaster/datasiswa')->with('status','Data Berhasil Di Tambah');
}

    public function delete(Siswa $siswa)
    {
        $kelas = Siswa::find($siswa->id);
        $kelas->delete();
        return redirect('datamaster/datasiswa')->with('status','Data Berhasil Di Hapus');
}

    public function edit($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        return view('datamaster/datasiswa.edit',compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nipd' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
            'nisn' => 'required',
            'ttl' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
        ]);
        // dd($request,$id);
        $siswa = Siswa::find($id);
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->nipd = $request->nipd;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->kelas = $request->kelas;
        $siswa->nisn = $request->nisn;
        $siswa->ttl = $request->ttl;
        $siswa->agama = $request->agama;
        $siswa->alamat = $request->alamat;
        $siswa->gambar = $request->gambar;
        $siswa->save(); 
    
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect('datamaster/datasiswa')->with('status','Data Berhasil Di Ubah');
        }
      
}
