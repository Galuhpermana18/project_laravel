@extends('layouts.master')
@section('content')

@section('judul','From Tambah Data Nilai')

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
        <form action="{{ route('simpan_nilai')}}" method="POST">
        @csrf
            <div class="row mb-3">
                <label for="siswa_id" class="col-sm-2 col-form-label">Pilih Siswa</label>
                <div class="col-sm-10">
                <select class="form-select form-control" aria-label="Default select example" name="siswas_id">
                    <option selected>Pilih Siswa</option>
                   @foreach ($siswas as $siswa)
                       <option value="{{$siswa->id}}">{{$siswa->nama_lengkap}}</option>
                   @endforeach
                  </select>
            </div>
            </div>
            <div class="row mb-3">
                <label for="milai" class="col-sm-2 col-form-label">Nilai</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kelas" name="nilai"  value="{{old('nilai')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kkm" class="col-sm-2 col-form-label">KKM</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="kkm" name="kkm"  value="{{old('kkm')}}">
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
    