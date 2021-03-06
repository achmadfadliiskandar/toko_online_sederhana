@extends('layout.main')

@section('title','History Cash On Delivery')
    
@section('container')
<div class="container">
    <h1 class="text-center mt-5 pt-5">History Cod</h1>
    {{-- <p class="text-center">Belanja Online Bayar Dirumah</p> --}}
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Barang yang di beli</th>
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Jumlah Beli</th>
            <th scope="col">Total Belanja</th>
        </tr>
        @foreach ($cod as $d)
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$d->baskets->namabarang}}</td>
            <td>{{$d->user->name}}</td>
            <td>{{number_format($d->baskets->hargabarang)}}</td>
            <td>{{$d->stok}}</td>
            <td>{{number_format($d->totalbelanja)}}</td>
        </tr>
        @endforeach
        @forelse ($cod as $d)
        </tbody>
        @empty
        <td colspan="8" class="text-center text-danger">Anda Belum Pernah Belanja</td>  
        @endforelse
    </table>
    @if ($d == NULL)
        <div class="alert alert-warning mb-5">Anda Belum Pernah Belanja</div>
    @else
    <div class="alert alert-secondary">total belanja tertinggi anda : {{number_format(Auth::user()->cod->max("totalbelanja"))}}</div>
    <div class="alert alert-danger">total belanja terendah anda : {{number_format(Auth::user()->cod->min("totalbelanja"))}}</div>
    @endif
    </div>
</div>
@endsection