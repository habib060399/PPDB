@extends('admin.template')

@section('content')

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Datatables</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="m-b-30 m-t-0">Default Example</h4>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; width: 100%;">
                            <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Nisn</th>
                                <th>Asal Sekolah</th>
                                <th>Alamat</th>
                                <th>No Hp orang tua</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>
                                    <a href="{{route('berkas')}}" class="btn btn-secondary btn-xs waves-effect">Lihat</a>
                                    <a href="" class="btn btn-secondary btn-xs waves-effect" data-toggle="modal" data-target="#custom-width-modal">Edit</a>
                                    <a href="" class="btn btn-secondary btn-xs waves-effect">Hapus</a>
                                </td>
                            </tr>
                            
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- End Row -->

 <!-- sample modal content -->
 <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title m-0" id="custom-width-modalLabel">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <button type="button" class="btn btn-success waves-effect">Lulus</button>
                <button type="button" class="btn btn-danger waves-effect">Tidak Lulus</button>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div> --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
@endsection