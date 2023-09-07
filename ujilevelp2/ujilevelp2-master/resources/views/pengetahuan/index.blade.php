@extends('layouts.master')
@section('content')

@section('judul','Nilai Pengetahuan')
    

<div class="container">
  @if (session('status'))
  <div class="alert alert-primary">{{session('status')}}</div>
@endif
  <a href="{{ route('tambah_pengetahuan') }}" class="btn btn-primary mb-2"><i class="fas fa-plus mr-2"></i>Tambah</a>
    <div class="row justify-content-center">
      <table class="table my-5 bg-light ">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Kelas</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($pengetahuans as  $pengetahuan)
          <tr>
            <th Scope="col">{{$loop->iteration}}</th>
            <td>{{$pengetahuan->siswas->nama_lengkap}}</td>
            <td>{{$pengetahuan->kelas->kelas}}</td>
            <td>{{$pengetahuan->totalsemua}}</td>
            @empty

        @endforelse
        </tbody>
          </table>
    </div>
  </div>
</div>
    
@endsection