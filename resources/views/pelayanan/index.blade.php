@extends('layout.main')

@section('title','Services')

@section('container')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="jumbotron jumbotron-fluid mt-4 bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1>LOREM IPSUM</h1>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, minima nulla! Quidem rerum possimus corporis nostrum eveniet omnis reprehenderit. Odio nulla est nihil repudiandae deserunt veniam distinctio aperiam ducimus adipisci quisquam expedita voluptates nemo vitae officia omnis, aut soluta odit molestiae non cupiditate. Sed ipsa, quasi, dignissimos facilis cum impedit necessitatibus aliquam dolores consequatur mollitia quidem velit eveniet magnam debitis, soluta excepturi libero optio. Beatae architecto illo soluta ratione ut tempore veritatis! Aperiam, veritatis quia.</p>
      </div>
      <div class="col-sm-6">
        <img src="{{asset('undraw_performance_overview_p9bm.svg')}}" class="w-100" alt="">
      </div>
    </div>
  </div>
</div>
<h1 class="text-center mt-5 pt-5">Services</h1>
<div class="container">
<div class="row text-center">
    <div class="col-md-4">
    <i class="fa fa-calculator" style='font-size:75px'></i>
    <p>penghitungan otomatis</p>
    <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum iusto provident, neque vitae blanditiis fuga dignissimos adipisci unde consectetur accusantium maiores ad quia alias, sequi odio dolores impedit nisi voluptatum</p>
    </div>
    <div class="col-md-4">
    <i class="fa fa-usd" style='font-size:75px'></i>
    <p>sistem pembayaran cod(cash on delivery)</p>
    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, enim nostrum nisi velit ea eos possimus commodi debitis repellat consequatur omnis ratione, harum molestiae error in odio rem dolore deleniti</p>
    </div>
    <div class="col-md-4">
    <i class="fa fa-gear" style="font-size:75px;"></i>
    <p>keamanan belanja</p>
    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae est perspiciatis minima natus asperiores at suscipit numquam accusantium odio, soluta eum commodi facilis, hic ratione aliquid id laboriosam, ipsum</p>
    </div>
  </div>
  </div>
@endsection