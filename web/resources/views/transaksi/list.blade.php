@extends('main')

@section('title','List Transaksi')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6">
                    <h1>Transaksi</h1>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Transaksi</li>
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
                <h3 class="card-title">List Transaksi</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="{{ route("transaksi.create") }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Wisata</th>
                            <th>Tanggal</th>
                            <th>Nama Pelanggan</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th colspan=3>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration + (10*($data->currentPage()-1)) }}</td>
                            <td><a href="{{ route("transaksi.detail",$item->id) }}">{{ $item->wisata->nama }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->pelanggan->nama }}</td>
                            <td>{{ $item->total }}</td>
                            <td><div class="badge badge-pill
                                {{ $item->status==1?"badge-success":"badge-danger" }}
                                p-2">{{ $item->status==1?"Selesai":"Belum Selesai" }}</div></td>
                                <td><a href="{{ route('transaksi.selesai',[$item->id]) }}" class="btn btn-warning btn-block">Selesai</a></td>
                            <td>
                                <a href="{{ route("transaksi.show",[$item->id]) }}" class="btn btn-warning btn-block btn-block"><i class="fa fa-pencil-alt"></i>
                                    Rubah</a>
                            </td>
                            <td>
                                <form action="{{ route("transaksi.destroy",[$item->id]) }}" method="POST">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-block">
                                        <i class="fa fa-trash"></i> Hapus
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
