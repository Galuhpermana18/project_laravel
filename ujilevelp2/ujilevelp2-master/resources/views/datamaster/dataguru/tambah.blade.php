@extends('layouts.master')
@section('content')

@section('judul','Form Tambah Data Guru')

<div class="container" style="margin-left: 200px">
    <div class="section-body">
         <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
         @if ($errors->any())
            <div class="alert alert-primary">
                <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('simpan_guru')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row mb-3">
                <label for="nipd" class="col-sm-2 col-form-label">NUPTK</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="nuptk" name="nuptk" value="{{old('nuptk')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_siswa" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="nik" name="nik"  value="{{old('nik')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"  value="{{old('nama_lengkap')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for=""  class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10"> <select class="form-select form-control" aria-label="Default select example" name="jenis_kelamin"  value="{{old('jenis_kelamin')}}">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                    </select></div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Tempat Tgl Lahir</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="ttl" name="ttl" value="{{old('ttl')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="statuspegawai" class="col-sm-2 col-form-label">Status Pegawai</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="statuspegawai" name="statuspegawai"  value="{{old('statuspegawai')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tmt" class="col-sm-2 col-form-label">TMT</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="tmt" name="tmt"  value="{{old('tmt')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nohp" class="col-sm-2 col-form-label">No Hp</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="nohp" name="nohp">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Username Telegram</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="usernametelegram" name="usernametelegram"  value="{{old('usernametelegram')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="thumbnail">Profil Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection

