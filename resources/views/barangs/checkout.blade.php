@extends('layout.main')

@section('title','Konfirmasi Barang')

@section('container')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h1 class="mt-5 pt-5 text-center">Konfirmasi Barang</h1>
<a href="/barangs/create" class="btn btn-primary my-3">Beli Sekarang</a>    
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Jumlah Beli</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Keterangan</th>
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
            <tfoot>
            <td colspan=8>
            <a href="/barangs/hapus/{{ $barang->id }}" class="btn btn-danger d-block">Konfirmasi semua Barang yg anda pilih</a>
            </td>
            </tfoot>
        </tr>
        @empty
        <div class="alert alert-danger">Nggak ada Barang yang di belanjakan</div>
    @endforelse
    <tr>
        <td colspan="7" class="text-center">Total : {{ number_format($basket = Auth::user()->barangs->sum('totalharga'))}}</td>
    </tr>
        </tbody>
    </table>
    @php
        $barang = Auth::user()->barangs->count('id');
        if($barang == 1){
            echo "konfirmasi barang dulu baru konfirmasi pengantaran barang";
        }
        else{
            echo "<a href='/konfirmasi/create' class='btn btn-info'>Konfirmasi Pengantaran</a>";
        }
    @endphp
</div>
</div>
</div>
@endsection