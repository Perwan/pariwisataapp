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
       
        @if ($message = session("info"))
        <div class="alert alert-success">
            <i class="fa fa-info-circle"></i> {{ $message }}
        </div>
    @endif
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
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration + (10*($data->currentPage()-1)) }}</td>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->seat }}</td>
                            <td>{{ $item->harga }}</td>
                            <td><a href="{{ route("kendaraan.show",[$item->id]) }}" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> Rubah</a></td>
                            <td>
                                <form action="{{ route("kendaraan.destroy",[$item->id]) }}"
                                    method="POST">
                                    @method("delete")
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-danger btn-block">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
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