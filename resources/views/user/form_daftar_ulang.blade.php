@extends('user.template')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Form Daftar Ulang</h4>

                    <form class="form-horizontal" action="{{ route('inputDaftarUlang') }}" method="POST">
                        @csrf
                        <input type="text" name="id_berkas" id="id_berkas" value="{{$id_berkas}}" hidden>
                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input" name="nama_lengkap" value="{{$nama}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Nisn</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input" name="nisn"
                                    value="{{ $nisn }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input" name="ttl" value="{{$ttl}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input" name="alamat" value="{{$alamat}}">
                            </div>
                        </div>

                        </br>
                        <div class="form-group row">
                            <div class="offset-sm-11 col-sm-5">
                                {{-- <a href="{{route('pendaftaran2')}}" class="btn btn-primary waves-effect waves-light">Next</a> --}}
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                            </div>
                        </div>

                    </form>
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
    </div> <!-- End row -->
@endsection
