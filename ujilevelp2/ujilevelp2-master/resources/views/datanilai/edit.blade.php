@extends('layouts.master')
@section('content')

@section('judul','Form Edit Data Nilai')

<div class="container" style="margin-left: 200px">
    <div class="section-body">
         <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
        <form action="/datanilai/edit_nilai/{{$datanilai->id}}" method="post">
        @csrf
        @method('PUT')
            <div class="row mb-3">
                <label for="siswas_id" class="col-sm-2 col-form-label">Pilih Siswa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="siswas_id" name="siswas_id" value="{{ old('siswas_id', $datanilai->siswas_id) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nilai" class="col-sm-2 col-form-label">nilai</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nilai" name="nilai" value="{{ old('nilai', $datanilai->nilai) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kkm" class="col-sm-2 col-form-label">KKM</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kkm" name="kkm" value="{{ old('kkm', $datanilai->kkm) }}">
                </div>
            </div>
            {{-- <div class="row mb-3">
                <label for="nilai_pengetahuan" class="col-sm-2 col-form-label">nilai pengetahuan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nilai_pengetahuan" name="nilai_pengetahuan" value="{{ old('nilai_pengetahuan', $datanilai->nilai_pengetahuan) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nilai_keterampilan" class="col-sm-2 col-form-label">nilai Keterampilan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nilai_keterampilam" name="nilai_keterampilan" value="{{ old('nila_keterampilan', $datanilai->nilai_keterampilan) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kkm" class="col-sm-2 col-form-label">Nilai KKM</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kkm" name="kkm"  value="{{ old('kkm', $datanilai->kkm) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $datanilai->deskripsi) }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="predikat" class="col-sm-2 col-form-label">predikat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="predikat" name="predikat" value="{{ old('predikat', $datanilai->deskripsi) }}">
                </div>
            </div> --}}
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

