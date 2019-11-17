@extends('main')

@section('title','List Wisata')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Wisata</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Wisata</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        @if($message= session('info'))
            <div class="alert alert-success">
                <i class="fa fa-info-circle"></i>{{ $message }}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">List Wisata</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="{{ route('wisata.create') }}" class="btn btn-success">
                        <i class="fa fa-plus">Tambah</i>
                    </a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Kendaraan</th>
                            <th>Type Kendaraan</th>
                            <th>Seat</th>
                            <th>Harga</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration + (10*($data->currentPage()-1)) }}</td>
                            <td>{{ $item->kodekendaraan }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->seat }}</td>
                            <td>{{ $item->harga }}</td>
                            <td><a href="{{ route('wisata.show',[$item->id]) }}" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i>Ubah</a></td>
                            <td>
                                <form action="{{ route('wisata.destroy',[$item->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-block">
                                            <i class="fa fa-trash">Hapus</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-right mt-2">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
        
    </section>
</div>
@endsection