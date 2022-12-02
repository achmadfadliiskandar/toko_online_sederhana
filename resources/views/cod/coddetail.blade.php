@extends('layouts.app')

<title>Detail Pesanan</title>

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h1 class="text-center">Detail Pesanan : {{$cods->created_at}}</h1>
<table class="table table-bordered table table-dark">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Barang</th>
        <th scope="col">Jumlah Barang</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Total Harga</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($cods->coddetails as $item)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->baskets->namabarang}}</td>
        <td>{{number_format($item->baskets->hargabarang)}}</td>
        <td>{{number_format($item->stok)}}</td>
        <td>{{number_format($item->baskets->hargabarang * $item->stok)}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
