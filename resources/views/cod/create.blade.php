@extends('layout.main')
@section('title',' Cash On Delivery (COD)')

@section('container')
<div class="container">
<h1 class="text-center mt-5 pt-5">Cash On Delivery (COD)</h1>
<p class="text-center">berikan alamat dan No telpon yang jelas ya!! Dan Benar</p>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if (count($barangs)>=1)
<div class="row">
<div class="col-md-4 order-md-2 mb-4">
<h4 class="d-flex justify-content-between align-items-center mb-3">
<span class="text-muted">Your cart</span>
<span class="badge badge-secondary badge-pill">{{number_format(Auth::user()->barangs->count("id"))}}</span>
</h4>
<ul class="list-group mb-3">
@foreach($barangs as $key => $barang)
<li class="list-group-item d-flex justify-content-between lh-condensed">
<div>
<h6 class="my-0 text-uppercase">{{$barang->baskets->namabarang}}</h6>
<small class="text-muted">Rp {{number_format($barang->baskets->hargabarang)}}</small>
<small class="text-muted"> x {{$barang->stok}}</small>
</div>
<span class="text-muted">Total : {{number_format($barang->totalharga)}}</span>
</li>
@endforeach
<li class="list-group-item d-flex justify-content-between">
<span>Total Harga</span>
<strong>Rp {{number_format(Auth::user()->barangs->sum("totalharga"))}}</strong>
</li>
</ul>
</div>
<div class="col-md-8 order-md-1">
{{-- <div class="row"> --}}
<div class="col-md-12 mb-3">
<form method="POST" action="/cod/store" id="form">
@csrf
<div class="form-group">
<label for="alamat_pengantaran" class="d-inline">Alamat Pengantaran</label>
<input type="text" class="form-control" id="alamat_pengiriman" name="alamat_pengiriman">
</div>
<div class="form-group">
<label for="totalbelanja" class="d-inline">total belanja</label>
<input type="text" class="form-control" id="totalbelanja" name="totalbelanja" value="{{$basket = Auth::user()->barangs->sum('totalharga')}}" readonly>
</div>
<button class="btn btn-secondary my-3 btn btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Detail Pesanan
</button>
<div class="collapse" id="collapseExample">
<div class="form-group">
@foreach ($barangs as $barang)
<label for="barangs_id">Barang<sup>2</sup> yang di belanjakan</label>
<select class="form-control" id="barangs" onclick="munculkan()" name="barangs_id[]">
<option value="{{$barang->id}}">
{{$barang->baskets->namabarang}}        
</option> 
</select>
@endforeach 
</div>

<div class="form-group">
    @foreach ($barangs as $barang)
<label for="hargabeli">harga barang yang dibeli</label>
<select class="form-control" id="hargabeli" onclick="munculkan()" name="hargabeli[]">
<option value="{{$barang->totalharga}}">
{{$barang->totalharga}}        
</option> 
</select>
@endforeach 
</div>

<div class="form-group">
    @foreach ($barangs as $barang)
<label for="stok" class="d-inline">Stok Belanja Anda</label>
<select class="form-control" id="barangs" onclick="munculkan()" name="stok[]">
<option value="{{$barang->stok}}">
{{$barang->stok}}        
</option>
</select>
@endforeach 
</div>

<div class="form-group">
@foreach ($barangs as $barang)
<label for="baskets_id">Pemilik Barang</label>
<select class="form-control" id="baskets" name="baskets_id[]">
<option value="{{$barang->baskets_id}}">
{{$barang->baskets->user->name}}        
</option> 
</select>
@endforeach 
</div>
<div class="form-group">
@foreach ($barangs as $barang)
<label for="status">Status Pembelian</label>
<select class="form-control" id="status" name="status[]">
<option value="Lunas">
Lunas        
</option> 
</select>
@endforeach 
</div>
<button class="btn btn-primary btn btn-block">Submit</button>
</div> 
</div>
</div>
</div>
@else
<script>
alert("silahkan belanja dulu terima kasih",window.location.assign("http://127.0.0.1:8000/barangs"))
</script>
<div class="alert alert-danger">silahkan belanja dulu terima kasih</div>
@endif
</div>
@endsection