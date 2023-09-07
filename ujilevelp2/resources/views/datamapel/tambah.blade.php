@extends('layouts.master')
@section('content')

@section('judul','From Tambah Data Mata Pelajaran')

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
        <form action="{{ route('simpan_mapel')}}" method="POST">
        @csrf
            <div class="row mb-3">
                <label for="kodemapel" class="col-sm-2 col-form-label">Kode Mata Pelajaran</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kodemapel" name="kodemapel"  value="{{old('kodemapel')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kelas" name="kelas"  value="{{old('kelas')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_mapel" class="col-sm-2 col-form-label">Nama Mata Pelajaran</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel"  value="{{old('nama_mapel')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="guru_pengajar" class="col-sm-2 col-form-label">Guru Pengajar</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="guru_pengajar" name="guru_pengajar"  value="{{old('guru_pengajar')}}">
                </div>
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
