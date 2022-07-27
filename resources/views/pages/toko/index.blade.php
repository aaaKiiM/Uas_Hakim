@extends('layout.master')
@section('title', 'Data Toko')
@section('dataToko', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="/toko/form" class="btn btn-primary">Tambah Toko</a>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Username</th>
                                            <th>Nama Toko</th>
                                            <th>Alamat Toko</th>
                                            <th>No Hp Toko</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ( $toko as $isi)
                                            <tr>
                                                <td>{{ $nomor++ }}</td>
                                                <td>{{ $isi->users->name }}</td>
                                                <td>{{ $isi->nama_toko }}</td>
                                                <td>{{ $isi->alamat_toko }}</td>
                                                <td>{{ $isi->no_hp_toko }}</td>
                                                <td>
                                                    <a href="/mahasiswa/edit/{{$isi->id}}" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                            </tr>
                                        @empty

                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
