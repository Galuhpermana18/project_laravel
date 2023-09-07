@extends('layouts.master')
@section('content')

@section('judul','Data Siswa')

<div class="container">
  @if (session('status'))
      <div class="alert alert-primary">{{session('status')}}</div>
  @endif
  <a href="{{route('tambah_siswa')}}" class="btn btn-primary mb-5"><i class="fas fa-plus mr-2"></i>Tambah</a>
    <div class="row justify-content-center">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Lengkap</th>
              {{-- <th scope="col">NIPD</th> --}}
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Kelas</th>
              <th scope="col">NISN</th>
              <th scope="col">Tempat&Tanggal Lahir</th>
              <th scope="col">Agama</th>
              <th scope="col">Alamat</th>
              {{-- <th scope="col">Email</th> --}}
              <th scope="col">Profil Gambar</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($datasiswas as $no => $datasiswa)
                <tr>
                  <th Scope="col">{{$no+1}}</th>
                  <td>{{$datasiswa->nama_lengkap}}</td>
                  {{-- <td>{{$datasiswa->nipd}}</td> --}}
                  <td>{{$datasiswa->jenis_kelamin}}</td>
                  <td>{{$datasiswa->kelas}}</td>
                  <td>{{$datasiswa->nisn}}</td>
                  <td>{{$datasiswa->ttl}}</td>
                  <td>{{$datasiswa->agama}}</td>
                  <td>{{$datasiswa->alamat}}</td>
                  {{-- <td>{{$datasiswa->email}}</td> --}}
                  <td><img src="/images/{{$datasiswa->gambar}}" width="100" alt=""></td>
                  <td>
                    <a href="{{route('edit_siswa',$datasiswa->id)}}" class="btn btn-block btn-warning btn-sm mb-2 mt-2 "><i class="fas fa-edit"></i></a>
                    <form action="/siswas/{{$datasiswa->id}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-block btn-danger btn-sm" >
                          <i class="far fa-trash-alt">  </i>
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