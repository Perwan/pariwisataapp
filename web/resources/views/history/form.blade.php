@extends('main')

@section('title','History')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>History</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("kendaraan.index") }}">List History</a></li>
                        <li class="breadcrumb-item active">Form History</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form History</h3>
            </div>
            <div class="card-body">
            <thead>
                        <tr>
                            <ul>Tanggal Pemesanan</ul>
                            <ul>Kode Wisata</ul>
                            <ul>Nama Wisata</ul>
                            <ul>Lama Kunjungan</ul>
                            <ul></ul>
                            <ul>Alat transportasi</ul>
                            <ul>Seat</ul>
                            <ul>Harga</ul>
                            
                        </tr>
                        <div class="form-group float-right">
                   
                        <a href="{{ route("kendaraan.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    </thead>
                
            </div>
        </div>
    </div>
</div>
    
@endsection