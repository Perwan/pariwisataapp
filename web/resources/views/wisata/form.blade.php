@extends('main')

@section('title','Form Wisata')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Wisata</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("wisata.index") }}">List Wisata</a></li>
                        <li class="breadcrumb-item active">Form Wisata</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Wisata</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                    @csrf
                   
                    <div class="form-group">
                        <label for="kodekendaraan">Kode Wisata</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="kodekendaraan" value="" maxlength="20">
                        @error('kodeewisata')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Wisata</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="" maxlength="100">
                        @error('namawisata')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="" maxlength="100">
                        @error('lokasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                           
                           
                    </div>
                    <div class="form-group">
                        <label for="harga">Status</label>
                        <input type="text" class="form-control" name="harga" value="" >
                       
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Simpan</button>
                        <a href="{{ route("wisata.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection