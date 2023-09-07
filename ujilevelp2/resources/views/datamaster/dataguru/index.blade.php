@extends('layouts.master')
@section('content')

@section('judul','Data Guru')

<div class="container">
  @if (session('status'))
  <div class="alert alert-primary">{{session('status')}}</div>
@endif
  <a href="{{ route('tambah_guru') }}" class="btn btn-primary mb-5"><i class="fas fa-plus mr-2"></i>Tambah</a>
    <div class="row justify-content-center">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NUTPK</th>
              <th scope="col">NIK</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Tempat & Tanggal Lahir</th>
              <th scope="col">Status Pegawai</th>
              <th scope="col">TMT</th>
              <th scope="col">NO HP</th>
              <th scope="col">Profil Gambar</th>
              {{-- <th scope="col">Username Telegram</th> --}}
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($guru as $no => $dataguru)
                <tr>
                  <th Scope="col">{{$no+1}}</th>
                  <td>{{$dataguru->nuptk}}</td>
                  <td>{{$dataguru->nik}}</td>
                  <td>{{$dataguru->nama_lengkap}}</td>
                  <td>{{$dataguru->jenis_kelamin}}</td>
                  <td>{{$dataguru->ttl}}</td>
                  <td>{{$dataguru->statuspegawai}}</td>
                  <td>{{$dataguru->tmt}}</td>
                  <td>{{$dataguru->nohp}}</td>
                  <td><img src="/images/{{$dataguru->gambar}}" width="100" alt=""></td>
                  {{-- <td>{{$dataguru->usernametelegram}}</td> --}}
                  <td>
                    <a href="{{route('edit_guru',$dataguru->id)}}" class="btn btn-warning btn-sm mb-2 mt-2"><i class="fas fa-edit"></i></a>
                    <form action="/gurus/{{$dataguru->id}}" method="post">
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