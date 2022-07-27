@extends('layout.master')
@section('title', 'Edit Data Produk')
@section('dataProduk', 'active')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Edit Produk</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <form action="/produk/edit/{{ $produk->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Toko</label>
                                <select name="toko" class="custom-select" id="exampleSelectBorder">
                                    <option>Pilih Toko</option>
                                    @foreach ($toko as $item)
                                        <option value="{{ $item->id }}" {{ $produk->tokos_id=$item->id ? 'selected' : '' }}>{{ $item->nama_toko }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Kue</label>
                                <input type="text" value="{{ $produk->nama_kue }}" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori" class="custom-select">
                                    <option>Pilih Kategori</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}" {{ $produk->kategoris_id=$item->id ? 'selected' : '' }}>{{ $item->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" value="{{ $produk->harga }}" name="harga" class="form-control" placeholder="Masukkan Nama Toko">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="ket" rows="3" placeholder="Masukkan Keterangan">{{ $produk->keterangan }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Stock</label>
                                <input type="text" value="{{ $produk->stock }}" name="stock" class="form-control" placeholder="Masukkan Nama Toko">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">General Elements</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Text</label>
                                                <input type="text" class="form-control" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Text Disabled</label>
                                                <input type="text" class="form-control" placeholder="Enter ..." disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- textarea -->
                                            <div class="form-group">
                                                <label>Textarea</label>
                                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Textarea Disabled</label>
                                                <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- input states -->
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input
                                            with
                                            success</label>
                                        <input type="text" class="form-control is-valid" id="inputSuccess"
                                            placeholder="Enter ...">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input
                                            with
                                            warning</label>
                                        <input type="text" class="form-control is-warning" id="inputWarning"
                                            placeholder="Enter ...">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i>
                                            Input with
                                            error</label>
                                        <input type="text" class="form-control is-invalid" id="inputError"
                                            placeholder="Enter ...">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- checkbox -->
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">Checkbox</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <label class="form-check-label">Checkbox checked</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" disabled>
                                                    <label class="form-check-label">Checkbox disabled</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- radio -->
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="radio1">
                                                    <label class="form-check-label">Radio</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="radio1" checked>
                                                    <label class="form-check-label">Radio checked</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" disabled>
                                                    <label class="form-check-label">Radio disabled</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- select -->
                                            <div class="form-group">
                                                <label>Select</label>
                                                <select class="form-control">
                                                    <option>option 1</option>
                                                    <option>option 2</option>
                                                    <option>option 3</option>
                                                    <option>option 4</option>
                                                    <option>option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Select Disabled</label>
                                                <select class="form-control" disabled>
                                                    <option>option 1</option>
                                                    <option>option 2</option>
                                                    <option>option 3</option>
                                                    <option>option 4</option>
                                                    <option>option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- Select multiple-->
                                            <div class="form-group">
                                                <label>Select Multiple</label>
                                                <select multiple class="form-control">
                                                    <option>option 1</option>
                                                    <option>option 2</option>
                                                    <option>option 3</option>
                                                    <option>option 4</option>
                                                    <option>option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Select Multiple Disabled</label>
                                                <select multiple class="form-control" disabled>
                                                    <option>option 1</option>
                                                    <option>option 2</option>
                                                    <option>option 3</option>
                                                    <option>option 4</option>
                                                    <option>option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
    </div>
@endsection
