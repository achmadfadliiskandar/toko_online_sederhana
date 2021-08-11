@extends('partial.master')
@push('style')
    <link rel="stylesheet" href="{{asset('AdminLTE-3.0.5/plugins/datatables-bs4/css/datatables.bootstrap4.min.css')}}">
@endpush
@section('title','Transaksi Online')
@section('container')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Transaksi Online</h3>
        <p class="mt-4">untuk pencarian barang bisa menggunakan search real time</p>
    </div>
    <!-- /.card-header -->
    <div class="container">
        <button type="button" class="btn btn-primary my-3">
            Jumlah Data Cod : <span class="badge badge-primary">{{$transaksionlines->count('id')}}</span>
        </button>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Barang yang di belanjakan</th>
            <th scope="col">Pemilik Barang</th>
            <th scope="col">Kartu</th>
            <th scope="col">Bukti</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama</th>
            <th scope="col">Pengiriman</th>
            {{-- <th scope="col">Kode Unik</th> --}}
            <th scope="col">Alamat Pengiriman</th>
            <th scope="col">Total bayar</th>
            {{-- <th scope="col">Barang</th> --}}
        </tr>
        </thead>
        <tbody>
            @forelse ($transaksionlines as $saksi)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$saksi->barangs_id}}</td>
                <td>{{$saksi->baskets_id}}</td>
                <td>{{$saksi->kartu}}</td>
                <td><img src="/image/{{$saksi->bukti}}" alt="gambar" width="100"></td>
                <td>{{$saksi->created_at}}</td> 
                <td>{{$saksi->user->name}}</td> 
                <td>{{$saksi->pengiriman}}</td>
                {{-- <td>{{$saksi->kode_unik}}</td> --}}
                <td>{{$saksi->alamatpengiriman}}</td> 
                <td>{{number_format($saksi->totalbelanja)}}</td>
                {{-- <td>{{$saksi->barang}}</td> --}}
            </tr>
            @empty
            <td colspan="9" class="text-center">Anda belum pernah Pembayaran Online</td>
            <tr>
            @endforelse
        </tbody>
        </table>
    </div>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Info Nama Pedagang
        </button>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                @foreach ($baskets as $basket)
                    <p>{{$basket->user->name}} : {{$basket->namabarang}}</p>
                @endforeach
                {{-- @if (Auth::user()->name == true)
                <p>{{$basket->user->name}}</p>
                @else
                <p class="text-danger">Pedagang Aktif : {{$basket->user->name}}</p>
                @endif --}}
            </div>
        </div>
    <!-- /.card-body -->
    </div>

    @push('script')
    <script src="{{asset('AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
    $(function () {
        $("#example1").DataTable();
    });
    </script>
    @endpush
    @endsection