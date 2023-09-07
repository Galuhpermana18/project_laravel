@extends('layouts.master')
@section('content')

@section('judul','Form Edit Data Mata Pelajaran')

<div class="container" style="margin-left: 200px">
    <div class="section-body">
         <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
        <form action="/datamapel/edit_mapel/{{$datamapel->id}}" method="post">
        @csrf
        @method('PUT')
            <div class="row mb-3">
                <label for="kodemapel" class="col-sm-2 col-form-label">Kode Mapel</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kelas" name="kodemapel" value="{{ old('kodemapel', $datamapel->kodemapel) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="walas" name="kelas" value="{{ old('kelas', $datamapel->kelas) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_mapel" class="col-sm-2 col-form-label">Nama Mata Pelajaran</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel"value="{{ old('nama_mapel', $datamapel->nama_mapel) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="guru_pengajar" class="col-sm-2 col-form-label">Guru Pengajar</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="guru_pengajar" name="guru_pengajar" value="{{ old('guru_pengajar', $datamapel->guru_pengajar) }}">
                </div>
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

