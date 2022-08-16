<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistem Informasi e-voting pemilihan ketua osis berbasis web menggunakan framework laravel</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugin/datatables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-info shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                <b>E-VOTING PEMILWA FEB</b>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left Side Of Navbar -->
                {{-- <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('depan.quickcount') }}">Quick Count</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('depan.kandidat') }}">Kandidat OSIS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('depan.voting') }}">Voting</a>
                    </li>
                </ul> --}}

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <?php
                    // cek jika siswa sudah login
                    if(!Session::get('login')){
                        // jika belum, tampilkan linkl login admin dan siswa
                        ?>
                         <li class="nav-item">
                            <a class="nav-link active btn " href="{{ route('depan.register.siswa') }}">Registrasi Pemilih</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active btn " href="{{ route('depan.login.siswa') }}">Login Pemilih</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">Login Admin / Panitia</a> --}}
                        </li>
                        <?php
                    }else{
                                // jika sudah, tampilkan nama dan link logout siswa
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active">Hai, {{ Session::get('nama') }} [{{ Session::get('nis') }}]</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('depan.login.siswa.logout') }}">Log Out</a>
                        </li>
                        <?php
                    }
                    ?>
                    @else
                    <li class="nav-item">
                        <a class="btn btn-primary btn-sm" href="{{ route('home') }}">Kembali ke halaman admin</a>
                    </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <div class="text-center text-muted py-5">
        <small>Sistem Informasi e-voting pemilihan ketua osis berbasis web menggunakan framework laravel</small>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/plugin/datatables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugin/datatables/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/plugin/chart.js/chart.min.js') }}"></script>

    <script type="text/javascript">

     $(document).ready(function(){
        CKEDITOR.replace('textarea1');
        CKEDITOR.replace('textarea2');
        CKEDITOR.replace('textarea3');
        CKEDITOR.replace('textarea4');

        $(".tableku").DataTable();
    });

    </script>

    <script>
        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

        var barChartData = {
            labels : [
            <?php
            $kandidat = DB::table('kandidat')->get();
            foreach($kandidat as $k){
                ?>
                " <?php echo $k->nama_ketua?>",
                <?php
            }
            ?>
            ],
            datasets : [
            {
                label: 'Suara',
                fillColor : "rgba(51, 240, 113, 0.61)",
                strokeColor : "rgba(11, 246, 88, 0.61)",
                highlightFill: "rgba(220,220,220,0.75)",
                highlightStroke: "rgba(220,220,220,1)",
                data : [

                <?php
                $kandidat = DB::table('kandidat')->get();
                foreach($kandidat as $k){
                    $id_kandidat = $k->id;
                    $jumlah = DB::table('voting')->where('kandidat_id',$id_kandidat)->count();
                    ?>
                    "<?php echo $jumlah ?>",
                    <?php
                }
                ?>
                ]
            },

            ]

        }


        window.onload = function(){
            var ctx = document.getElementById("grafik1").getContext("2d");
            window.myBar = new Chart(ctx).Bar(barChartData, {
                responsive : true,
                animation: true,
                barValueSpacing : 5,
                barDatasetSpacing : 1,
                tooltipFillColor: "rgba(0,0,0,0.8)",
                multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
            });
        }
    </script>
</body>
</html>
