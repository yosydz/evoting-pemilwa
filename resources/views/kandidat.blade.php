@extends('master')

@section('content')
<div class="container">

    <center>
        <h4 class="font-weight-bold">Kandidat Jurusan</h4>
    </center>

    <br>

    <div class="row justify-content-center">

        {{-- @foreach($kandidat as $k) --}}

        <div class="col-md-3">

            <div class="card">
                <div class="card-header text-center font-weight-bold">Calon Ketua Himpunan Akuntansi</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">


                            {{-- <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 100%"> --}}

                            <img src="{{ asset('gambar/sistem/Akuntansi/(Original Size) Ketua Himpunan Akuntansi_01_Raihan Ilyasa.jpg') }}" width="250px" height="250px" style="width: 100%">


                            <center>
                                <br>
                                01-Raihan Ilyasa
                                <div><small class="text-muted">Calon Ketua</small></div>
                            </center>

                        </div>
                    </div>

                    <center>
                        <a href="{{ route('kandidat.detail.akutansi') }}" class="btn btn-primary mt-4 mb-2">Tentang, Visi & Misi <i class="ml-2 fa fa-arrow-right"></i></a>
                    </center>

                </div>
            </div>

        </div>

        <div class="col-md-3">

            <div class="card">
                <div class="card-header text-center font-weight-bold">Calon Ketua Himpunan Ekonomi</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">


                            {{-- <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 100%"> --}}

                            <img src="{{ asset('gambar/sistem/Ilmu Ekonomi/1641124577401.jpeg') }}" width="250px" height="250px" style="width: 100%">


                            <center>
                                <br>
                                01-Meiliana Setefany Ayu Susanti
                                <div><small class="text-muted">Calon Ketua</small></div>
                            </center>

                        </div>
                    </div>

                    <center>
                        <a href="{{ route('kandidat.detail.ekonomi') }}" class="btn btn-primary mt-4 mb-2">Tentang, Visi & Misi <i class="ml-2 fa fa-arrow-right"></i></a>
                    </center>

                </div>
            </div>

        </div>

        <div class="col-md-3">

            <div class="card">
                <div class="card-header text-center font-weight-bold">Calon Ketua Himpunan Manajemen</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">


                            {{-- <img src="{{ asset('gambar/sistem/user.png') }}" style="width: 100%"> --}}

                            <img src="{{ asset('gambar/sistem/Manajemen/CAKAHIM RESIZE.PNG') }}" width="250px" height="250px" style="width: 100%">


                            <center>
                                <br>
                                02-Miftah Irsyad
                                <div><small class="text-muted">Calon Ketua</small></div>
                            </center>

                        </div>
                    </div>

                    <center>
                        <a href="{{ route('kandidat.detail.manajemen') }}" class="btn btn-primary mt-4 mb-2">Tentang, Visi & Misi <i class="ml-2 fa fa-arrow-right"></i></a>
                    </center>

                </div>
            </div>

        </div>

        {{-- @endforeach --}}

    </div>
</div>
@endsection
