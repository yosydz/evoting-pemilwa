@extends('admin.master')

@section('content')
{{-- {{ dd($jumlah_pemilih_ekonomi) }} --}}
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Jumlah Pemilih Ekonomi</div>
                <div class="card-body">
                    <div><b>{{ $jumlah_pemilih_ekonomi }}</b> Total Pemilih</div>
                    <div><b>{{ $abstain_ekonomi }}</b> Abstain Voting</div>
                    <div><b>{{ $kosong_ekonomi }}</b> Kotak Kosong Voting</div>
                    <div><b>{{ $memilih_ekonomi }}</b> Kandidat Voting</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Jumlah Pemilih Akuntansi</div>
                <div class="card-body">
                    <div><b>{{ $jumlah_pemilih_akuntansi }}</b> Total Pemilih</div>
                    <div><b>{{ $abstain_akuntansi }}</b> Abstain Voting</div>
                    <div><b>{{ $kosong_akuntansi }}</b> Kotak Kosong Voting</div>
                    <div><b>{{ $memilih_akuntansi }}</b> Kandidat Voting</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Jumlah Pemilih Manajemen</div>
                <div class="card-body">
                    <div><b>{{ $jumlah_pemilih_manajemen }}</b> Total Pemilih</div>
                    <div><b>{{ $abstain_manajemen }}</b> Abstain Voting</div>
                    <div><b>{{ $kosong_manajemen }}</b> Kotak Kosong Voting</div>
                    <div><b>{{ $memilih_manajemen }}</b> Kandidat Voting</div>
                </div>
            </div>
        </div>

    </div>

    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Grafik hasill voting tiap kandidat jurusan</div>
                <div class="card-body p-0">
                    <canvas id="grafik1" style="position: relative; height: 300px;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
