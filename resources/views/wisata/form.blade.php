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
                <form action={{ route('wisata.index') }} method="POST" autocomplete="off">
                    @csrf
                   
                    <div class="form-group">
                        <label for="kodekendaraan">Kode Kendaraan</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="kodekendaraan" value="{{ (isset($data)?$data->kodekendaraan:old('kodekendaraan')) }}" maxlength="20">
                        @error('kodekendaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type Kendaraan</label>
                        
                    </div>
                    <div class="form-group">
                        <label for="seat">Seat</label>
                        <input type="text" class="form-control @error('seat') is-invalid @enderror" name="seat" value="{{ (isset($data)?$data->seat:old('seat')) }}" maxlength="6">
                        @error('seat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                           
                           
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ (isset($data)?$data->harga:old('harga')) }}" maxlength="6">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group float-right">
                    <a href="{{ route("wisata.index") }}" class="btn btn-success"><i class="fa fa-save"></i>Simpan</a>
                        <a href="{{ route("wisata.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection