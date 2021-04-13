@extends('layout.main')

@section('title','About')

@section('container')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid mt-4">
      <div class="container">
        <h1 class="display-4 text-center">LOREM IPSUM</h1>
      </div>
    </div>
    <!-- AKHIR JUMBOTRON -->


    <!-- about -->
    <section id="about" class="about">
      <h2 class="text-center">about</h2>
      <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum blanditiis consectetur voluptatem est doloribus veritatis aspernatur illum eum, architecto, numquam minus iure. Odio molestiae esse quam expedita animi itaque aliquam.</p>
        </div>
        <div class="col-sm-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi enim dolore cum id facere error odio et, iure inventore nihil quisquam natus. Aperiam saepe nobis, optio ipsum esse id?</p>
        </div>
      </div>
      </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0441132235205!2d106.81127731449492!3d-6.388309264261956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e956e7cc3995%3A0xc689f1e5845e1d01!2sJl.%20Kopo%2C%20Beji%2C%20Kecamatan%20Beji%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1600580996464!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;width:100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
    <!-- akhir about -->

    <!-- faq -->
    <h2 class="text-center">Faq</h2>
    <div class="container">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              apakah barang2 di toko ini praktis semua
            </button>
          </h2>
        </div>
    
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, aliquid nemo recusandae autem, architecto magnam, minus pariatur necessitatibus numquam tempora officia voluptates reprehenderit eum quo! Alias molestias optio magnam dolores?
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              apakah harga nya terjangkau
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime magnam quisquam quidem non tempore recusandae hic culpa! Quidem a quam, minima quia magnam sequi. Nemo commodi ipsam quo quae voluptate!
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              barang2 apa saja yang ada di toko ini
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugiat natus ducimus reprehenderit nostrum dolor vitae, sapiente, omnis vel eius maiores quisquam, modi recusandae impedit deserunt. Quo consequuntur repellendus sunt.
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- akhir faq -->

    <!-- contact -->
    <h2 class="text-center">CONTACT</h2>
    <div class="container">
    <div class="row mt-4 text-center">
      <div class="col-md-4">
     <img src="https://images.bisnis-cdn.com/thumb/posts/2020/09/15/1291989/instagram.jpg?w=600&h=400" alt="ig" width="100">
     <p><a href="https://www.instagram.com/17achmadfadliiskandar/" class="btn btn-dark">Follow My Instagram</a></p>
      </div>
      <div class="col-md-4">
   <img src="https://assets.jalantikus.com/assets/cache/0/0/apps/2020/02/20/youtube-logo-6cd54.jpg" alt="yt" width="70">
   <p><a href="https://www.youtube.com/results?search_query=achmad+fadli+iskandar" class="btn btn-danger">Subscribe My Youtube</a></p>
      </div>
      <div class="col-md-4">
     <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/update-whatsapp1.jpg" alt="wa" width="130">
     <p><a href="https://api.whatsapp.com/send?phone=6287744455279&text=namaachmad" class="btn btn-success">Contact Me in Whatsapp</a></p>
      </div>
    </div>
  </div>
    <!-- end contact -->
    
@endsection