@extends('partial.master') 
@push('style') 
<link rel="stylesheet" href="{{asset('AdminLTE-3.0.5/plugins/datatables-bs4/css/datatables.bootstrap4.min.css')}}"
> @endpush 
@section('title','data cod penjual') 
@section('container')
<div class="card"> 
<div class="card-header"> 
<h3 class="card-title">Data COD</h3> 
<p class="mt-4">untuk pencarian barang bisa menggunakan search real time</p>
</div> <!-- /.card-header --> <div class="card-body"> 
<button type="button" class="btn btn-primary my-3">
    Jumlah Data Cod : <span class="badge badge-primary">{{$cod->count('id')}}</span>
</button>
<table id="example1" class="table table-bordered table-striped"> <thead> 
    <tr> 
        <th scope="col">NO</th> 
        <th scope="col">Alamat Pengantaran</th> 
        <th scope="col">Waktu</th> 
        <th scope="col">Pengiriman</th> 
        <th scope="col">Barang yang di beli</th>
        <th scope="col">Nama Pembeli</th> 
        <th scope="col">Total Belanja</th>
        <th scope="col">Kode Unik</th> 
        <th scope="col">Pemilik Barang</th>
        </tr> 
    </thead> 
    <tbody> 
        @forelse($cod as $key => $d)
            <tr> 
            <td>{{$key+1}}</td> 
            <td>{{$d->alamat}}</td> 
            <td>{{$d->created_at}}</td> 
            <td>{{$d->pengiriman}}</td> 
            <td>{{$d->barangs_id}}</td> 
            <td>{{$d->user->name}}</td> 
            <td>{{number_format($d->totalbelanja)}}</td> 
            <td>{{$d->kode_unik}}</td>
            <td>
                {{$d->baskets_id}}
            {{-- @if ($d->baskets_id == $d->baskets_id) 
            <p>{{Auth::user()->name}}</p>
            @endif --}}
            </td> 
            @empty <td colspan="5">{{"no data"}}</td> 
            @endforelse 
            </tbody> 
        </table> 
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Info Nama Pedagang
        </button>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                @foreach ($baskets as $basket)
                    <p>{{$basket->user->name}} : {{$basket->namabarang}}</p>
                @endforeach
                {{-- @if (Auth::user()->name)
                <p class="text-danger">yes</p>
                @else
                <p>no</p>
                @endif --}}
            </div>
        </div>
    </div>
</div> 
@push('script') 
<script src="{{asset('AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.js')}}"></script> <script src="{{asset('AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script> 
<script> 
$(function () { $("#example1").DataTable(); }); </script> @endpush 
@endsection