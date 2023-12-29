<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <div>
        <center>
            <h4>Laporan Penerimaan Peserta Didik Baru</h4>
        </center>
        <br/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nisn</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Daftar Ulang</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($berkas_siswa as $b)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$b->nama_lengkap_bdu}}</td>
                    <td>{{$b->nisn_bdu}}</td>
                    <td>{{$b->ttl_bdu}}</td>
                    <td>{{$b->alamat_bdu}}</td>
                    <td>{{'Sudah'}}</td>
                </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>