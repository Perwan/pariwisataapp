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
                <form action="" method="POST" autocomplete="off">
                    @csrf
                   
                    <div class="form-group">
                        <label for="kodekendaraan">Kode History</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kodekendaraan" value="" maxlength="20">
                        @error('kodekendaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type History</label>
                        <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="" maxlength="100">
                        @error('namakendaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="seat">Seat</label>
                        <input type="text" class="form-control @error('seat') is-invalid @enderror" name="seat" value="" maxlength="100">
                        @error('seat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                           
                           
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" name="harga" value="" >
                       
                    </div>
                    <div class="form-group float-right">
                    <a href="{{ route("kendaraan.index") }}" class="btn btn-success"><i class="fa fa-save"></i>Simpan</a>
                        <a href="{{ route("kendaraan.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection