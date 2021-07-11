@extends('partial.master') 
@push('style') 
<link rel="stylesheet" href="{{asset('AdminLTE-3.0.5/plugins/datatables-bs4/css/datatables.bootstrap4.min.css')}}"
> @endpush 
@section('title','data cod penjual') 
@section('container')
<div class="card"> 
<div class="card-header"> 
<h3 class="card-title">DataTable with default features</h3> 
</div> <!-- /.card-header --> <div class="card-body"> 
<button type="button" class="btn btn-primary my-3">
    Jumlah Data Cod : <span class="badge badge-primary">{{$cod->count('id')}}</span>
</button>
<table id="example1" class="table table-bordered table-striped"> <thead> 
    <tr> 
        <th scope="col">NO</th> <th scope="col">No Telpon</th> <th scope="col">Alamat Pengantaran</th> 
        <th scope="col">Waktu</th> 
        <th scope="col">Pengiriman</th> 
        <th scope="col">Barang yang di beli</th>
        <th scope="col">Nama Pembeli</th> 
        <th scope="col">Total Belanja</th>
        <th scope="col">Kode Unik</th> 
        </tr> 
    </thead> 
    <tbody> 
        @forelse($cod as $key => $d) <tr> 
            <td>{{$key+1}}</td> 
            <td>{{$d->telpon}}</td> 
            <td>{{$d->alamat}}</td> 
            <td>{{$d->created_at}}</td> 
            <td>{{$d->pengiriman}}</td> 
            <td>{{$d->barangs_id}}</td> <td>{{$d->user->name}}</td> 
            <td>{{$d->totalbelanja}}</td> <td>{{$d->kode_unik}}</td>
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
                @if (Auth::user()->name === "id")
                <p>{{$basket->user->name}}</p>
                @else
                <p class="text-danger"> Pedagang Aktif : {{$basket->user->name}}</p>
                @endif
            </div>
        </div>
    </div>
</div> 
@push('script') 
<script src="{{asset('AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.js')}}"></script> <script src="{{asset('AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script> 
<script> 
$(function () { $("#example1").DataTable(); }); </script> @endpush 
@endsection