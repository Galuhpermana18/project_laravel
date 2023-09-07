@extends('layouts.master')
@section('content')

@section('judul','Tambah Nilai UAS Dan UTS')
    
@if ($errors->any())
    <div class="alert alert-primary">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/uasanduts/simpan" method="POST">
    @csrf
    <div class="mb-3">
    <label for="siswas_id" class="form-label">Pilih Siswa</label>
    <select class="form-select form-control" name="siswas_id" aria-label="Default select example">
        <option disabled>Pilih Nama</option>
        @foreach ($siswas as $siswa)
        <option value="{{$siswa->id}}">{{$siswa->nama_lengkap}}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3">
        <label for="mapel_id" class="form-label">Pilih Mapel</label>
        <select class="form-select form-control" name="datamapels_id" aria-label="Default select example">
            <option disabled>Pilih Mapel</option>
            @foreach ($datamapels as $mapel)
            <option value="{{$mapel->id}}">{{$mapel->nama_mapel}}</option>
            @endforeach
        </select>
        </div>
        <div class="row g-3">
            <div class="col">
            <label for="nilaiuts_satu" class="form-label">Nilai Uts 1</label>
            <input type="number" class="form-control" placeholder="uts satu" aria-label="First name" name="nilaiuts_satu" id="nilaiuts_satu">
            </div>
            <div class="col">
            <label for="nilaiuts_dua" class="form-label">Nilai Uts 2</label>
            <input type="number" class="form-control" placeholder="uts dua" aria-label="Last name" id="nilaiuts_dua" name="nilaiuts_dua">
            </div>
        </div>
        {{-- <div class="mb-3">
        <label for="jumlah_uts" class="form-label">Total Uts</label>
        <input class="form-control" readonly type="text" id="jumlah_uts" name="jumlah_uts">
        </div> --}}
        <div class="row g-3">
        <div class="col">
        <label for="nilaiuas_satu" class="form-label">Nilai Uas 1</label>
        <input type="number" class="form-control" placeholder="uas satu" aria-label="First name" name="nilaiuas_satu" id="nilaiuas_satu">
        </div>
        <div class="col">
        <label for="nilai_uasdua" class="form-label">Nilai Uas 2</label>
        <input type="number" class="form-control" placeholder="uas dua" aria-label="Last name" id="nilaiuas_dua" name="nilaiuas_dua">
        </div>
        </div>
        {{-- <div class="mb-3">
        <label for="jumlah_uas" class="form-label">Total Uas</label>
        <input class="form-control" readonly type="text" id="jumlah_uas" name="jumlah_uas" name="jumlah_uas">
        </div> --}}
        <div class="row">
            <div class="col">
                <label for="jumlahuts" class="form-label">Total Uts</label>
                <input class="form-control" readonly type="text" id="jumlahuts" name="jumlahuts">
            </div>
            <div class="col">
                <label for="jumlahuas" class="form-label">Total Uas</label>
                <input class="form-control" readonly type="text" id="jumlahuas" name="jumlahuas" name="jumlahuas">
            </div>
        </div>
        <div class="mb-3">
        <label for="totalsemua" class="form-label">Total Semua</label>
        <input class="form-control" readonly type="text" name="totalsemua" id="totalsemua">
        </div>
    <button type="submit" class="btn btn-primary my-3 w-100">Submit</button>
</form>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
// untuk hitungan uts
    $(document).ready(function() {
        $("#nilaiuts_satu, #nilaiuts_dua").keyup(function() {
            var nilaiuts_dua  = $("#nilaiuts_dua").val();
            var nilaiuts_satu = $("#nilaiuts_satu").val();
            var jumlahuts = parseInt(nilaiuts_dua) / 2 + parseInt(nilaiuts_satu) / 2;
            $("#jumlahuts").val(jumlahuts);
            //$("#totalsemua").val(totalsemua);
            if(isNaN(jumlahuts)){
                // alert('no a number')
                $('#jumlahuts').val(0);
                returnVal = false;
            }
        });
    });
// akhir hitungan uts

// untuk hitungan uas
$(document).ready(function() {
        $("#nilaiuas_satu, #nilaiuas_dua").keyup(function() {
            var nilaiuas_dua  = $("#nilaiuas_dua").val();
            var nilaiuas_satu = $("#nilaiuas_satu").val();
            var jumlahuas = parseInt(nilaiuas_dua) / 2 + parseInt(nilaiuas_satu) / 2;
            $("#jumlahuas").val(jumlahuas);
           // $("#totalsemua").val(totalsemua);
            if(isNaN(jumlahuas)){
                // alert('no a number')
                $('#jumlahuas').val(0);
                returnVal = false;
            }
        });
    });
// akhir hitungan uas

// untuk hitungan akhir
$(document).ready(function() {
        $("#jumlahuas, #jumlahuts").keyup(function() {
            var jumlahuts  = $("#jumlahuts").val();
            var jumlahuas = $("#jumlahuas").val();
            var totalsemua = parseInt(jumlahuts) / 2 + parseInt(jumlahuas) / 2;
           // $("#totalsemua").val(totalsemua);
            $("#totalsemua").val(totalsemua);
            if(isNaN(totalsemua)){
                // alert('no a number')
                $('#totalsemua').val(0);
                returnVal = false;
            }
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