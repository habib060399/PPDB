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
            font-size: 12pt;
        }
    </style>
    <div>
        <center>
            <h4>Laporan Rekapitulasi Penerimaan Peserta Didik Baru</h4>
        </center>
        <br/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Total Siswa</th>
                    <th>Total Pendaftar</th>
                    <th>Total Lulus</th>
                    <th>Total Daftar Ulang</th>
                    <th>Total Tidak Lulus</th>                    
                </tr>
            </thead>
            <tbody>                
                <tr>
                    <td>{{$total_siswa}}</td>
                    <td>{{$total_pendaftar}}</td>
                    <td>{{$total_lulus}}</td>
                    <td>{{$total_daftar_ulang}}</td>
                    <td>{{$total_tidak_lulus}}</td>                    
                </tr>                                    
            </tbody>
        </table>
    </div>
</body>
</html>