@extends('layouts.master')
@section('content')

@section('judul','Form Tambah Data Kelas')

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
        <form action="{{ route('simpan_kelas')}}" method="POST">
        @csrf
            <div class="row mb-3">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kelas" name="kelas"  value="{{old('kelas')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_siswa" class="col-sm-2 col-form-label">Wali Kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="walas" name="walas"  value="{{old('walas')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tahunajaran" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="tahunajaran" name="tahunajaran"  value="{{old('tahunajaran')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="keterangan" name="keterangan"  value="{{old('keterangan')}}">
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

