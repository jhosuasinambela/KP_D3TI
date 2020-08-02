<?php
use yii\helpers\Url;

/* @var $this yii\web\View */


$this->title = 'Dinas Perizinan';
?>


   <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Scrolling Nav - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <style type="text/css">
    body {
  background: url('https://i.ytimg.com/vi/NiZh-3aEmSo/maxresdefault.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
  </style>

</head>

<body id="page-top">


  <!-- Navigation -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Dinas Perizinan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Profil Perizinan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Info Publik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Daftar Izin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Daftar Akun</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 -->
  
  <div class="container">
    <header>
    <div class="container text-center">
      <h1><h2>Selamat Datang di <b>e-Marsada</b> Tobasa </h1>
      <p class="lead">Dinas Penanaman Modal dan Pelayanan Perizinan Terpadu Satu Pintu</p>

    </div>
  
   </header>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card rounded-circle border-0 shadow my-20">

            <div class="card-body p-10">
                <div class="imagehover">
                  <a href="<?= $url = Url::toRoute(['/ibo-master-satuan-syarat']); ?>">
                    <img src="img/5.png" alt="Avatar" class="image" style="width:200%"></a>
                      <div class="middle">
                        <div class="text">Persyaratan Umum</div>
                      </div>
                    </div>
            </div>
        
          </div>

        </div>
        <div class="col-lg-4">
          <div class="card rounded-circle border-0 shadow my-20">
            <div class="card-body p-10">
              <div class="imagehover">
                <a href="tracking_berkas.html">
                  <img src="img/4.png" alt="Avatar" class="image" style="width:200%"></a>
                      <div class="middle">
                        <div class="text">Tracking Berkas</div>
                      </div>
                    </div>

            </div>
        
          </div>
        </div>
        <div class="col-lg-4"><div class="card rounded-circle border-0 shadow my-20">
            <div class="card-body p-10">
              <div class="imagehover">
                <a href="<?= $url = Url::toRoute(['/ibo-master-pengaduan-online']); ?>">
                  <img src="img/3.png" alt="Avatar" class="image" style="width:200%"></a>
                      <div class="middle">
                        <div class="text">Pengaduan Online</div>
                      </div>
                    </div>

            </div>
        
          </div></div>


  </div>
  <br>
  <br>
  <br>
  <div class="row">
        <div class="col-lg-4">
          <div class="card rounded-circle border-0 shadow my-20">
            <div class="card-body p-10">
                <div class="imagehover">
                  <a href="#">
                  <img src="img/6.png" alt="Avatar" class="image" style="width:200%"></a>
                      <div class="middle">
                        <div class="text">Pengecekan Izin</div>
                      </div>
                    </div>
            </div>
        
          </div>

        </div>
        <div class="col-lg-4">
          <div class="card rounded-circle border-0 shadow my-20">
            <div class="card-body p-10">
              <div class="imagehover">
                <a href="<?= $url = Url::toRoute(['/ibo-landasan-hukum']); ?>">
                  <img src="img/5.png" alt="Avatar" class="image" style="width:200%"></a>
                      <div class="middle">
                        <div class="text">Regulasi</div>
                      </div>
                    </div>

            </div>
        
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card rounded-circle border-0 shadow my-20">
            <div class="card-body p-10">
              <div class="imagehover">
                <a href="<?= $url = Url::toRoute(['/ibo-landasan-hukum']); ?>">
                  <img src="img/1.jpg" alt="Avatar" class="image" style="width:200%"></a>
                      <div class="middle">
                        <div class="text">Regulasi</div>
                      </div>
                    </div>

            </div>
        
          </div>
        </div>



  </div>
  <div style="height: 200px"></div>
</div>

  
  
  <!-- Footer -->
  

</body>

</html>
