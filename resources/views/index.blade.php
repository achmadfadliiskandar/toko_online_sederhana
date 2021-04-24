@extends('layout/main')
@section('title','LOREM IPSUM')

@section('container') 
<div class="container">  
<div class="row">
  <div class="col-sm-3 mt-5 pt-5">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Kategori 1</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Kategori 2</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Kategori 3 </a>
    </div>
  </div>

  {{-- awal kesatu 1 --}}
  <div class="col-sm-9 mt-4 pt-5">
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
        </div>
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
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://cf.shopee.co.id/file/ae075dfaf1968abae774334f126fa8a3" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Raket Badminton
                </h4>
                <h5>Rp . 200.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://www.jakartanotebook.com/images/products/80/1217/44120/3/yavck-raket-tenis-carbon-aluminium-alloy-1-pcs-5600-white-49.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Raket Tenis
                </h4>
                <h5>Rp . 150.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://s0.bukalapak.com/img/0859984012/large/bola_tennis___bola_tenis_murah_dunlop_utk_latihan.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Bola Tenis
                </h4>
                <h5>Rp . 50.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://miro.medium.com/max/1186/1*deouGruw5djJO_5L3tsNug.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Kok Badminton
                </h4>
                <h5>Rp . 75.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://ecs7.tokopedia.net/img/cache/700/product-1/2019/3/11/723876/723876_2e261562-f417-4716-aa5b-4a249f96b22c_1000_1000" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                Bola Basket
                </h4>
                <h5>Rp. 125.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- akhir kesatu 1 --}}

      {{-- kedua 2 --}}
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://s1.bukalapak.com/img/1615712093/s-330-330/aHR0cHM6Ly9lY3M3LnRva29wZWRpYS5uZXQvaW1nL2NhY2hlLzcwMC9wcm9k.jpg.webp" class="d-block" style="width: 100%; height:300px;" alt="chocolatos">
            </div>
            <div class="carousel-item">
              <img src="https://cf.shopee.co.id/file/45ac87be1f57240271dd299089d9f0c1" class="d-block" alt="ultramilk" style="width: 100%; height:300px;">
            </div>
            <div class="carousel-item">
              <img src="https://cdn0-production-images-kly.akamaized.net/tkbgp5FpuoITHaaUN4_fFni8gd0=/640x480/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/925297/original/089136200_1436532266-Brownies.jpg" class="d-block" alt="bronies" style="width: 100%; height:300px;">
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
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://s1.bukalapak.com/img/1615712093/s-330-330/aHR0cHM6Ly9lY3M3LnRva29wZWRpYS5uZXQvaW1nL2NhY2hlLzcwMC9wcm9k.jpg.webp" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Chocolatos
                </h4>
                <h5>Rp . 2000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://cf.shopee.co.id/file/45ac87be1f57240271dd299089d9f0c1" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Ultra Milk
                </h4>
                <h5>Rp . 5000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://asset-a.grid.id/crop/0x0:0x0/360x240/photo/2020/06/15/3550626442.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Brownies
                </h4>
                <h5>Rp . 7000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://s3.bukalapak.com/img/3542364925/w-1000/image.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Silver Queen
                </h4>
                <h5>Rp . 12.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://cf.shopee.co.id/file/ce2a913fe522c74831d55bdd050eba32" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Kinder Joy
                </h4>
                <h5>Rp . 10.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://cdn0-production-images-kly.akamaized.net/h3NyckU0Snq4RvnCUvgKNLioPr4=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3127628/original/017766000_1589428267-1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Oreo Supreme
                </h4>
                <h5>Rp . 1000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- akhir kedua 2 --}}

      {{-- awal ke tiga 3 --}}
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/08/03/2477973884.jpg" class="d-block" alt="hape" style="width: 100%; height:300px;">
            </div>
            <div class="carousel-item">
              <img src="https://assets.pikiran-rakyat.com/crop/384x0:1920x1024/x/photo/2020/10/19/478530570.jpg" class="d-block" style="width: 100%; height:300px;" alt="laptop macbook">
            </div>
            <div class="carousel-item">
              <img src="https://s0.bukalapak.com/img/56529953431/w-1000/PROMO_LED_TV_SAMSUNG_43_43RU7100_43_INCH_USB_MOVIE_HDMI_SMAR.jpg" class="d-block" alt="tv samsung" style="width: 100%; height:300px;">
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
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/08/03/2477973884.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Iphone Max 8
                </h4>
                <h5>Rp . 225.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://assets.pikiran-rakyat.com/crop/384x0:1920x1024/x/photo/2020/10/19/478530570.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Macbook
                </h4>
                <h5>Rp . 500.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://cdn.shopify.com/s/files/1/0024/9803/5810/products/386279-Product-1-I_1024x1024.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Tv Samsung 25 inch
                </h4>
                <h5>Rp . 700.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://selular.id/wp-content/uploads/2019/09/playstation-5-1200x720.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Ps 5
                </h4>
                <h5>Rp . 850.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://www.superprof.co.id/blog/wp-content/uploads/2020/02/utama-part-serta-fungsinya-di-komputer-1060x704.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Komputer
                </h4>
                <h5>Rp . 1000.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://i.rtings.com/images/articles/best/mouse/cheap-gaming-mouse/best-cheap-gaming-mouse-medium.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  Mouse
                </h4>
                <h5>Rp . 30.000</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- akhir ke 3 --}}

  </div>
</div>
</div>
@endsection