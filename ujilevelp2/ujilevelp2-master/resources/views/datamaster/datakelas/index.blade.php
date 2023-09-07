@extends('layouts.master')
@section('content')

@section('judul','Data Kelas')
    

<div class="container">
  @if (session('status'))
  <div class="alert alert-primary">{{session('status')}}</div>
@endif
  <a href="{{ route('tambah_kelas') }}" class="btn btn-primary mb-2"><i class="fas fa-plus mr-2"></i>Tambah</a>
    <div class="row justify-content-center">
      <table class="table my-5 bg-light ">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kelas</th>
            <th scope="col">Wali Kelas</th>
            <th scope="col">Tahun Ajaran</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datakelas as $no => $datakelas)
          <tr>
            <th Scope="col">{{$no+1}}</th>
            <td>{{$datakelas->kelas}}</td>
            <td>{{$datakelas->walas}}</td>
            <td>{{$datakelas->tahunajaran}}</td>
            <td>{{$datakelas->keterangan}}</td>
            <td>
              <a href="{{route('edit_kelas',$datakelas->id)}}" class="btn btn-warning btn-sm mb-2 mt-2" style="padding: 5px"><i class="fas fa-edit"></i></a>
              <form action="/kelas/{{$datakelas->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="far fa-trash-alt"></i>
                </button>
            </form>
          </td>
        @endforeach
        </tbody>
          </table>
    </div>
  </div>
</div>
    
@endsection