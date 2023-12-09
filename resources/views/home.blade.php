@extends('layouts.tqklinik')

@section('mda')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Utama') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                {{ __('Selamat Datang Muhammad Dimas Arianda') }} 
                <br>
                {{ __('Anda telah berhasil Login') }} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
