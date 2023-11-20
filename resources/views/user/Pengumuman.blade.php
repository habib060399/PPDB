@extends('user.template')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Pengumuman</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="">
                        <h4 class="m-t-0"></h4>
                        <div class="">
                            <div class="modal bs-example-modal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title m-0">Pemberitahuan</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label" for="example-text-input">Nama
                                                    Lengkap</label>
                                                <div class="col-sm-10">                                                                                                                                                                                                           
                                                    <input type="text" class="form-control" id="example-text-input" value="{{$nama}}" readonly>                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label" for="example-text-input">Nisn</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="example-text-input"
                                                        value="{{$nisn}}" readonly>
                                                </div>
                                            </div>
                                            <br>
                                            <h4 class="modal-title m-0">{{$status}}<a href="{{$link}}">{{$status2}}</a>
                                            </h4>
                                        </div>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
