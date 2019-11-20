@extends('main')

@section('title','List History')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>History</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List History</li>
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
                <h3 class="card-title">List History</h3>
            </div>
            <div class="card-body">
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Kode Wisata</th>
                            <th>Nama Wisata</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="text-align:center; border: 1px "><a href="{{ route("history.create") }}" class="btn btn-warning"><i class="fa fa-eye"> View</i></a>
                            </td>
                        </tr>
                        
                    </tbody>
                    <div class="form-group float-right">
           
                        <a href="{{ route("home") }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Home</a>
                    </div>
                </table>
                <div class="float-right mt-2">
                  
                </div>
            </div>
        </div>
        
    </section>
</div>
@endsection