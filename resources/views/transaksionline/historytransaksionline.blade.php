@extends('layout.main')

@section('title','Data Transaksi Online')

@section('container')
        <h1 class="text-center mt-5 pt-5">History Transaksi Online</h1>
        <div class="container">
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        {{-- <p class="text-center">
            data yang bertujuan untuk mengetahui user sudah pernah mengirim pembayaran melalui transaksi 
        </p> --}}
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Barang yang di belanjakan</th>
                <th scope="col">Nama</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($transaksionlines as $saksi)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$saksi->barangs_id}}</td>
                    <td>{{$saksi->user->name}}</td> 
                    </tr>
                @empty
                <td colspan="9" class="text-center">Anda belum pernah Pembayaran Online</td>
                <tr>
                @endforelse
            </tbody>  
        </table>
        @if ($saksi == NULL)
        <div class="alert alert-warning">Anda Belum Pernah Belanja</div>
    @else
    <div class="alert alert-secondary">total belanja tertinggi anda : {{$transaksionlines->min("totalbelanja")}}</div>
    <div class="alert alert-danger">total belanja terendah anda : {{$saksi->max("totalbelanja")}}</div>
    @endif
    </div>
@endsection