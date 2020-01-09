@extends('main')

@section('title','Detail Transaksi')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6">
                    <h1>Transaksi</h1>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("transaksi.index") }}">List transaksi</a></li>
                        <li class="breadcrumb-item active">Detail Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        @if ($data->status=="pen")
        <div class="alert alert-danger">
            <i class="fa fa-exclamation-circle"></i> Pending</div>
        @else
        <div class="alert alert-success">
            <i class="fa fa-exclamation-circle"></i> Selesai</div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Detail Transaksi</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card-body">
                        <table>
                            <div>
                                <label>
                                    <h4>Rincian Transaksi</h4>
                                </label>
                                <div>
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal"
                                            value='{{ isset($data)?$data->tanggal:"" }}' readonly>
                                    </div>
                                    <div>
                                        <label for="kode">Kode Wisata</label>
                                        <input type="text" name="kode" id="kode" class="form-control" readonly
                                            value='{{ isset($data)?$data->wisata->kode:"" }}'>
                                    </div>
        
                                    <div>
                                        <label for="nama">Nama Wisata</label>
                                        <input type="text" name="nama" id="nama" class="form-control" readonly
                                            value='{{ isset($data)?$data->wisata->nama:"" }}'>
                                    </div>
                                    <div>
                                        <label for="jlhhari">Jumlah Hari</label>
                                        <input type="text" class="form-control" name="jlhhari"
                                            value={{ isset($data)?$data->jlhhari:"" }} readonly>
                                    </div>
                                    <div>
                                        <label for="nama">Nama Kendaraan</label>
                                        <input type="text" name="nama" id="nama" class="form-control" readonly
                                            value='{{ isset($data)?$data->kendaraan->nama:"" }}'>
                                    </div>
                                    <div>
                                        <label for="jlhpenumpang">Jumlah Penumpang</label>
                                        <input type="text" class="form-control" name="jlhpenumpang"
                                            value={{ isset($data)?$data->jlhpenumpang:"" }} readonly>
                                    </div>
                                    <div>
                                        <label for="total">Total Harga</label>
                                        <input type="text" class="form-control" name="total"
                                            value={{ isset($data)?$data->total:"" }} readonly>
                                    </div>
                            </div>
                        </table>

                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card-body">
                        <table>
                            <div>
                                <label for="image">
                                    <h4>File Bukti Transfer</h4>
                                </label><br>
                                <img src="{{ asset('uploads/resi/' . $data->image) }}" width="400px" height="400px"
                                    alt="Image">
                            </div>
                        </table>
                    </div>
                </div>

            </div>
            <div class="card-body row">




                <div class="form-group" style="display:flex;justify-content:flex-end;width:100%;padding:0;">
                    <a href="{{ route("transaksi.index") }}" class="btn btn-danger text-right">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
 