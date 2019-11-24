@extends('main')

@section('title','Transaksi')

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
                        <li class="breadcrumb-item"><a href="{{ route("transaksi.index") }}">List Transaksi</a></li>
                        <li class="breadcrumb-item active">Informasi Pesanan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Informasi Pesanan</h3>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td style="padding-right:50px"><b>Konfirmasi Pembayaran</b></td>
                        <td style="padding-right:20px"> :</td>
                        <td><a href="{{ route("pembayaran.index") }}" class="btn btn-warning"><i class="fa fa"></i>
                        Cek Resi</a></td>
                    </tr>
                    <tr>
                        <td><b>Tanggal Pemesanan</b></td>
                        <td>:</td>
                        <td>12 Mei 2019</td>
                    </tr>
                    <tr>
                        <td><b>Nama Pemesan</b></td>
                        <td>:</td>
                        <td>Jacky</td>
                    </tr>
                    <tr>
                        <td style="padding-left:30px"><b>Kode Wisata</b></td>
                        <td>:</td>
                        <td>DTS</td>
                    </tr>
                    <tr>
                        <td style="padding-left:30px"><b>Nama Wisata</b></td>
                        <td>:</td>
                        <td>Danau Toba Samosir</td>
                    </tr>
                    <tr>
                        <td style="padding-left:30px"><b>Jumlah Hari</b></td>
                        <td>:</td>
                        <td>7 Hari</td>
                    </tr>
                    <tr>
                        <td><b>Jenis Armada</b></td>
                        <td>:</td>
                        <td>Minibus</td>
                    </tr>
                    <tr>
                        <td><b>Jumlah Penumpang</b></td>
                        <td>:</td>
                        <td>10 Orang</td>
                    </tr>
                    <tr>
                        <td style="padding-bottom:10px"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Total Pembayaran</b></td>
                        <td>:</td>
                        <td>Rp. 4.900.000</td>
                    </tr>

                </table>
                <div class="form-group float-right">

                    <a href="{{ route("transaksi.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>
                        Kembali</a>
                </div>




            </div>
        </div>
    </div>
</div>

@endsection
