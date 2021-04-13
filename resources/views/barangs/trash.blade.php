@extends('partial.master')

@section('title','Data rahasia')

@section('container')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h1 class="mt-5 pt-5 text-center">Data rahasia bertujuan untuk mengetahui user yg membatalkan pembelanjaan nya</h1>
<!-- <a href="/barangs/create" class="btn btn-primary my-3">Beli Sekarang</a>     -->
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Jumlah Beli</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
            <th scope="col">waktu pembatalan</th>
            <th scope="col">User</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($barangs as $barang)
        <tr>
            <th scope="col">{{$barang->id_baskets}}</th>
            <td>{{$barang->namabarang}}</td>
            <td>Harga : {{number_format($barang->hargabarang)}}</td>
            <td>jumlah_beli : {{$barang->stok}}</td>
            <td>Total Harga : {{number_format($barang->totalharga)}}</td>
            <td>{{$barang->keteranganbrg}}</td>
            <td>{{$barang->user->name}}</td>
            <td>
            <a href="/barangs/{{ $barang->id}}/edit" class="btn btn-success">Edit</a>
            <form action="/barangs/{{$barang->id}}" method="post" class="d-inline" onsubmit="return confirm('yakin ingin di hapus')">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger d-block">Hapus</button>
            </form>
            </td>
            <td>{{$barang->deleted_at}}</td>
        </tr>
        @empty
        <div class="alert alert-danger">Nggak ada Barang yang di belanjakan</div>
    @endforelse
    <!-- <tr>
        <td colspan="7" class="text-center">Total : {{ number_format($basket = Auth::user()->barangs->sum('totalharga'))}}</td>
    </tr> -->
        </tbody>
    </table>
    <!-- @php
    $barangs = Auth::user()->barangs->count('id');
    if($barangs < 1){
        echo "silahkan beli";
    }
    else {
        echo "<a href='/pembayaran' class='btn btn-success'>Lanjut Pembayaran</a>";
    }
    @endphp -->
</div>
</div>
</div>
@endsection