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
                                <th>ID Pasien</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Aksi</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($pasien as $a)                                                    
                            <tr>
                                <td>{{ $a->ID_Pasien }}</td>
                                <td>{{ $a->Nama_Pasien }}</td>
                                <td>{{ $a->Jenkel }}</td>
                                <td>{{ $a->Umur }}</td>
                                <td>{{ $a->Alamat }}</td>
                                <td>{{ $a->No_Telpon }}</td>  
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>                              
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection