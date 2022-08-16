<!DOCTYPE html>
<html>
<head>
    <title>Administrator - Sistem Informasi e-voting pemilihan ketua osis berbasis web menggunakan framework laravel</title>
</head>
<body>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>

    <center>
        <h4>Laporan Voting OSIS</h4>
    </center>
    <table class="table table-bordered tableku">
        <thead>
            <tr>
                <th width="1%" class="text-center">No</th>                            
                <th width="25%">Pemilih</th>
                <th>Kandidat Dipilih</th>
                <th width="20%">Waktu Voting</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            ?>
            @foreach($voting as $p)
            <tr>
                <td class="text-center">{{ $no++ }}</td>                               
                <td>{{ $p->nis }} - {{ $p->nama }}</td>                               
                <td>
                    ({{ $p->kode }}) {{ $p->nama_ketua }} && {{ $p->nama_wakil }}
                </td>
                <td>{{ date('H:i:s d-m-Y', strtotime($p->created_at)) }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>