@extends('layout.main')

@section('title',"Konfirmasi pengantaran")

@section('container')
<div class="container">
<h2 class="mt-5 pt-5 text-center">Konfirmasi Pengantaran</h2>
<form method="POST" action="/konfirmasi/">
    @csrf
<div class="form-group">    
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" value="Transaksi" readonly>
</div> 
<div class="form-group">
    <label for="pengantaran">Keterangan Pengantaran</label>
    <textarea class="form-control @error('pengantaran') is-invalid @enderror" id="pengantaran" name="pengantaran" rows="7" value="{{old('pengantaran')}}" placeholder="Cth : pengiriman barang nya 3 hari kedepan ya terima kasih"></textarea>
</div>
<button class="btn btn-primary">Konfirmasi Pengantaran sekarang!</button>
</div>
</form>
@endsection