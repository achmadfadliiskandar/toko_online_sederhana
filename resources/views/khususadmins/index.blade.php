@extends('partial.master')

@section('title','khusus admin untuk pembelian')

@section('container')
<h1>untuk mengecek sebuah pembelian</h1>
<table class="table table-bordered">
<thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Kode Barang</th>
    <th scope="col">Harga Barang</th>
    <th scope="col">Jumlah Beli</th>
    <th scope="col">Total Harga</th>
    <th scope="col">User Belanja(id)</th>
    <th scope="col">User</th>
    </tr>
</thead>
@forelse ($khususadmins as $khususadmin)
<tbody>
    <th>{{$loop->iteration}}</th>
    <td>{{$khususadmin->id_baskets}}</td>
    <td>{{number_format($khususadmin->hargabarang)}}</td>
    <td>{{$khususadmin->stok}}</td>
    <td>{{number_format($khususadmin->totalharga)}}</td>
    <td>{{$khususadmin->user_id}}</td>
    <td>{{$khususadmin->user->name}}</td>
@empty
    <td>Data nya nggak ada</td>
@endforelse
{{-- <p>{{ number_format($barangs = Auth::user()->khususadmin->sum('totalharga'))}}</p> --}}
{{-- <p>{{ number_format($barangs = Auth::user()->khususadmin->sum('totalharga'))}}</p> --}}
{{-- @php
    $khususadmin = Auth::user()->khususadmins->sum('totalharga');
    echo $khususadmin;
@endphp --}}
    <!-- <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    </tr> -->
</tbody>
</table>
@endsection