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
    <form method="POST" action="/cod">
        @csrf
        <div class="form-group">
        <label for="telpon" class="d-inline">No Telpon</label>
        <input type="number" class="form-control" id="telpon"  name="telpon">
        <small>untuk mengetahui alamat jika Pengantaran terhambat</small>
        </div>
        <div class="form-group">
        <label for="alamat" class="d-inline">Alamat Pengantaran</label>
        <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        {{-- <div class="form-group">
        <label for="barang" class="d-inline">Barang</label>
        <input type="text" class="form-control" id="barang" name="barang">
        <small>pastekan di sini ctrl+v</small>
        </div> --}}
        <div class="form-group">
            <label for="pengiriman">Pengiriman</label>
            <select class="form-control" id="pengiriman" name="pengiriman">
            <option>Gojek</option>
            <option>Grab</option>
            </select>
            </div>
            <div class="form-group">
                <label for="totalbelanja" class="d-inline">total belanja</label>
                <input type="text" class="form-control" id="totalbelanja" name="totalbelanja" value="{{ number_format($basket = Auth::user()->barangs->sum('totalharga'))}}" readonly>
                </div>
        <button type="submit" class="btn btn-primary">Bayar Sekarang!!</button>
    </form>
</div>
@endsection