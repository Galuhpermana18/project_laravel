@extends('layouts.master')
@section('content')

@section('judul','Rapot Siswa')
        <div class="card" style="width: 25 rem;">
        <div class="card-body">
            <h3 class="card-title">Detail Rapot</h3>
            <hr>
            <h4>Nama    : {{$datarapot->siswas->nama_lengkap}}</h4>
            <h4>Nipd    : {{$datarapot->siswas->nipd}}</h4>
            <h4>Nisn    : {{$datarapot->siswas->nisn}}</h4>
            <h4>Wali Kelas  : {{$datarapot->kelas->walas}}</h4>
            <h4>Agama       :  {{$datarapot->siswas->agama}} </h4>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Nilai Pengetahuan</th>
                    <th scope="col">Nilai Keterampilan</th>
                    <th scope="col">Nilai Akhir</th>
                    <th scope="col">Predikat</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php
                      $no = 1;  
                    @endphp
                    <td>{{$no++}}</td>
                    <td>{{$datarapot->siswas->nama_lengkap}}</td>
                    <td>{{$datarapot->datamapels->nama_mapel}}</td>
                    <td>{{$datarapot->pengetahuans_id}}</td>
                    <td>{{$datarapot->keterampilans_id}}</td>
                    <td>{{$datarapot->nilaiakhir}}</td>
                    <td>{{$datarapot->predikat}}</td>
                    <td>{{$datarapot->deskripsi}}</td>
                </tr>
                <a href="/cetakrapot/cetak_pdf/{{$datarapot->id}}" target="_blank" class="btn btn-info w-100 mb-5">Cetak PDF</a>
            </tbody>
        </table>
@endsection