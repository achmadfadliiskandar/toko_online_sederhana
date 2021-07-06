@extends('layout.main')

@section('title',"Konfirmasi pengantaran")

@section('container')
<div class="container">
    @if (session('status'))
    <div class="alert alert-primary">
        {{ session('status') }}
    </div>
@endif
<h2 class="mt-5 pt-5 text-center">Konfirmasi Pengantaran</h2>
<form method="POST" action="/konfirmasi/">
    @csrf
<div class="form-group">    
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" value="Tahap Pengantaran barang" readonly>
</div> 
<div class="form-group">
    <label for="cod_id">Kode Barang yang di belanjakan di cod</label>
    <select class="custom-select" id="cod_id" name="cod_id">
    @forelse ($cod as $cod)
    <option value="{{$cod->id}}">{{$cod->kode_unik}}</option>
    @empty
    <option>{{"tidak ada"}}</option>
    @endforelse
    </select>
</div>
<div class="form-group">
    <label for="transaksionlines_id">Kode Barang yang di transaksi Online</label>
    <select class="custom-select" id="transaksionlines_id" name="transaksionlines_id">
    @forelse ($transaksionlines as $transaksionline)
    <option value="{{$transaksionline->id}}">{{$transaksionline->kode_unik}}</option>
    @empty
    <option>{{"0"}}</option>
    @endforelse
    </select>
</div>
<div class="form-group">
    <label for="pengantaran">Keterangan Pengantaran</label>
    <textarea class="form-control @error('pengantaran') is-invalid @enderror" id="pengantaran" name="pengantaran" rows="7" value="{{old('pengantaran')}}" placeholder="Cth : pengiriman barang nya 3 hari kedepan ya terima kasih"></textarea>
</div>
<button class="btn btn-primary">Konfirmasi Pengantaran sekarang!</button>
</div>
</form>
@endsection