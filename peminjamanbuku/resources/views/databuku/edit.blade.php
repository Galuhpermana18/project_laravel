@extends('sb-admin/app')

@section('content')

@section('judul','Form Tambah Buku')

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

<form action="/databuku/update/{{$bukus->id}}" method="POST">
    @csrf
    @method('PATCH')
        <div class="row mb-3">
            <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="judul_buku" name="judul_buku"  value="{{$bukus->judul_buku}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label">Penerbit</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="deskripsi" name="deskripsi"  value="{{$bukus->deskripsi}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="stock" name="stock"  value="{{$bukus->stock}}">
            </div>
        </div>
        <div class="form-group">
            <label for="gambar">Profil Gambar</label>
            <img src="/images/{{$bukus->gambar}}" width="100" alt="">
            <input type="file" class="form-control-file" id="gambar" name="gambar" value="{{$bukus->gambar}}">
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