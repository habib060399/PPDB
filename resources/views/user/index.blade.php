@extends('user.template.index')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h1 class="m-t-0 m-b-30">SELAMAT DATANG DI WEBSITE PENERIMAAN PESERTA DIDIK BARU</h1>
                <a href="{{route('pendaftaran')}}"><h5>Daftar</h5></a>
            </div> <!-- card-body -->
        </div> <!-- card -->
    </div> <!-- col -->
</div> <!-- End row -->
    
@endsection