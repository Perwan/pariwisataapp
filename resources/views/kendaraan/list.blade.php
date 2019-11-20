@extends('main')

@section('title','List Kendaraan')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Kendaraan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Kendaraan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
       
        
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">List Kendaraan</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="{{ route('kendaraan.create') }}" class="btn btn-success">
                        <i class="fa fa-plus">Tambah</i>
                    </a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Kendaraan</th>
                            <th>Nama Kendaraan</th>
                            <th>Type Kendaraan</th>
                            <th>Seat</th>
                            <th>Harga/Hari</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>1</td>
                            <td>MCB</td>
                            <td>Mercedes Benz</td>
                            <td>Bus</td>
                            <td>50</td>
                            <td>Rp 1.000.000</td>
                            <td>
                            <form action="" method="">

                           <a href="{{ route('kendaraan.create') }}" class="btn btn-warning btn-block">
                            <i class="fa fa-pencil-alt"></i>Ubah</a></td>
                            <td>
                                <form action="{{ route('kendaraan.index') }}">
                                    
                                    <button class="btn btn-danger btn-block">
                                            <i class="fa fa-trash">Hapus</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                      
                    </tbody>
                </table>
                <div class="float-right mt-2">
                    
                </div>
            </div>
        </div>
        
    </section>
</div>
@endsection