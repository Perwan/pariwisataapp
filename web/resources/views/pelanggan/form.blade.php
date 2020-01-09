@extends('main')

@section('title','Form Pelanggan')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Pelanggan</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("pelanggan.index") }}">List Pelanggan</a></li>
                        <li class="breadcrumb-item active">Form Pelanggan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Pelanggan</h3>
            </div>
            <div class="card-body">
                <form action={{ isset($data)
                                    ?route("pelanggan.update",[$data->id])
                                    :route("pelanggan.store") }}
                    method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="kode">Kode Pelanggan</label>
                        <input type="text"
                            class="form-control @error("kode") is-invalid @enderror"
                            name="kode" value='{{ (isset($data)?$data->kode:old("kode")) }}' placeholder="Masukkan Kode Pelanggan">
                        @error("kode")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pelanggan</label>
                        <input type="text"
                            class="form-control @error("nama") is-invalid @enderror"
                            name="nama" value='{{ (isset($data)?$data->nama:old("nama")) }}' placeholder="Masukkan Nama Pelanggan">
                        @error("nama")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nonik">No NIK</label>
                        <input type="text"
                            class="form-control @error("nonik") is-invalid @enderror"
                            name="nonik" value='{{ isset($data)?$data->type:old("nonik") }}' placeholder="Masukkan No NIK">
                        @error("nonik")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text"
                            class="form-control @error("alamat") is-invalid @enderror"
                            name="alamat" value='{{ isset($data)?$data->alamat:old("alamat") }}' placeholder="Masukkan Alamat Pelanggan">
                        @error("alamat")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Kelamin</label>
                        <input type="text"
                            class="form-control @error("jenis") is-invalid @enderror"
                            name="jenis" value='{{ isset($data)?$data->jenis:old("jenis") }}' placeholder="Masukkan Jenis Kelamin">
                        @error("jenis")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text"
                            class="form-control @error("telepon") is-invalid @enderror"
                            name="telepon" value='{{ isset($data)?$data->telepon:old("telepon") }}' placeholder="Masukkan No Telepon">
                        @error("telepon")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                   
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ route("pelanggan.index") }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>

       
    </div>
</div>
@endsection
