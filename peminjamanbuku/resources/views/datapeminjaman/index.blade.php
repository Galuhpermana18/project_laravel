@extends('sb-admin/app')

@section('content')

@section('judul','Data Peminjaman')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">@yield('judul')</h1>
  <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
          class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<div class="container">
    @if (session('status'))
    <div class="alert alert-primary">{{session('status')}}</div>
  @endif
    <a href="{{route('tambah_peminjam')}}" class="btn btn-primary mb-5"><i class="fas fa-plus mr-2"></i>Tambah</a>
      <div class="row justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">Judul Buku</th>
                {{-- <th scope="col">Kategori Buku</th> --}}
                <th scope="col">Berapa Buku Yang Di Pinjam ?</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($peminjamans as $no => $peminjamans)
                  <tr>
                    <th Scope="col">{{$no+1}}</th>
                    <td>{{$peminjamans->nama_peminjam}}</td>
                    <td>{{$peminjamans->email}}</td>
                    <td>{{$peminjamans->databukus->judul_buku}}</td>
                    {{-- <td>{{$peminjamans->kategori_buku}}</td> --}}
                    <td>{{$peminjamans->stok}}</td>
                    <td>{{$peminjamans->tanggalpinjam}}</td>
                    <td>{{$peminjamans->tanggalkembali}}</td>
                    {{-- jika user meminjam buku ketika sudah tanggal kembali --}}
                    @if ($peminjamans->tanggalpinjam == $peminjamans->tanggalkembali&&$peminjamans->tanggalkembali >= $peminjamans->tanggalpinjam)
                    <td>

                      <form action="/datapeminjaman/kembalikan/{{$peminjamans->id}}" onsubmit="return confirm('kembalikan buku yang di pinjam?')" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id_buku" value="{{$peminjamans->databukus->id}}">
                        <input type="hidden" name="stok" value="{{$peminjamans->stok}}">
                        <button type="submit" class="btn btn-block btn-primary btn-sm">Mengembalikan buku</button>
                  </form>
                </td>
                    {{-- jika user meminjam buku ketika sudah lewat tanggal kembali --}}
                    @elseif ($peminjamans->tanggalkembali > $peminjamans->tanggalpinjam)
                    <td>

                        <form action="/datapeminjaman/kembalikan/{{$peminjamans->id}}" onsubmit="return confirm('kembalikan buku yang di pinjam?')" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="hidden" name="id_buku" value="{{$peminjamans->databukus->id}}">
                          <input type="hidden" name="stok" value="{{$peminjamans->stok}}">
                          <button type="submit" class="btn btn-block btn-secondary btn-sm" disabled>Mengembalikan buku</button>
                    </form>
                  </td>
                  @elseif ($peminjamans->tanggalkembali < $peminjamans->tanggalpinjam)
                  <td class="text-danger">

                    {{-- <form action="/datapeminjaman/kembalikan/{{$peminjamans->id}}" onsubmit="return confirm('kembalikan buku yang di pinjam?')" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="id_buku" value="{{$peminjamans->databukus->id}}">
                      <input type="hidden" name="stok" value="{{$peminjamans->stok}}">
                      <button type="submit" class="btn btn-block text-danger btn-sm" disabled>anda telat Mengembalikan buku</button>
                </form> --}}
                salah input
              </td>
                  @endif
                @endforeach
              </tr>
            </tbody>
            </table>
      </div>
    </div>
    
@endsection