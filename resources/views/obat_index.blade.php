@extends('layouts.tqklinik')
@section('mda')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID Obat</th>
                                <th>Nama Obat</th> 
                                <th>Aksi</th>                             
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($obat as $c)                                                    
                            <tr>
                                <td>{{ $c->ID_Obat }}</td>
                                <td>{{ $c->Nama_Obat}}</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection