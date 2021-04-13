@extends('partial.master')

@section('title','Tambah Basket')

@section('container')

<h1 class="mt-5 text-center pt-5">Form Tambah basket</h1>
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/baskets" name="format" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="namabarang" class="d-inline">nama barang</label>
    <select class="form-control" id="namabarang" onclick="munculkan()" name="namabarang">
    <option disabled>Kategori 1</option>
            <option value="bola sepak">Bola sepak</option>
            <option value="raket badminton">Raket Badminton</option>
            <option value="raket tenis">Raket tenis</option>
            <option value="bola tenis">Bola tenis</option>
            <option value="kok badminton">Kok Badminton</option>
            <option value="bola basket">Bola Basket</option>
            <option disabled>Kategori 2</option>
            <option value="chocolatos">Chocolatos</option>
            <option value="ultra milk">Ultra milk</option>
            <option value="brownies">Brownies</option>
            <option value="silver queen">Silver Queen</option>
            <option value="kinder joy">Kinder Joy</option>
            <option value="oreo supreme">Oreo Supreme</option>
            <option disabled>Kategori 3</option>
            <option value="iphone max 8">Iphone max 8</option>
            <option value="macbook">Macbook</option>
            <option value="tv samsung 43 inch">Tv samsung 43 inch</option>
            <option value="ps 5">Ps 5</option>
            <option value="komputer">Komputer</option>
            <option value="mouse">Mouse</option>
        </select>
  </div>
  <div class="form-group">
    <label for="hargabarang" class="d-inline">harga barang</label>
    <input type="number" id="hargabarang" class="form-control @error('hargabarang') is-invalid @enderror" id="hargabarang" name="hargabarang" value="{{old('hargabarang')}}" readonly>
    <div class="invalid-feedback">
    @error('hargabarang')
      {{$message}}
      @enderror
    </div>
  </div>
  {{-- <div class="form-group">
    <label for="jumlah_beli" class="d-inline">jumlah Beli</label>
    <input type="number"  class="form-control @error('jumlah_beli') is-invalid @enderror" id="jumlah_beli" name="jumlah_beli" value="{{old('jumlah_beli')}}" min="1">
    <div class="invalid-feedback">
    @error('jumlah_beli')
      {{$message}}
      @enderror
    </div>
  </div> --}}
  <div class="form-group">
    <label for="stok" class="d-inline">Stok</label>
    <input type="number"  class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{old('stok')}}" readonly>
    <div class="invalid-feedback">
    @error('stok')
      {{$message}}
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan" class="d-inline">keterangan</label>
    <input type="text"  class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{old('keterangan')}}" readonly>
    <div class="invalid-feedback">
    @error('keterangan')
      {{$message}}
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="gambar" class="d-inline">Gambar</label>
    <input type="text" id="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{old('gambar')}}" readonly>
    <div class="invalid-feedback">
    @error('gambar')
      {{$message}}
      @enderror
    </div>
  </div>
  {{-- <div class="form-group">
    <label for="totalharga" class="d-inline">totalharga</label>
    <input type="number" id="totalharga" class="form-control @error('totalharga') is-invalid @enderror" id="totalharga" name="totalharga" value="{{old('totalharga')}}" readonly>
    <div class="invalid-feedback">
    @error('totalharga')
      {{$message}}
      @enderror
    </div>
  </div> --}}
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
<script>
  function munculkan(){
  var namabarang = (document.format.namabarang.value);
  var hargabarang = 0.0;
  var stok = 0.0;
  var keterangan = ""
  var gambar = ""

  if (namabarang == "bola sepak") {
    hargabarang = 100000
    stok = 100
    keterangan = "Sepak bola, secara resmi dikenal sebagai sepak bola asosiasi, adalah cabang olahraga yang menggunakan bola yang umumnya terbuat dari bahan kulit dan dimainkan oleh dua tim yang masing-masing beranggotakan 11 orang pemain inti dan beberapa pemain cadangan dan barang kondisi baru"
    gambar = "bola.jpg"
  }
  else if(namabarang == "raket badminton"){
    hargabarang = 200000
    stok = 100
    keterangan = "Bulu tangkis adalah suatu olahraga yang menggunakan alat yang berbentuk bulat dengan memiliki rongga rongga di bagian pemukulnya. Dan memiliki gagang. Alat ini dikenal dengan nama raket yang dimainkan oleh dua orang atau dua pasangan yang saling berlawanan. dan barang kondisi baru"
    gambar = "badminton.jpg"
  }
  else if(namabarang == "raket tenis"){
    hargabarang = 150000
    stok = 100
    keterangan = "alat yang digunakan untuk bermain tenis dan barang kondisi baru"
    gambar = "rakettenis.jpg"
  }
  else if(namabarang == "bola tenis"){
    hargabarang = 50000
    stok = 100
    keterangan = "alat yang di main kan dalam permainan tenis dan barang kondisi baru"
    gambar = "bolatenis.jpg"
  }
  else if(namabarang == "kok badminton"){
    hargabarang = 75000
    stok = 100
    keterangan = "alat yang di gunakan untuk permainan badminton dan barang kondisi baru"
    gambar = "kokbadminton.jpg"
  }
  else if(namabarang == "bola basket"){
    hargabarang = 125000
    stok = 100
    keterangan = "Bola basket adalah olahraga bola berkelompok yang terdiri atas dua tim beranggotakan masing-masing lima orang yang saling bertanding mencetak poin dengan memasukkan bola ke dalam keranjang lawan. Bola basket dapat di lapangan terbuka, walaupun pertandingan profesional pada umumnya dilakukan di ruang tertutup. dan barang kondisi baru"
    gambar = "bolabasket.jpg"
  }
  else if(namabarang == "chocolatos"){
    hargabarang = 2000
    keterangan = "Chocolatos adalah wafer stick dengan krim cokelat Italia diproduksi oleh PT. Garudafood Putra Putri Jaya yang diluncurkan sejak bulan November 2006. dan barang kondisi baru"
    stok = 100
    gambar = "chocolatos.jpg"
  }
  else if(namabarang == "ultra milk"){
    hargabarang = 5000
    stok = 100
    keterangan = "Ultrajaya Milk merupakan perusahaan multinasional yang memproduksi minuman yang bermarkas di Padalarang, Kab. Bandung Barat, Jawa Barat. Beralamat di Jl. Raya Cimareme 131, Padalarang, Kab. Bandung dan barang kondisi baru"
    gambar = "ultramilk.jpg"
  }
  else if(namabarang == "brownies"){
    hargabarang = 7000
    stok = 100
    keterangan = "Brownies merupakan sebuah makanan yang dipanggang atau dikukus yang berbentuk persegi, datar atau bar dikembangkan di Amerika Serikat pada akhir abad ke-19 dan dipopulerkan di Amerika Serikat dan Kanada pada paruh pertama abad ke-20. dan barang kondisi baru"
    gambar = "brownies.jpg"
  }
  else if(namabarang == "silver queen"){
    hargabarang = 12000
    stok = 100
    keterangan = "Silver Queen adalah salah satu merek cokelat terkenal di Indonesia. Didirikan sejak tahun 1950, perusahaan ini beroperasi dibawah naungan PT Petra Food kerjasama dengan Procter & Gamble di Dunia yang juga mengelola Ceres dan Delfi. Perusahaan berkantor pusat di Indonesia."
    gambar = "silverqueen.jpg"
  }
  else if(namabarang == "kinder joy"){
    hargabarang = 10000
    keterangan = "Kinder Joy atau Kinder Merendero adalah sejenis permen yang dibuat oleh perusahaan makanan manis Italia, Ferrero sebagai bagian dari merek produknya Kinder. dan barang kondisi baru"
    stok = 100
    gambar = "kinderjoy.jpg"
  }
  else if(namabarang == "oreo supreme"){
    hargabarang = 1000
    stok = 100
    keterangan = "Sebenarnya apa sih sebenarnya Oreo Supreme itu? Mengutip dari Fortune, oreo Supreme adalah produk hasil kolaborasi Oreo dengan brand streetwear Supreme. Oreo Supreme yang harganya fantastis ini memang tergolong produk anyar, meluncur ke pasar belum genap sebulan (sejak 26 Maret 2020). dan barang kondisi baru"
    gambar = "oreosupreme.jpg"
  }
  else if(namabarang == "iphone max 8"){
    hargabarang = 225000
    keterangan = "hp iphone terbaru dan kondisi baru"
    stok = 100
    gambar = "iphonemax8.jpg"
  }
  else if(namabarang == "macbook"){
    hargabarang = 500000
    keterangan = "Touch Bar. Touch Bar dengan sensor Touch ID terintegrasi. Warna. Perak; Abu-abu. Layar. Layar Retina; Layar 15,4 inci (diagonal) dengan lampu latar LED dan kondisi baru"
    stok = 100
    gambar = "macbook.jpg"
  }
  else if(namabarang == "tv samsung 43 inch"){
    hargabarang = 700000
    stok = 100
    keterangan = "tv yang berasal dari perusahaan korea yaitu samsung dan kondisi baru"
    gambar = "tvsamsung43inch.jpg"
  }
  else if(namabarang == "ps 5"){
    hargabarang = 850000
    stok = 100
    keterangan = "PlayStation 5 ( PS5), Konsol video game teranyar besutan Sony resmi dijual di Indonesia mulai hari ini, Jumat (22/1/2021). Konsol ini telah diperkenalkan secara global pada November 2020 lalu.  dan kondisi baru"
    gambar = "ps5.jpg"
  }
  else if(namabarang == "komputer"){
    hargabarang = 1000000
    stok = 100
    keterangan = "Komputer adalah alat yang dipakai untuk mengolah data menurut prosedur yang telah dirumuskan. Kata computer pada awalnya dipergunakan untuk menggambarkan orang yang perkerjaannya melakukan perhitungan aritmetika, dengan atau tanpa alat bantu, tetapi arti kata ini kemudian dipindahkan kepada mesin itu sendiri. dan kondisi baru"
    gambar = "komputer.jpg"
  }
  else if(namabarang == "mouse"){
    hargabarang = 30000
    stok = 100
    keterangan = "Tetikus adalah peranti penunjuk yang digunakan untuk memasukkan data dan perintah ke dalam komputer selain papan ketik. Tetikus memperoleh nama demikian karena kabel yang menjulur berbentuk seperti ekor tikus. Tetikus pertama kali dibuat pada tahun 1963 oleh Douglas Engelbart berbahan dasar kayu dengan satu tombol. dan kondisi baru"
    gambar = "mouse.jpg"
  }
  else{
    hargabarang = ""
    hargabarang = i;
    stok = i;
    gambar = ""
  }
  document.format.hargabarang.value = hargabarang
  document.format.gambar.value = gambar
  document.format.stok.value = stok
  document.format.keterangan.value = keterangan
  }
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
  // $(document).ready(function(){
  //   $("#hargabarang, #jumlah_beli").keyup(function(){
  //     var hargabarang = $("#hargabarang").val();
  //     var jumlah_beli = $("#jumlah_beli").val();

  //     var totalharga = parseInt(hargabarang) * parseInt(jumlah_beli);
  //     $("#totalharga").val(totalharga);
  //   });
  // });
</script>
@endsection