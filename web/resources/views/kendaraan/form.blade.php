@extends('main')

@section('title','Form Kendaraan')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Kendaraan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("kendaraan.index") }}">List Kendaraan</a></li>
                        <li class="breadcrumb-item active">Form Kendaraan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Kendaraan</h3>
            </div>
            <div class="card-body">
                <form action={{ isset($data)
                                    ?route("kendaraan.update",[$data->id])
                                    :route("kendaraan.store") }}
                    method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="kode">Kode Kendaraan</label>
                        <input type="text"
                            class="form-control @error("kode") is-invalid @enderror"
                            name="kode" value='{{ (isset($data)?$data->kode:old("kode")) }}' placeholder="Masukkan Kode Kendaraan">
                        @error("kode")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Kendaraan</label>
                        <input type="text"
                            class="form-control @error("nama") is-invalid @enderror"
                            name="nama" value='{{ (isset($data)?$data->nama:old("nama")) }}' placeholder="Masukkan Nama Kendaraan">
                        @error("nama")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type Kendaraan</label>
                        <input type="text"
                            class="form-control @error("type") is-invalid @enderror"
                            name="type" value='{{ isset($data)?$data->type:old("type") }}' placeholder="Masukkan Type Kendaraan">
                        @error("type")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="seat">Seat</label>
                        <input type="text"
                            class="form-control @error("seat") is-invalid @enderror"
                            name="seat" value='{{ isset($data)?$data->seat:old("seat") }}' placeholder="Masukkan Jumkah Seat">
                        @error("seat")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga per Hari</label>
                        <input type="text"
                            class="form-control @error("harga") is-invalid @enderror"
                            name="harga" value='{{ isset($data)?$data->harga:old("harga") }}' placeholder="Masukkan Harga per Hari">
                        @error("harga")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                   
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ route("kendaraan.index") }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>

       
    </div>
</div>
@endsection
