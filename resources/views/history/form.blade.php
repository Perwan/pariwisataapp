@extends('main')

@section('title','History Transaksi')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>History Transaksi</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <ul class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></ul>
                        <ul class="breadcrumb-item"><a href="{{ route("history.index") }}">History Transaksi</a></ul>
                        <ul class="breadcrumb-item active">History Transaksi</ul>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">History Transaksi</h3>
            </div>
            <div class="card-body">
            <tbody>
                        <tr>
                            <ul>Tanggal Pemesanan   :</ul>
                            <ul>Kode Wisata         :</ul>
                            <ul>Nama Wisata         :</ul>
                            <ul>Lama Kunjungan      :</ul>
                            <ul></ul>
                            <ul>Alat Transportasi   :</ul>
                            <ul>Seat                :</ul>
                            <ul>Harga               :</ul>
                        </tr>
                        <div class="form-group float-right">
           
                        <a href="{{ route("history.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
            </tbody>
            
            </div>
            
        </div>
    </div>
</div>
    
@endsection