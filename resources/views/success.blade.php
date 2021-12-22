@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="jumbotron bg-success text-center">
            <h1 class="text-white text-center">Berhasil Mendaftar</h1>
            <br>
            <a href="{{route('index')}}" class="btn btn-secondary">Kembali</a>
            <a href="{{route('sertif')}}" class="btn btn-info">Konfirmasi Data Untuk Cetak Sertifikat</a>
        </div>
    </div>
    @endsection