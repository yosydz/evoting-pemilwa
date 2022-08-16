@extends('master')

@section('content')
<div class="container-fluid">

    <center>
        <h4 class="font-weight-bold">Detail Tentang Kandidat Ilmu Ekonomi</h4>
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


                            <img src="{{ asset('gambar/sistem/Ilmu Ekonomi/1641124577401.jpeg') }}" style="width: 100%">


                            <center><br>
                                01-Meiliana Setefany Ayu Susanti
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
                    Terwujudnya HMJIE FEB UB yang inklusif dan bergerak dinamis dalam kebermanfaatan bagi mahasiswa Ilmu Ekonomi dan Indonesia

                    <hr>
                    <b>Misi:</b>
                    <br>
                    1. Membangun budaya internal HMJIE FEB UB yang profesional dan kekeluargaan.<br>
                    2. Memberikan pelayanan yang aspiratif dan informatif secara optimal.<br>
                    3. Harmonisasi inklusif sebagai sarana kolaborasi bagi seluruh pihak yang berkaitan dengan HMJIE FEB UB.<br>
                    4. Mengembangkan potensi mahasiswa IE FEB UB dalam pembentukan karakter yang berkualitas.<br>
                    5. Menciptakan iklim prestatif dalam pembangunan kajian serta penelitian yang berintegritas dan berwawasan luas sesuai bidang keilmuan ekonomi.
                    <hr>

                    <b>Tujuan</b>
                    <br>
                    1. Untuk menciptakan lingkungan kerja yang profesional serta menjaga rasa kekeluargaan HMJIE FEB UB.<br>
                    2. Untuk memberikan pelayanan yang informatif melalui media yang telah tersedia di HMJIE FEB UB secara optimal.<br>
                    3. Untuk membangun hubungan baik dengan pihak – pihak yang berkaitan dengan HMJIE FEB UB baik internal maupun eksternal.<br>
                    4. Untuk meningkatkan kemampuan softskill maupun hardskill mahasiswa ILmu Ekonomi FEB UB yang berkualitas.<br>
                    5. Untuk meningkatkan serta menunjang pola pikir kritis terhadap isu-isu yang sesuai dengan keilmuan ekonomi yang terjadi.

                    <hr>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection
