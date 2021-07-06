@extends('layout/main')
@section('title','LOREM IPSUM')

@section('container') 
<div class="container">  
{{-- <div class="row">
  <div class="col-sm-12 mt-4 pt-5">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/bolasport/medium_10a5f8a93dc054c1f68db9ffa66f415d.jpg" class="d-block" style="width: 100%; height:300px;" alt="bola">
            </div>
            <div class="carousel-item">
              <img src="https://cf.shopee.co.id/file/ae075dfaf1968abae774334f126fa8a3" class="d-block" style="width: 100%; height:300px;" alt="raket">
            </div>
            <div class="carousel-item">
              <img src="https://www.jakartanotebook.com/images/products/80/1217/44120/3/yavck-raket-tenis-carbon-aluminium-alloy-1-pcs-5600-white-49.jpg" class="d-block" style="width: 100%; height:300px;"  alt="raket tenis">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> --}}
    @section('grid')
@foreach($baskets as $basket)
  <div class="col-md-4 mt-4">
    <div class="card">
      <img src="/images/{{$basket->gambar}}" class="card-img-top" alt="gambar">
      <div class="card-body">
        <h5 class="card-title text-uppercase">{{$basket->namabarang}}</h5>
        <p class="card-text"> Harga : {{ number_format($basket->hargabarang) }}</p>
        <p class="card-text">Kode Barang : {{$basket->id}}</p>
      </div>
    </div>
  </div>
@endforeach
  </div>
</div>
@endsection