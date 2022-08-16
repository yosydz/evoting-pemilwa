@extends('admin.master')
{{-- {{ dd($voting) }}; --}}
@section('content')
<div class="container">

    <center>
        <h4 class="font-weight-bold">Rekap</h4>
    </center>

    <br>

    <div class="row justify-content-center">

        @foreach($kandidat as $k)

        <div class="col-md-4">

            <div class="card">
                @if($k->id == "1")
                <div class="card-header text-center font-weight-bold">Calon Ketua Himpunan Ilmu Ekonomi</div>
                @elseif($k->id == "2")
                <div class="card-header text-center font-weight-bold">Calon Ketua Himpunan Akuntansi</div>
                @else
                <div class="card-header text-center font-weight-bold">Calon Ketua Himpunan Manajemen</div>
                @endif
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">

                            @if($k->id == "1")
                            <img src="{{ asset('gambar/sistem/Ilmu Ekonomi/1641124577401.jpeg') }}" width="250px" height="450px" style="width: 100%">
                            @elseif($k->id == "2")
                            <img src="{{ asset('gambar/sistem/Akuntansi/(Original Size) Ketua Himpunan Akuntansi_01_Raihan Ilyasa.jpg') }}" width="250px" height="450px" style="width: 100%">
                            @else
                            <img src="{{ asset('gambar/sistem/Manajemen/CAKAHIM RESIZE.PNG') }}" width="250px" height="450px" style="width: 100%">
                            @endif

                            <center>
                                {{ $k->nama_ketua }}
                                <div><small class="text-muted">Calon Ketua</small></div>
                            </center>

                        </div>
                    </div>

                    <center>

                        <?php
                        $id_kandidat = $k->id;
                        $jumlah = DB::table('voting')->where('kandidat_id',$id_kandidat)->count();
                        ?>
                        <br>
                        <div class="alert alert-info">
                            <b><?php echo $jumlah ?></b> Suara
                        </div>
                        <?php
                        ?>
                    </center>

                </div>
            </div>

        </div>

        @endforeach

    </div>

    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Grafik hasil voting</div>
                <div class="card-body p-0">
                    <br>
                    <canvas id="grafik1" style="position: relative; height: 300px;"></canvas>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
