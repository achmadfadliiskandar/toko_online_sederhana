@extends('layout.main')

@section('title','Form pelunasan transaksi')
    
@section('container')
<div class="container">
    <h1 class="text-center mt-5 pt-3">Form pelunasan transaksi</h1>
    <p class="text-center">Silahkan Melakukan kembali Transaksi di sini transaksi ke no rekening : 12345678 di status</p>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $message }}</strong>
</div>
@endif
    <form method="POST" action="/transaksionline/update/{{$transaksionline->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="kartu">Kartu</label>
        <input type="text" class="form-control" id="kartu" name="kartu" value="{{$transaksionline->kartu}}" readonly>
        </div>
        <div class="form-group">
        <label for="pengiriman">Pengiriman</label>
        <select class="form-control" id="pengiriman" name="pengiriman">
        {{-- <option>Gojek</option>
        <option>Grab</option> --}}
        <option>LOREM IPSUM EXPRESS</option>
        </select>
        </div>
        <div class="form-group">
        <label for="alamatpengiriman">Alamat Pengiriman</label>
        <input type="text" class="form-control" id="alamatpengiriman" name="alamatpengiriman" value="{{$transaksionline->alamatpengiriman}}" readonly>
        </div> 
        <div class="form-group">
        <label for="status">isikan kembali no rekening</label>
        <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{$transaksionline->status}}">
        <small>copykan no rekening di atas yang 12345678 untuk pelunasan</small>
        </div> 
        <div class="form-group">
        <label for="totalbelanja">Total Belanja</label>
        <input type="text" class="form-control" id="totalbelanja" name="totalbelanja" value="{{$transaksionline->totalbelanja}}" readonly>
        </div>  
        <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
    </form>
</div>
@endsection