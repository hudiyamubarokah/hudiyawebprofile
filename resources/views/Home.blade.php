<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portofolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
  /* Custom CSS for navbar */
  /* Navbar */
  .navbar-custom {
    background-color: #00AAA6;
  }

  /* Brand */
  .navbar-custom .navbar-brand {
    color: #000000;
    font-weight: bold;
  }

  /* Toggler Icon */
  .navbar-custom .navbar-toggler-icon {
    background-color: #00AAA6;
  }

  /* Links */
  .navbar-custom .navbar-nav .nav-link {
    color: #000000;
  }

  /* Active Link */
  .navbar-custom .navbar-nav .nav-link.active {
    font-weight: bold;
  }

  /* Login Button */
  .navbar-custom .btn-login {
    background-color: #F1F1E6;
    color: #000000;
  }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid px-5">
    <a class="navbar-brand" href="#">HM</a>
    <div class="d-flex justify-content-end ">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" style="background-color: #00AAA6;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title " id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav pe-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#aboutme">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#MYED">My Education</a>
          </li>
        </ul>
        <!-- <button type="button" class="btn btn-sm rounded-pill btn-login" style="width:80px; height:40px;" > Login </button> -->
      </div>
    </div>
    </div>
  </div>
</nav>
@foreach ($users as $item)
<div class="card rounded-bottom">
  <img src="{{ asset('img/hud.jpg') }}"  class="card-img" alt="...">
  <div class="card-img-overlay d-flex justify-content-center align-items-center">
    <div class="text-center pt-5" style="color:#C0FCF8">
    <h1 class="pt-5">Hai, Saya {{ $item->name }}!</h1>
    <h5>SAYA ADALAH SEORANG {{ $item->Professi }} </h5>
    </div>
    
  </div>
</div>


<div id="aboutme" style="background-color: #D6F0EE;">
<h1 class="pt-5 pb-3 text-center">ABOUT ME</h2>
<div class="container px-5 text-center">
        <p class="card-text mx-5 pb-5">{{$item->deskripsi}}</p>
          <a href="{{$item->cv}}" class="btn btn-primary"><button class="btn btn-primary">unduh cv</button></a>

      </div>
</div>
@endforeach
<div id="skill">
<h1 class="pt-5 pb-3 text-center">SKILL</h2>
<div class="container px-5  text-center">
        <p>Dalam perjalanan pendidikan saya, saya telah mengembangkan sejumlah keterampilan yang luas dan bervariasi,
           mulai dari pemrograman, desain grafis, hingga kemampuan analisis data.</p>
           <div class="row row-cols-1 row-cols-md-3 g-4 py-3">
           @foreach ($skill as $item )
  <div class="col">
 
    <div class="card h-100">
      <img src="{{ asset('img/p.jpg') }}" class="card-img-top" height="250" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$item->nama_skill}}</h5>
        <p class="card-text">{{$item->deskripsi}}</p>
      </div>
    </div>
  </div>
  @endforeach
  <!-- <div class="col">
    <div class="card h-100">
      <img src="{{ asset('img/dg.jpg') }}" class="card-img-top" height="250" alt="...">
      <div class="card-body">
        <h5 class="card-title">Desain Grafis</h5>
        Dengan pengalaman yang telah saya miliki, saya memiliki 
          pengetahuan yang cukup mendalam dalam pengembangan web, terutama dalam menggunakan HTML, CSS, PHP, Java, dan Kotlin. 
          Saya juga bisa mengimplementasikan berbagai fitur dengan menggunakan framework Laravel serta Bootstrap, 
          yang memungkinkan saya untuk menciptakan pengalaman pengguna yang responsif dan menarik.
        <p class="card-text">Saya memiliki kemampuan dalam menggunakan beberapa perangkat
          lunak desain grafis seperti Canva dan Figma untuk menciptakan desain aplikasi, 
          desain web, serta asset-asset yang diperlukan. Dengan kemampuan ini, saya mampu 
          menciptakan desain yang estetis dan fungsional untuk berbagai proyek digital. 
          Meskipun saya menyadari bahwa masih terdapat area-area yang perlu ditingkatkan, 
          saya selalu bersemangat untuk terus belajar dan berkembang dalam bidang desain grafis.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('img/ad.jpg') }}" class="card-img-top" height="250" alt="...">
      <div class="card-body">
        <h5 class="card-title">Analisis Data</h5>
        <p class="card-text">Saya memiliki kemampuan dalam menggunakan Microsoft Excel dan SPSS untuk 
          melakukan analisis data yang mendalam. Saya telah menggunakan kedua perangkat lunak ini untuk 
          menyelidiki dan mengekstraksi wawasan dari data yang saya dapatkan. Selain itu, saya juga sedang 
          mempelajari perangkat lunak Power BI, yang akan memperluas kemampuan saya dalam visualisasi data dan 
          pembuatan laporan interaktif.</p>
          
      </div>
    </div> -->
  </div>
</div>
      </div>
</div>
<!-- <div id="MYED" style="background-color: #D6F0EE;">
<h1 class="pt-5 pb-3 text-center">MY EDUCATION</h2>
<div class="container text-center">
        <div class="container text-stars">
  <div class="row g-2">
    <div class="col-6">
      <div class="p-3">
      <h5 class="mb-1">1. SD Negeri 08 Cupak</h5>
      <p class="mb-1">Tahun 2009-2015</p>
      </div>
    </div>
    <div class="col-6">
    <h5 class="mb-1">2. SMPN 2 Gunung Talang</h5>
    <p class="mb-1">Tahun 2015-2018</p>
    </div>
    <div class="col-6">
      <div class="p-3">
      <h5 class="mb-1">3. SMAN 1 Gunung Talang</h5>
      <p class="mb-1">Tahun 2018-2021</p>
      </div>
    </div>
    <div class="col-6">
      <div class="p-3">
      <h5 class="mb-1">4. Universitas Negeri Padang</h5>
      <p class="mb-1">Tahun 2021-Sekarang</p>
      </div>
    </div>
  </div>
</div> -->
        
      </div>
</div>

<div id="contack" >
<h1 class="pt-5 pb-3 text-center">CONTACT</h2>
<div class="container px-5 text-stars">
        <p class="card-text mx-5 pb-5">Jika Anda memiliki pertanyaan atau permintaan informasi, 
          jangan ragu untuk menghubungi saya menggunakan rincian kontak yang tertera. Mari kita saling terhubung !</p>
          <!-- <p style="font-size: 20px;" class="color-base "><i class="fa fa-map-marker "></i>
                    Sawah Gantiang Jorong Pasar Baru, Cupak, Kecamatan Gunung Talang
                </p> -->
                @foreach ($users as $item)
                <p style="font-size: 20px;" class="color-base "><i class="fa fa-map-marker "></i>
                {{ $item->alamat}}
                </p>
                <p style="font-size: 20px;" class="color-base "><i class="fa fa-phone p-md-1"></i>{{ $item->no_telp}}</p>
                <p style="font-size: 20px;" class="color-base "><i class="fa fa-envelope p-md-1"></i>{{ $item->email }}</p>
                @endforeach
      </div>
</div>

<div style="background-color: #00AAA6;">
<h5 class="pt-3 pb-3 text-center">Copyright &copy; hudiyamubarokah</h5>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>