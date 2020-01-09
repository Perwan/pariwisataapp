@extends('main')

@section('title','Form Transaksi')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Transaksi</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("transaksi.index") }}">List transaksi</a></li>
                        <li class="breadcrumb-item active">Form Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-jlhhari">Form Transaksi</h3>
            </div>
            <div class="card-body">
                <form action={{ isset($data)
                                    ?route("transaksi.update",[$data->id])
                                    :route("transaksi.store") }}
                    method="POST" autocomplete="off" class="row" enctype="multipart/form-data">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group col-md-4">
                        <label for="nama">Pelanggan</label>
                        <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                            @foreach ($pelanggan as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($data) && $data->pelanggan_id==$item->id?"selected":"" }}
                                    >{{ $item->nama }}</option>
                            @endforeach
                        </select>
                       
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tanggal">Tanggal</label>
                        <input type="date"
                            class="form-control @error("tanggal") is-invalid @enderror"
                            name="tanggal" value={{ isset($data)?$data->tanggal:old("tanggal") }}>
                        @error("tanggal")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nama">Nama Wisata</label>
                        <select name="wisata_id" id="wisata_id" class="form-control">
                            @foreach ($wisata as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($data) && $data->wisata_id==$item->id?"selected":"" }}
                                    >{{ $item->nama }}</option>
                            @endforeach
                        </select>
                       
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nama">Nama Kendaraan</label>
                        <select name="kendaraan_id" id="kendaraan_id" class="form-control">
                            @foreach ($kendaraan as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($data) && $data->kendaraan_id==$item->id?"selected":"" }}
                                    >{{ $item->nama }}</option>
                            @endforeach
                        </select>
                       
                    </div>
                    <div class="form-group col-md-4">
                        <label for="jlhpenumpang">Jumlah Penumpang</label>
                        <input type="text"
                            class="form-control @error("jlhpenumpang") is-invalid @enderror"
                            name="jlhpenumpang" value={{ isset($data)?$data->jlhpenumpang:old("jlhpenumpang") }}>
                        @error("jlhpenumpang")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="jlhhari">Jumlah Hari</label>
                        <input type="text"
                            class="form-control @error("jlhhari") is-invalid @enderror"
                            name="jlhhari" value='{{ isset($data)?$data->jlhhari:old("jlhhari") }}'>
                        @error("jlhhari")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="total">Total Harga</label>
                        <input type="text"
                            class="form-control @error("total") is-invalid @enderror"
                            name="total" value='{{ isset($data)?$data->total:old("total") }}'>
                        @error("total")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label>File Resi</label>
                        <div class="custom-file">
                            <input type="file" name="image">
                            
                        </div>
                    </div>
                  
                  
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ route("transaksi.index") }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
