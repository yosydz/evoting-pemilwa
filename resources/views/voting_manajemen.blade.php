@extends('heading')

@section('content')
<div class="container">

    <center>
        <h4 class="font-weight-bold">Voting</h4>
    </center>

    <br>
    <br>

    <center>
        <h3>
            BATAS WAKTU VOTING <span id="countdown"></span> seconds
        </h3>
    </center>


    <div class="row justify-content-center">



        <div class="col-md-4">

            <div class="card">

                <div class="card-header text-center font-weight-bold">Calon Ketua Himpunan Manajemen</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">

                            <img src="{{ asset('gambar/sistem/user.png') }}" width="250px" height="350px" style="width: 100%">


                            <center>
                                <br>

                                01-Dummy
                                <div><small class="text-muted">Calon Ketua</small></div>
                            </center>

                        </div>

                    </div>

                    <br>
                    <br>

                    <center>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#hapus_pemilih">
                            <i class="fa fa-pencil"></i> PILIH
                        </button>
                    </center>

                    <!-- modal hapus -->
                    <form method="POST" action="{{ route('depan.voting.aksi') }}">
                        <div class="modal fade" id="hapus_pemilih" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Konfirmasi</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin memilih kandidat ini?</p>
                                        @csrf
                                        <input type="hidden" name="kandidat" value="6">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light btn-sm" data-dismiss="modal"><i class="ti-close m-r-5 f-s-12"></i> Batal</button>
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Ya, Saya Yakin</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>

        <div class="col-md-4">

            <div class="card">
                <div class="card-header text-center font-weight-bold">Calon Ketua Himpunan Manajemen</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">

                            <img src="{{ asset('gambar/sistem/Manajemen/CAKAHIM RESIZE.PNG') }}" width="250px" height="350px" style="width: 100%">


                            <center>
                                <br>
                                02-Miftah Irsyad
                                <div><small class="text-muted">Calon Ketua</small></div>
                            </center>

                        </div>

                    </div>

                    <br>
                    <br>

                    <center>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#hapus_pemilih_1">
                            <i class="fa fa-pencil"></i> PILIH
                        </button>
                    </center>

                    <!-- modal hapus -->
                    <form method="POST" action="{{ route('depan.voting.aksi') }}">
                        <div class="modal fade" id="hapus_pemilih_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel1">Konfirmasi</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin memilih kandidat ini?</p>
                                        @csrf
                                        <input type="hidden" name="kandidat" value="3">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light btn-sm" data-dismiss="modal"><i class="ti-close m-r-5 f-s-12"></i> Batal</button>
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Ya, Saya Yakin</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>



    </div>
    <form method="POST" name="myform" action="{{ route('depan.voting.aksi') }}">
            @csrf
            <input type="hidden" name="kandidat" value="0">
            <a href="javascript: submitform()" type="submit" id="abstain" class="btn btn-danger btn-sm mt-3">
                <i class="fa fa-close"></i> &nbsp;ABSTAIN
            </a>

        </form>

</div>


<?php
    $x = route('depan.login.siswa.logout');
?>

<script type="text/javascript">
        function submitform()
        {
            document.myform.submit();
        }

    var minutesleft = 0; //give minutes you wish
    var secondsleft = 60; // give seconds you wish
    var finishedtext = "Countdown finished!";
    var end1;

    if(localStorage.getItem("end1")) {
        end1 = new Date(localStorage.getItem("end1"));
    } else {
        end1 = new Date();
        end1.setMinutes(end1.getMinutes()+minutesleft);
        end1.setSeconds(end1.getSeconds()+secondsleft);

    }
    var counter = function () {
    var now = new Date();
    var diff = end1 - now;

    diff = new Date(diff);

    var milliseconds = parseInt((diff%1000)/100)
        var sec = parseInt((diff/1000)%60)
        var mins = parseInt((diff/(1000*60))%60)
        //var hours = parseInt((diff/(1000*60*60))%24);

    if (mins < 10) {
        mins = "0" + mins;
    }
    if (sec < 10) {
        sec = "0" + sec;
    }
    if(now >= end1) {
        clearTimeout(interval);
    // localStorage.setItem("end", null);
        localStorage.removeItem("end1");
        localStorage.clear();
        document.getElementById('countdown').innerHTML = finishedtext;

        submitform();




    } else {
        var value = sec;
        localStorage.setItem("end1", end1);
        document.getElementById('countdown').innerHTML = value;
    }
}
var interval = setInterval(counter, 1000);

</script>
@endsection
