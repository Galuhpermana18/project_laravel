@extends('layouts.master')
@section('content')

@section('judul','Form Edit Data Siswa')

<div class="container" style="margin-left: 200px">
    <div class="section-body">
         <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
        <form action="/datamaster/datasiswa/edit_siswa/{{$siswa->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="row mb-3">
                <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $siswa->nama_lengkap) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nipd" class="col-sm-2 col-form-label">NIPD</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nipd" name="nipd" value="{{ old('nipd', $siswa->nipd) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jenis_kelamin"  class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10"> <select class="form-select form-control" aria-label="Default select example" name="jenis_kelamin" value="{{ old('jenis_kelamin', $siswa->jenis_kelamin) }}">
                    {{-- <option selected>Pilih Jenis Kelamin</option> --}}
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                    </select></div>
            </div>
            <div class="row mb-3">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ old('kelas', $siswa->kelas) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="nisn" name="nisn" value="{{ old('nisn', $siswa->nisn) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="ttl" class="col-sm-2 col-form-label">Tempat & Tanggal Lahir</label>
                <div class="col-sm-10">
                <input type="ttl" class="form-control" id="ttl" name="ttl" value="{{ old('ttl', $siswa->ttl) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                <input type="ttl" class="form-control" id="agama" name="agama" value="{{ old('agama', $siswa->agama) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                <input type="ttl" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $siswa->alamat) }}">
                </div>
            </div>
            <div class="form-groups">
                <label for="thumbnail">Profil Gambar</label>
                {{-- <img src="/images/{{$siswa->gambar}}" alt=""> --}}
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection

