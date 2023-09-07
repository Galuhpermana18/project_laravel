@extends('layouts.master')
@section('content')

@section('judul','Data Mata Pelajaran')

<div class="container">
    @if (session('status'))
    <div class="alert alert-primary">{{session('status')}}</div>
  @endif
    <a href="{{ route('tambah_mapel') }}" class="btn btn-primary mb-5"><i class="fas fa-plus mr-2"></i>Tambah</a>
      <div class="row justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Mata Pelajaran</th>
                <th scope="col">Kelas</th>
                <th scope="col">Nama Mata Pelajaran</th>
                <th scope="col">Guru Pengajar</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($datamapel as $no => $datamapel)
                  <tr>
                    <th Scope="col">{{$no+1}}</th>
                    <td>{{$datamapel->kodemapel}}</td>
                    <td>{{$datamapel->kelas}}</td>
                    <td>{{$datamapel->nama_mapel}}</td>
                    <td>{{$datamapel->guru_pengajar}}</td>
                    <td>
                      <a href="{{route('edit_mapel',$datamapel->id)}}" class="btn btn-warning btn-sm mb-2 mt-2"><i class="fas fa-edit"></i></a>
                      <form action="/datamapel/{{$datamapel->id}}" method="post">
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