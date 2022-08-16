@extends('master')

@section('content')
<div class="container-fluid">

    <center>
        <h4 class="font-weight-bold">Detail Tentang Kandidat Akuntansi</h4>
    </center>

    <a href="{{ route('depan.kandidat') }}" class="btn btn-sm btn-light mb-3"><i class="fa fa-arrow-left"></i> Kembali</a>

    <div class="row justify-content-center">

        <div class="col-md-3">

            <div class="card">

                <div class="card-body">

                    <center>
                        {{-- <h4><b>{{ $kandidat->kode }}</b></h4> --}}
                    </center>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <center>


                            <img src="{{ asset('gambar/sistem/Akuntansi/(Original Size) Ketua Himpunan Akuntansi_01_Raihan Ilyasa.jpg') }}" style="width: 100%">


                            <center>
                                <br>
                                01-Raihan Ilyasa
                                <div><small class="text-muted">Calon Ketua</small></div>
                            </center>

                            <br>
                            </center>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="col-md-9">

            <div class="card">
                <div class="card-body">

                    <b>Kode / Nomor Urut :</b>
                    <span class="badge badge-primary">01</span>

                    <hr>

                    <b>Visi:</b>
                    <br>
                    Menjadikan Himpunan Mahasiswa Jurusan Akuntansi Fakultas Ekonomi dan Bisnis Universitas Brawijaya (HMJA FEB UB) periode 2022 sebagai lembaga eksekutif tingkat jurusan yang progresif, dinamis, dan responsif dalam memfasilitasi Mahasiswa S1 Jurusan Akuntansi Fakultas Ekonomi dan Bisnis Universitas Brawijaya (JA FEB UB) serta kolaboratif dengan stakeholders HMJA FEB UB dan KM FEB UB.

                    <hr>
                    <b>Misi:</b>
                    <br>
                    1. 	Meningkatkan kapabilitas dan kompetensi fungsionaris HMJA FEB UB dalam menjalankan peran dan fungsinya.<br>
                    2. 	Memaksimalkan segala bentuk penyesuaian program dan kegiatan kerja HMJA FEB UB dengan segala situasi dan kondisi.<br>
                    3. 	Memberikan pelayanan yang aktif dan tanggap disertai penguatan media digital sebagai penyebaran informasi yang berkualitas.<br>
                    4. 	Menjalin hubungan baik serta kerja baik sama yang optimal dan berkelanjutan antar stakeholders HMJA FEB UB dan KM FEB UB.<br>

                    <b>Tujuan</b>
                    <br>
                    1. 	Terbentuknya fungsionaris HMJA FEB UB yang kapabel dan kompeten dalam menjalankan peran dan fungsinya.<br>
                    2. 	Terwujudnya program dan kegiatan kerja HMJA FEB UB yang dapat menyesuaikan dengan segala situasi dan kondisi.<br>
                    3. 	Terciptanya pelayanan yang aktif dan tanggap disertai penguatan media digital sebagai penyebaran informasi yang berkualitas.<br>
                    4. 	Terjalinnya hubungan baik serta kerja sama yang optimal dan berkelanjutan antar stakeholders HMJA FEB UB dan KM FEB UB.<br>

                    <hr>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection
