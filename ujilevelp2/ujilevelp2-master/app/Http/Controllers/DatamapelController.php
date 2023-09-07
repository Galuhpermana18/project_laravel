<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datamapel;
use App\Auth;
class DatamapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // untuk keamanan akun
    public function __construct(){
         $this->middleware('auth');
    }
    public function index()
    {
        $datamapel = Datamapel::all();
        return view('datamapel.index',compact('datamapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('/datamapel/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        $request->validate([
            'kodemapel' => 'required',
            'kelas' => 'required',
            'nama_mapel' => 'required',
            'guru_pengajar' => 'required',
        ]);
        {
        $datamapel = new Datamapel;

        $datamapel->kodemapel = $request->kodemapel;
        $datamapel->kelas = $request->kelas;
        $datamapel->nama_mapel = $request->nama_mapel;
        $datamapel->guru_pengajar = $request->guru_pengajar;

        $datamapel->save();
    }
    return redirect('/datamapel')->with('status','Data Berhasil Di Tambah');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datamapel = Datamapel::where('id', $id)->first();
        return view('/datamapel.edit',compact('datamapel'));
    }

    /**
     * Show the form for editing the specified resource.

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datamapel = Datamapel::find($id);
        $datamapel->kodemapel = $request->kodemapel;
        $datamapel->kelas = $request->kelas;
        $datamapel->nama_mapel = $request->nama_mapel;
        $datamapel->guru_pengajar = $request->guru_pengajar;
        $datamapel->save(); 

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect('/datamapel')->with('status','Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $datamapel = Datamapel::find($id);
        $datamapel->delete();
        return redirect('datamapel')->with('status','Data Berhasil Di Hapus');
    }
}
