@extends('layouts.master')
@section('content')

@section('judul','Data Nilai')

<div class="container">
    @if (session('status'))
    <div class="alert alert-primary">{{session('status')}}</div>
  @endif
    <a href="{{route('tambah_nilai')}}" class="btn btn-primary mb-5"><i class="fas fa-plus mr-2"></i>Tambah</a>
      <div class="row justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Nilai</th>
                <th scope="col">KKM</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($datanilai as $no => $datanilai)
                  <tr>
                    <th Scope="col">{{$no+1}}</th>
                    <td>{{$datanilai->siswas->nama_lengkap}}</td>
                    <td>{{$datanilai->nilai}}</td>
                    <td>{{$datanilai->kkm}}</td>
                    {{-- <td>{{$datanilai->nilai_pengetahuan}}</td>
                    <td>{{$datanilai->nilai_keterampilan}}</td> --}}
                    {{-- <td>{{$datanilai->deskripsi}}</td>
                    <td>{{$datanilai->predikat}}</td> --}}
                    <td>
                      <a href="{{route('edit_nilai',$datanilai->id)}}" class="btn btn-warning btn-sm mb-2 mt-2"><i class="fas fa-edit"></i></a>
                      <form action="/datanilai/{{$datanilai->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                  </td>
                @endforeach
              </tr>
            </tbody>
            </table>
      </div>
    </div>
  </div>
      
  @endsection