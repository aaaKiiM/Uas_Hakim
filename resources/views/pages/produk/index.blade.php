@extends('layout.master')
@section('title', 'Data Produk')
@section('dataProduk', 'active')
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
                                <a href="/produk/form" class="btn btn-primary">Tambah Produk</a>

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
                                            <th class="text-center">Nomor</th>
                                            <th class="text-center">Nama Toko</th>
                                            <th class="text-center">Nama Kue</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- {{ dd($produk) }} --}}
                                        @forelse ( $produk as $isi )
                                        <tr>
                                            <td class="text-center">{{ $nomor++ }}</td>
                                            <td class="text-center">{{ $isi->nama_kue }}</td>
                                            <td class="text-center">{{ $isi->tokos->nama_toko }}</td>
                                            <td class="text-center">{{ $isi->kategoris->kategori }}</td>
                                            <td class="text-center">
                                                <a href="/produk/edit/{{$isi->id}}" class="btn btn-primary btn-sm">Edit</a>
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
