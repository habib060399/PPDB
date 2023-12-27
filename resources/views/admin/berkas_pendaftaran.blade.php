@extends('admin.template')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-t-0 m-b-30">Form Pendaftaran</h4>

                    <form class="form-horizontal" action="{{ route('confirm') }}" method="POST">
                        @csrf

                        <input type="text" class="form-control" id="example-text-input" name="id_user"
                            value="{{ $berkas->id_user }}" hidden>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status" id="status">
                                    <option value="LULUS">Lulus</option>
                                    <option value="TIDAK LULUS">Tidak Lulus</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Nisn</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="example-text-input" name="nisn" required
                                    value="{{ $berkas->nisn > 0 ? $berkas->nisn : '' }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->nama_lengkap }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->ttl }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->alamat }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->jenkel }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Anak ke-</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->anakke }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Agama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->agama }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Asal Sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->asal_sekolah }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Kewarganegaraan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->negara }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Nama orangtua Ayah/Ibu</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->nama_ortu }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">No Kartu Keluarga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->no_kk }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">No Hp orang tua</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->no_hp_ortu }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label" for="example-text-input">Alamat Orang tua</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="example-text-input"
                                    value="{{ $berkas->alamat_ortu }}" readonly>
                            </div>
                        </div>
                        </br>
                        <div class="form-group row">
                            <div class="offset-sm-10 col-sm-5">
                                <button class="btn btn-success waves-effect waves-light" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
    </div> <!-- End row -->
@endsection
