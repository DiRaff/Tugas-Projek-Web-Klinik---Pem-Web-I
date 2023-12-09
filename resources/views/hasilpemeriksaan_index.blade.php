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
                                <th>ID Berobat</th>
                                <th>ID Pasien</th>
                                <th>ID Dokter</th>
                                <th>ID Obat</th>
                                <th>Tanggal Berobat</th>
                                <th>Keluhan Pasien</th>
                                <th>Hasil Diagnosa</th>
                                <th>Nama Obat</th>
                                <th>Penatalaksanaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($pemeriksaan as $d)                                                    
                            <tr>
                                <td>{{ $d->ID_Berobat}}</td>
                                <td>{{ $d->ID_Pasien }}</td>
                                <td>{{ $d->ID_Dokter }}</td>
                                <td>{{ $d->ID_Obat}}</td>
                                <td>{{ $d->Tgl_Berobat }}</td>
                                <td>{{ $d->Keluhan_Pasien }}</td>
                                <td>{{ $d->Hasil_Diagnosa }}</td>
                                <td>{{ $d->Nama_Obat }}</td>
                                <td>{{ $d->Penatalaksanaan }}</td>
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