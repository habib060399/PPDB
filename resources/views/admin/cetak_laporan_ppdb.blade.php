@foreach ($berkas_siswa as $b)
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
            <h4>Laporan Penerimaan Peserta Didik Baru</h4>
        </center>
        <br/>
        <br/>
        <center>==================================================================================</center>
        <br/>
        <table>                            
                <tbody>
                <tr>
                    <td>Nama Lengkap </td>
                    <td></td>
                    <td> : {{$b->nama_lengkap}}</td>
                </tr>
                <tr>
                    <td>Nisn </td>
                    <td></td>
                    <td> : {{$b->nisn}}</td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir </td>
                    <td></td>
                    <td> : {{$b->ttl}}</td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td></td>
                    <td> : {{$b->alamat}}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin </td>
                    <td></td>
                    <td> : {{$b->jenkel}}</td>
                </tr>
                <tr>
                    <td>Anak Ke- </td>
                    <td></td>
                    <td> : {{$b->anakke}}</td>
                </tr>
                <tr>
                    <td>Agama </td>
                    <td></td>
                    <td> : {{$b->agama}}</td>
                </tr>
                <tr>
                    <td>Asal Sekolah </td>
                    <td></td>
                    <td> : {{$b->asal_sekolah}}</td>
                </tr>
                <tr>
                    <td>Negara </td>
                    <td></td>
                    <td> : {{$b->negara}}</td>
                </tr>
                <tr>
                    <td>No Reg </td>
                    <td></td>
                    <td> : {{$b->no_reg}}</td>
                </tr>
                <tr>
                    <td>Nama Orangtua </td>
                    <td></td>
                    <td> : {{$b->nama_ortu}}</td>
                </tr>
                <tr>
                    <td>No KK </td>
                    <td></td>
                    <td> : {{$b->no_kk}}</td>
                </tr>
                <tr>
                    <td>No Hp Orangtua </td>
                    <td></td>
                    <td> : {{$b->no_hp_ortu}}</td>
                </tr>
                <tr>
                    <td>No KK </td>
                    <td></td>
                    <td> : {{$b->alamat_ortu}}</td>
                </tr>
                <tr>
                    <td>Status </td>
                    <td></td>                    
                    <td> : {{($b->status != null) ? "$b->status" : "-"}}</td>
                </tr>
                <tr {{($b->status == 'LULUS') ? '' : 'hidden'}}>
                    <td>Daftar Ulang </td>
                    <td></td>
                    <td> : {{($b->id_berkas != null) ? "Sudah" : "Belum"}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </body>
    </html>
@endforeach            