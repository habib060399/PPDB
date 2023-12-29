@extends('admin.template')

@section('content')
<div class="row">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div>
                    <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#6cbafa" value="{{$total_pendaftar}}" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                    <div class="float-right">
                        <h2 class="text-primary mb-0">{{$total_pendaftar}}</h2>
                        <p class="text-muted mb-0 mt-2">Total Pendaftar</p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div>
                    <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#61d7c7" value="{{$total_daftar_ulang}}" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                    <div class="float-right">
                        <h2 class="text-info mb-0">{{$total_daftar_ulang}}</h2>
                        <p class="text-muted mb-0 mt-2">Total Siswa Daftar Ulang</p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div>
                    <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#6cbafa" value="{{$total_lulus}}" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                    <div class="float-right">
                        <h2 class="text-primary mb-0">{{$total_lulus}}</h2>
                        <p class="text-muted mb-0 mt-2">Total Siswa Lulus</p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div>
                    <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#61d7c7" value="{{$total_siswa}}" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                    <div class="float-right">
                        <h2 class="text-info mb-0">{{$total_siswa}}</h2>
                        <p class="text-muted mb-0 mt-2">Total Siswa</p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 col-sm-12 col-12">
    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; width: 100%;">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Nisn</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Anak ke-</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>
            <th>Negara</th>
            <th>No Regis</th>
            <th>Nama Orangtua</th>
            <th>No KK</th>
            <th>No Hp Orangtua</th>
            <th>Alamat Orangtua</th>
            
        </tr>
        </thead>


        <tbody>
            @foreach ($berkas_siswa as $b)                
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$b->nama_lengkap}}</td>
                <td>{{$b->nisn}}</td>
                <td>{{$b->ttl}}</td>
                <td>{{$b->alamat}}</td>
                <td>{{$b->jenkel}}</td>
                <td>{{$b->anakke}}</td>
                <td>{{$b->agama}}</td>
                <td>{{$b->asal_sekolah}}</td>
                <td>{{$b->negara}}</td>
                <td>{{$b->no_reg}}</td>
                <td>{{$b->nama_ortu}}</td>
                <td>{{$b->no_kk}}</td>
                <td>{{$b->no_hp_ortu}}</td>
                <td>{{$b->alamat_ortu}}</td>
            </tr>
            @endforeach        
        </tbody>
    </table>

</div>

<div class="row">

</div>
@endsection