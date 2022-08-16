@extends('heading')

@section('content')
<div class="container">

    <center>
        <h4 class="font-weight-bold">Panduan Dan Peraturan</h4>
    </center>

    <!-- Modal -->
    <div class="" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <b>PERATURAN</b>

                    <ul>
                        <li>Pelaksanaan pemungutan suara dilakukan secara online yang telah ditentukan oleh panitia.</li>
                        <li>Setiap Mahasiswa hanya memiliki kesempatan memilih satu kali saja.</li>
                        <li>Pemilih mengakses web yang telah disediakan oleh panitia secara mandiri.</li>
                    </ul>

                    <div class="alert alert-info text-center">
                       Pastikan pilihan anda sudah benar. Anda memiliki waktu 60 detik untuk memilih atau dianggap <b>Abstain</b>
                    </div>

                    <b>Selama acara pemungutan suara berlangsung, pemilih dan/atau calon <span class="text-danger">DILARANG</span>:</b>

                    <ul>
                        <li>Melakukan kampanye.</li>
                        <li>Menggunakan kata-kata yang mengandung fitnah, dan/atau umpatan terhadap  calon lainnya, panitia dan publik, serta menyinggung suku, agama, ras dan antar golonganserta membawa, bahkan mengatasnamakan dan menyinggung suatu lembaga.</li>
                        <li>Melakukan perbuatan yang melanggar kesopanan, kesusilaan, dan membahayakan pihak-pihak lain.</li>
                        <li>Melakukan tindakan kekerasan kepada siapapun dalam bentuk apapun.</li>
                        <li>Mengganggu kelancaran kerja panitia dalam proses pemungutan suara.</li>
                        <li>Pemilih menentukan pilihan dengan cara mengakses web yang telah disediakan lalu mengklik tombol  pilih pada salah satu kandidat.</li>
                    </ul>

                </div>
                <div class="modal-footer">
                    @if(session()->get('jurusan_id') == 1)
                            <a href="{{ route('voting.ekonomi') }}"  class="btn btn-success" data-dismiss="modal">Oke, Saya Mengerti</a>
                    @elseif (session()->get('jurusan_id') == 2)
                        <a href="{{ route('voting.akuntansi') }}"  class="btn btn-success" data-dismiss="modal">Oke, Saya Mengerti</a>
                    @else
                         <a href="{{ route('voting.manajemen') }}"  class="btn btn-success" data-dismiss="modal">Oke, Saya Mengerti</a>
                    @endif

                </div>
            </div>
        </div>
    </div>

</div>


<?php
$x = route('depan.login.siswa.logout');
?>

<script type="text/javascript">

    var seconds = 120;

    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {

            alert('Waktu voting kamu habis');
            window.location = "<?php echo $x; ?>";

        } else {

            document.getElementById("countdown").innerHTML = seconds;

            window.setTimeout("countdown()", 1000);
        }
    }

    countdown();

</script>
@endsection
