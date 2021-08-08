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
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
        <div class="row">
          <div class="col-md-12 mb-3">
            <form method="POST" action="/cod/store">
                @csrf
                <div class="form-group" style="display: none;">
                <label for="barangs_id">Barang<sup>2</sup> yang di belanjakan</label>
                <input type="text" class="form-control" style="display: none;" name="barangs_id" readonly  value="@foreach ($barangs as $barang){{$barang->baskets->namabarang}} : {{number_format($barang->baskets->hargabarang)}} * {{$barang->stok}} = {{number_format($barang->totalharga)}}
                @endforeach">
                </div>
                <div class="form-group">
                <label for="telpon" class="d-inline">No Telpon</label>
                <input type="number" class="form-control" id="telpon" name="telpon">
                {{-- <small>untuk mengetahui alamat jika Pengantaran terhambat</small> --}}
                </div>
                <div class="form-group">
                <label for="alamat" class="d-inline">Alamat Pengantaran</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                {{-- <div class="form-group">
                    <label for="barangs_id">Barang</label>
                    <select class="form-control" id="barangs_id" name="barangs_id">
                    @foreach ($barangs as $barang)
                    <option value="{{$barang->id}}">{{$barang->baskets->namabarang}}</option>
                    @endforeach
                    </select>
                </div> --}}
                <div class="form-group">
                    <label for="pengiriman">Pengiriman</label>
                    <select class="form-control" id="pengiriman" name="pengiriman">
                    {{-- <option>Gojek</option> --}}
                    <option>LOREM IPSUM EXPRESS</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="totalbelanja" class="d-inline">total belanja</label>
                    <input type="text" class="form-control" id="totalbelanja" name="totalbelanja" value="{{ number_format($basket = Auth::user()->barangs->sum('totalharga'))}}" readonly>
                    </div>
            </form>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn btn-block">Bayar Sekarang!!</button>
      </form>
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