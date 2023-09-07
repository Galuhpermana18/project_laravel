@extends('layouts.master')
@section('content')
@section('judul','Tambah Nilai Pengetahuan')

@if ($errors->any())
    <div class="alert alert-primary">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/pengetahuan/simpan" method="POST">
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
        <label for="kelas_id" class="form-label">Pilih Kelas</label>
        <select class="form-select form-control" name="kelas_id" aria-label="Default select example">
            <option disabled>Pilih Mapel</option>
            @foreach ($kelas as $kelas)
            <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
            @endforeach
        </select>
        </div>
        <div class="row g-3">
            <div class="col">
            <label for="nilaikd1" class="form-label">Nilai KD 1</label>
            <input type="number" class="form-control" placeholder="KD 1" aria-label="First name" name="nilaikd1" id="nilaikd1">
            </div>
            <div class="col">
            <label for="nilaikd2" class="form-label">Nilai KD 2</label>
            <input type="number" class="form-control" placeholder="KD 2" aria-label="Last name" id="nilaikd2" name="nilaikd2">
            </div>
            <div class="col">
            <label for="nilaikd3" class="form-label">Nilai KD 3</label>
            <input type="number" class="form-control" placeholder="KD 3" aria-label="Last name" id="nilaikd3" name="nilaikd3">
            </div>
            <div class="col">
            <label for="nilaikd4" class="form-label">Nilai KD 4</label>
            <input type="number" class="form-control" placeholder="KD 4" aria-label="Last name" id="nilaikd4" name="nilaikd4">
            </div>
        </div>
        {{-- <div class="mb-3">
        <label for="jumlah_uts" class="form-label">Total Uts</label>
        <input class="form-control" readonly type="text" id="jumlah_uts" name="jumlah_uts">
        </div> --}}
        <div class="row g-3">
        <div class="col">
        <label for="nilaikd5" class="form-label">Nilai KD 5</label>
        <input type="number" class="form-control" placeholder="KD 5" aria-label="First name" name="nilaikd5" id="nilaikd5">
        </div>
        <div class="col">
        <label for="nilaikd6" class="form-label">Nilai KD 6</label>
        <input type="number" class="form-control" placeholder="KD 6" aria-label="Last name" id="nilaikd6" name="nilaikd6">
        </div>
        <div class="col">
        <label for="nilaikd7" class="form-label">Nilai KD 7</label>
        <input type="number" class="form-control" placeholder="KD 7" aria-label="Last name" id="nilaikd7" name="nilaikd7">
        </div>
        <div class="col">
        <label for="nilaikd8" class="form-label">Nilai KD 8</label>
        <input type="number" class="form-control" placeholder="KD 8" aria-label="Last name" id="nilaikd8" name="nilaikd8">
        </div>
        </div>

        <div class="row g-4">
            <div class="col">
            <label for="nilaikd9" class="form-label">Nilai KD 9</label>
            <input type="number" class="form-control" placeholder="KD 9" aria-label="First name" name="nilaikd9" id="nilaikd9">
            </div>
            <div class="col">
            <label for="nilaikd10" class="form-label">Nilai kd 10</label>
            <input type="number" class="form-control" placeholder="KD 10" aria-label="Last name" id="nilaikd10" name="nilaikd10">
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
    $(document).ready(function() {
        $("#nilaikd1, #nilaikd2, #nilaikd3, #nilaikd4, #nilaikd5, #nilaikd6, #nilaikd7, #nilaikd8, #nilaikd9, #nilaikd10").keyup(function() {
            var nilaikd10 = $("#nilaikd10").val();
            var nilaikd9 = $("#nilaikd9").val();
            var nilaikd8 = $("#nilaikd8").val();
            var nilaikd7 = $("#nilaikd7").val();
            var nilaikd6 = $("#nilaikd6").val();
            var nilaikd5 = $("#nilaikd5").val();
            var nilaikd4 = $("#nilaikd4").val();
            var nilaikd3 = $("#nilaikd3").val();
            var nilaikd2 = $("#nilaikd2").val();
            var nilaikd1 = $("#nilaikd1").val();
            var totalsemua = parseInt(nilaikd2) / 10  + parseInt(nilaikd1) / 10 + parseInt(nilaikd3) / 10 + parseInt(nilaikd4) / 10 + parseInt(nilaikd5) / 10 + parseInt(nilaikd6) / 10 + parseInt(nilaikd7) / 10 + parseInt(nilaikd8) / 10 + parseInt(nilaikd9) / 10 + parseInt(nilaikd10) / 10;
            $("#totalsemua").val(totalsemua);
            if(isNaN(totalsemua)){
                // alert('no a number')
                $('#totalsemua').val(0);
                returnVal = false;
            }
        });
    });
</script>
@endsection
