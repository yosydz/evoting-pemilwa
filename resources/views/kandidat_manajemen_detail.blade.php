@extends('master')

@section('content')
<div class="container-fluid">

    <center>
        <h4 class="font-weight-bold">Detail Tentang Kandidat Manajemen</h4>
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


                            <img src="{{ asset('gambar/sistem/Manajemen/CAKAHIM RESIZE.PNG') }}" style="width: 100%">


                            <center><br>
                                02-Miftah Irsyad
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
                    <span class="badge badge-primary">02</span>

                    <hr>

                    <b>Visi:</b>
                    <br>
                    Terwujudnya HMJM FEB UB yang Berintegritas, Sinergis, dan Progresif dalam memberikan kebermanfaatan serta sebagai wadah pengembangan dan penyalur aspirasi mahasiswa S-1 Jurusan Manajemen FEB UB

                    <hr>
                    <b>Misi:</b>
                    <br>
                     1. Menanamkan nilai-nilai Integritas, Sinergis, dan Progresif dalam pembentukan karakter fungsionaris HMJM FEB UB.<br>
                     2. Mewadahi dan memfasilitasi aspirasi dan segala kebutuhan mahasiswa S-1 Jurusan Manajemen serta sebagai jembatan penghubung dengan stakeholder HMJM FEB UB.<br>
                     3. Menggali dan mengembangkan inovasi dan kreativitas mahasiswa S-1 Jurusan Manajemen FEB UB dalam menunjang jiwa kewirausahaan.<br>
                     4. Membantu meningkatkan kemampuan Intelektual mahasiswa S-1 Jurusan Manajemen dalam pengkajian isu-isu terkini.<br>

                    <hr>

                    <b>Tujuan</b>
                    <br>
                        1. Memberikan dampak positif dari nilai HMJM FEB UB bagi lingkup Jurusan Manajemen dan KM FEB UB.<br>
                        2. Menemukan suatu alternatif solusi dari berbagai permasalahan yang dimiliki oleh mahasiswa S-1 Jurusan Manajemen.<br>
                        3. Terbentuknya kerjasama yang bermanfaat bagi stakeholder dan HMJM FEB UB.<br>
                        4. Menghasilkan mahasiswa S-1 Jurusan Manajemen dengan daya saing tinggi melalui program-program yang dilaksanakan oleh HMJM FEB UB.<br>


                    <hr>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection
