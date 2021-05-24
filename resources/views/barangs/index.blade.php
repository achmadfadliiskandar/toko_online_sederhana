@extends('layout.main')

@section('title','Barang')

@section('container')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h1 class="mt-5 pt-5 text-center">Barang</h1>
<a href="/barangs/create" class="btn btn-primary my-3">Beli</a>    
    <table class="table table-bordered">
        <thead>
        <tr>
            {{-- <th scope="col">Kode Barang</th> --}}
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Jumlah Beli</th>
            <th scope="col">Total Harga</th>
            {{-- <th scope="col">Keterangan</th> --}}
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($barangs as $barang)
        <tr>
            {{-- <th scope="col">{{$barang->id_baskets}}</th> --}}
            <td>{{$barang->baskets->namabarang}}</td>
            <td>{{number_format($barang->baskets->hargabarang)}}</td>
            <td>{{$barang->stok}}</td>
            <td>{{number_format($barang->totalharga)}}</td>
            {{-- @if (($barang->totalharga) < 1)
                <p>masih ada yang kosong {{"tolong edit  totalharganya"}} di {{$barang->baskets->namabarang}}</p>
            @else
            <p>sudah tidak kosong di namabarangnya {{$barang->baskets->namabarang}} {{"makasih"}}</p>
            @endif --}}
            {{-- <td>{{$barang->keteranganbrg}}</td> --}}
            <td>
            <a href="/barangs/{{ $barang->id}}/edit" class="btn btn-success">Edit</a>
            <form action="/barangs/{{$barang->id}}" method="post" class="d-inline" onsubmit="return confirm('yakin ingin di hapus')">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger d-block">Hapus</button>
            </form>
            </td>
        </tr>
        {{-- @if (($barang->totalharga) < 1)
        <td colspan=8>
            {{"lengkapi dulu"}} yang di {{$barang->baskets->namabarang}}
        </td>
    @else
    {{"klik yang mana saja"}}
    <a href='/pembayaran' class='btn btn-success btn-block'>Lanjut Pembayaran</a>
    <td colspan="8">
    </td>
    @endif --}}
        @empty
        <div class="alert alert-danger">Nggak ada Barang yang di belanjakan</div>
    @endforelse
    <tr>
        <td colspan="7" class="text-center">Total : {{ number_format($basket = Auth::user()->barangs->sum('totalharga'))}}</td>
    </tr>
        </tbody>
    </table>
    @php
    $barangs = Auth::user()->barangs->count('id');
    if($barangs < 1){
        echo "silahkan beli";
    }
    else {
        echo "<a href='/pembayaran' class='btn btn-success'>Lanjut Pembayaran</a>";
    }
    @endphp
</div>
</div>
</div>
@endsection