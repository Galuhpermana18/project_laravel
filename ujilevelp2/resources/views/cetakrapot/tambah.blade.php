@extends('layouts.master')
@section('content')
    
@section('judul','Form Tambah Rapot')

<div class="container-fluid">
    <form action="/datarapot/simpan" method="POST">
        @csrf
        <div class="mb-3">
            <label for="namasiswa" class="form-label">Nama Siswa</label>
            <select class="form-select form-control" name="siswas_id" aria-label="Default select example">
            @foreach ($siswas as $siswa)
            <option value="{{$siswa->id}}">{{$siswa->nama_lengkap}}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="datamapels" class="form-label">Data Mapel</label>
            <select class="form-select form-control" name="datamapels_id" aria-label="Default select example">
            @foreach ($datamapels as $datamapel)
            <option value="{{$datamapel->id}}">{{$datamapel->kodemapel}}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="namasiswa" class="form-label">Kelas</label>
            <select class="form-select form-control" name="kelas_id" aria-label="Default select example">
            @foreach ($kelas as $kelas)
            <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="pengetahuans_id" class="form-label">Nilai Pengetahuan</label>
            <input type="text" class="form-control" id="pengetahuans_id" name="pengetahuans_id" readonly value="@forelse ($pengetahuans as $pengetahuan){{$pengetahuan->totalsemua}}
            @empty
                {{"tidak ada data"}}
            @endforelse
            ">
        <div class="mb-3">
            <label for="datanilais" class="form-label">KKM</label>
            <select class="form-select form-control" name="datanilais_id" aria-label="Default select example">
            @foreach ($datanilais as $datanilais)
            <option value="{{$datanilais->id}}">{{$datanilais->kkm}}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="keterampilans_id" class="form-label">Nilai Keterampilan</label>
            <input type="text" class="form-control" id="keterampilans_id" name="keterampilans_id" readonly value="@forelse ($keterampilans as $keterampilan){{$keterampilan->totalsemua}}
            @empty
                {{"tidak ada data"}}
            @endforelse
            ">
            </div>
         <div class="mb-3">
                <label for="nilaiakhir" class="col-form-label">Nilai Akhir</label>
                <input type="text" class="form-control" id="nilaiakhir" name="nilaiakhir"  value="{{old('nilaiakhir')}}">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="col-form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi"  value="{{old('deskripsi')}}">
            </div>
            {{-- <div class="mb-3">
                <label for="predikat" class="col-form-label">Predikat</label>
                <input type="text" class="form-control" id="predikat" name="predikat"  value="{{old('predikat')}}">
            </div> --}}
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
</div>
    
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
// untuk hitungan akhir
$(document).ready(function() {
        $("#pengetahuans_id, #keterampilans_id").keyup(function() {
            var pengetahuans_id  = $("#pengetahuans_id").val();
            var keterampilans_id = $("#keterampilans_id").val();
            var nilaiakhir = parseInt(pengetahuans_id) / 2 + parseInt(keterampilans_id) / 2;
            $("#nilaiakhir").val(nilaiakhir);
        });
        window.addEventListener('keydown', function(e) {
        if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
            if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
                e.preventDefault();
                return false;
            }
            // else{
            // alert('dilarang ketik enter ketika kosong')
            // console.log('berhasil');
            // }
        }
    }, true);
    });
// akhir hitungan akhir
</script>
@endsection
