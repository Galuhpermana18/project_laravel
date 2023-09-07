@extends('layouts.master')
@section('content')

@section('judul','UAS Dan UTS')
    

<div class="container">
  @if (session('status'))
  <div class="alert alert-primary">{{session('status')}}</div>
@endif
  <a href="{{ route('tambah_uasanduts') }}" class="btn btn-primary mb-2"><i class="fas fa-plus mr-2"></i>Tambah</a>
    <div class="row justify-content-center">
      <table class="table my-5 bg-light ">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama siswa</th>
            <th scope="col">Nama Mata Pelajaran</th>
            <th scope="col">UTS</th>
            <th scope="col">UAS</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($uasanduts as  $uasuts)
          <tr>
            <th Scope="col">{{$loop->iteration}}</th>
            <td>{{$uasuts->siswas->nama_lengkap}}</td>
            <td>{{$uasuts->datamapels->nama_mapel}}</td>
            <td>{{$uasuts->jumlahuts}}</td>
            <td>{{$uasuts->jumlahuas}}</td>
            <td>{{$uasuts->totalsemua}}</td>
            @empty

        @endforelse
        </tbody>
          </table>
    </div>
  </div>
</div>
    
@endsection