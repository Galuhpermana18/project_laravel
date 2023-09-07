@extends('layouts.master')
@section('content')

@section('judul','Data Rapot')

<div class="container">
    @if (session('status'))
    <div class="alert alert-primary">{{session('status')}}</div>
  @endif
    <a href="{{ route('tambah_rapot') }}" class="btn btn-primary mb-5"><i class="fas fa-plus mr-2"></i>Tambah</a>
      <div class="row justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                {{-- <th scope="col">Nama Mata Pelajaran</th>
                <th scope="col">Guru Pengajar</th> --}}
                <th scope="col">Document</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($datarapot as $no => $rapot)
                  <tr>
                    <th Scope="col">{{$no+1}}</th>
                    <td>{{$rapot->siswas->nama_lengkap}}</td>
                    <td>{{$rapot->siswas->kelas}}</td>
                    {{-- <td>{{$rapot->nama_mapel}}</td>
                    <td>{{$rapot->guru_pengajar}}</td> --}}
                    <td>
                      <a href="{{route('detail_rapot',$rapot->id)}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                  </td>
                @endforeach
              </tr>
            </tbody>
            </table>
      </div>
    </div>
  </div>
      
  @endsection