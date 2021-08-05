@extends('layout/main')
@section('title','LOREM IPSUM')

@section('container') 
{{-- <div class="container">  --}}
  {{-- awal kesatu 1 --}}
  {{-- <div class="col-sm-9 mt-4 pt-5"> --}}
    <div class="jumbotron jumbotron-fluid mt-5 bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>LOREM IPSUM</h1>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, minima nulla! Quidem rerum possimus corporis nostrum eveniet omnis reprehenderit. Odio nulla est nihil repudiandae deserunt veniam distinctio aperiam ducimus adipisci quisquam expedita voluptates nemo vitae officia omnis, aut soluta odit molestiae non cupiditate. Sed ipsa, quasi, dignissimos facilis cum impedit necessitatibus aliquam dolores consequatur mollitia quidem velit eveniet magnam debitis, soluta excepturi libero optio. Beatae architecto illo soluta ratione ut tempore veritatis! Aperiam, veritatis quia.</p>
          </div>
          <div class="col-sm-6">
            <img src="{{asset('undraw_shopping_app_flsj.svg')}}" class="w-100" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="row mt-5">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/bolasport/medium_10a5f8a93dc054c1f68db9ffa66f415d.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              Bola
            </h4>
            <h5>Rp . 100.000</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
      {{-- akhir kesatu 1 --}}
      {{--  --}}
  </div>
</div>
</div>
@endsection