@extends('layouts.master')
@section('content')

@section('judul','Form Edit Data Kelas')

<div class="container" style="margin-left: 200px">
    <div class="section-body">
         <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
        <form action="/datamaster/datakelas/edit_kelas/{{$kelas->id}}" method="post">
        @csrf
        @method('PUT')
            <div class="row mb-3">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ old('kelas', $kelas->kelas) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="walas" class="col-sm-2 col-form-label">Wali Kelas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="walas" name="walas" value="{{ old('walas', $kelas->walas) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tahunajaran" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tahunajaran" name="tahunajaran"value="{{ old('tahunajaran', $kelas->tahunajaran) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ old('keterangan', $kelas->keterangan) }}">
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

