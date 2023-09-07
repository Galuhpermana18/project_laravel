@extends('sb-admin/app')

@section('content')

@section('judul','Form Tambah Peminjaman')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">@yield('judul')</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
  
  <div class="container" style="margin-left: 200px">
      <div class="section-body">
           <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
           @if ($errors->any())
              <div class="alert alert-primary">
              <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  
  <form action="{{route('simpan_peminjam')}}" method="POST">
      @csrf
          <div class="row mb-3">
              <label for="nama_peminjam" class="col-form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam"  value="{{old('nama_peminjam')}}">
          </div>
          <div class="row mb-3">
              <label for="email" class="col-form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email"  value="{{old('email')}}">
          </div>
          <div class="row mb-3">
              <label for="judulbuku" class="col-form-label">Judul Buku</label>
              <select class="form-select form-control" name="databukus_id" aria-label="Default select example">
                @foreach ($bukus as $buku)
                <option value="{{$buku->id}}">{{$buku->judul_buku}}</option>
                @endforeach
              </select>
          </div>
          <div class="row mb-3">
            <label for="stok" class="col-form-label">Berapa Buku Yang di Pinjam ?</label>
            <input type="number" class="form-control" id="stok" name="stok"  value="{{old('stok')}}">
        </div>
        <div class="row mb-3">
          <label for="tanggalpinjam" class="col-form-label">Tanggal Peminjaman</label>
          <input type="date" class="form-control" id="tanggalpinjam" name="tanggalpinjam"  value="{{old('tanggalpinjam')}}">
      </div>
      <div class="row mb-3">
        <label for="tanggakembali" class="col-form-label">Tanggal Pengembalian</label>
        <input type="date" class="form-control" id="tanggalkembali" name="tanggalkembali"  value="{{old('tanggalkembali')}}">
    </div>
          <div class="row mb-3">
              <div class="col-sm-10 offset-sm-2">
              <div class="form-check">
              </div>
              </div>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
                      </div>
                  </div>
              </div>
          </div>
    
@endsection