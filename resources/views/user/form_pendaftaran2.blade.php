@extends('user.template')

@section('content')
<div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 m-b-30">Form Pendaftaran</h4>

                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="example-text-input">Asal Sekolah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="example-text-input">Kewarganegaraan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="example-text-input">No Registrasi akta kelahiran</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="example-text-input">Nama orangtua Ayah/Ibu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="example-text-input">
                                        </div>
                                    </div>
                                          
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="example-text-input">No Kartu Keluarga</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="example-text-input">No Hp orang tua</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label" for="example-text-input">Alamat Orang tua</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="example-text-input">
                                        </div>
                                    </div>   
                                </br>
                                    <div class="form-group row">
                                        <div class="offset-sm-11 col-sm-5">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Next</button>
                                        </div>
                                    </div>  

                                </form>
                            </div> <!-- card-body -->
                        </div> <!-- card -->
                    </div> <!-- col -->
                </div> <!-- End row -->
@endsection