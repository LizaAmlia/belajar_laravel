@extends('layout.layout')
@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Table</h4>
                        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate"><i class="fa fa-plus"></i>Tambah Data</button>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                       <th>no</th>
                                       <th>nama</th>
                                       <th>judul buku</th>
                                       <th>tanggal pinjem</th>
                                       <th>tanggal kembali</th>
                                       <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($peminjaman as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->judul_buku}}</td>
                                        <td>{{$item->tgl_pinjem}}</td>
                                        <td>{{$item->tgl_kembali}}</td>
                                        <td>
                                            <a href=# data-target="#modalEdit{{$item->id}}" data-target="modal"
                                                class="btn btn-ss btn-primary"><i class="fa fa-edit"></i></a>

                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- #/ container -->
</div>



<div class="modal fade" id="modalCreate">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="create-peminjaman" method="post">
                @csrf
            <div class="modal-body">
                <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="masukan nama">
            </div>
            <div class="modal-body">
                <label>Judul Buku</label>
                    <input type="text" class="form-control" name="judul_buku" placeholder="masukan judul buku">
            </div>
            <div class="modal-body">
                <label>Tanggal Pinjem</label>
                    <input type="date" class="form-control" name="tgl_pinjem" placeholder="masukan tanggal pinjem">
            </div>
            <div class="modal-body">
                <label>Tanggal Kembali</label>
                    <input type="date" class="form-control" name="tgl_kembali" placeholder="masukan tanggal kembali">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Modal Edit -->
@foreach ($peminjaman as $item)


<div class="modal fade" id="modalEdit{{$item->id}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="edit-peminjaman" method="post">
                @csrf
            <div class="modal-body">
                <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="masukan nama">
            </div>
            <div class="modal-body">
                <label>Judul Buku</label>
                    <input type="text" class="form-control" name="judul_buku" placeholder="masukan judul buku">
            </div>
            <div class="modal-body">
                <label>Tanggal Pinjem</label>
                    <input type="text" class="form-control" name="tgl_pinjem" placeholder="masukan tanggal pinjem">
            </div>
            <div class="modal-body">
                <label>Tanggal Kembali</label>
                    <input type="text" class="form-control" name="tgl_kembali" placeholder="masukan tanggal kembali">
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endforeach
@endsection
