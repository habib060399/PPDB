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
                    @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    <div class="col-lg-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; width: 100%;">
                            <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Nisn</th>
                                <th>Asal Sekolah</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>No Hp orang tua</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>


                            <tbody>
                                @foreach ($daftarBerkas as $berkas)                                                                    
                            <tr>
                                <td>{{$berkas->nama_lengkap}}</td>
                                <td>{{$berkas->nisn}}</td>
                                <td>{{$berkas->asal_sekolah}}</td>
                                <td>{{$berkas->alamat}}</td>
                                <td>{{$berkas->status}}</td>
                                <td>{{$berkas->no_hp_ortu}}</td>
                                <td>
                                    <a href="{{route('berkas',['id' => $berkas->id_user])}}" class="btn btn-secondary btn-xs waves-effect">Lihat</a>
                                    <button onclick="edit({{$berkas->id_user}})" class="btn btn-secondary btn-xs waves-effect" data-toggle="modal" data-target="#custom-width-modal">Edit</button>
                                    <a href="{{route('hapus', ['id' => $berkas->id_user])}}" class="btn btn-secondary btn-xs waves-effect">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- End Row -->

 <!-- sample modal content -->
 @php
  $berkas;
    if (empty($berkas)) 
        // $berkas = null;
        
        $berkas = 0;
        else {
            $berkas = $berkas->id_user;
        }
            
 @endphp
 <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title m-0" id="custom-width-modalLabel">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <a id="lulus" href="" class="btn btn-success waves-effect">Lulus</a>
                <a id="tidak_lulus" href="" class="btn btn-danger waves-effect">Tidak Lulus</a>                
            </div>
            <div class="modal-footer">                
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <script>
        var id;

        function edit(id_user) {
            var uri1 = "";
            var uri2 = "";
            var url = uri1+id_user+uri2;
            var a = document.getElementById('lulus');            
            var a2 = document.getElementById('tidak_lulus');            
            // a.href = "{{route('confirm', ['id' =>2, 'status' => '1'])}}";
            a.href=`${urlEditBerkas}/${id_user}/1`;
            a2.href = `${urlEditBerkas}/${id_user}/2`;
            console.log(id_user);
        }
        

    </script>
@endsection