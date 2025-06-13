<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SentrySafe | Perlindungan Mikro</title>
    <link rel="shortcut icon" href="../../assets/img/logo-title.png">
    <link rel="stylesheet" href="../../assets/css/plugins.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
</head>

<body>
<div class="content-wrapper">
    <header class="wrapper bg-soft-white">
        <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="{{ route('landingpage.index') }}">
                        <img class="ms-n5" src="./assets/img/logo.png" width="100%" alt="" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">SentrySafe</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('landingpage.index') }}">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Layanan</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Servis</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('layanan.servis.perlindunganindividu') }}">Perlindungan Individu</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('layanan.servis.perlindunganmikro') }}">Perlindungan Mikro</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('layanan.servis.perlindungansyariah') }}">Perlindungan Syariah</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('layanan.servis.perlindunganprestige') }}">Perlindungan Prestige</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('layanan.servis.solusikorporat') }}">Solusi Korporat</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('layanan.formulir') }}">Formulir</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Informasi</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('informasi.pengetahuan') }}">Pengetahuan</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('informasi.produk') }}">Produk</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('informasi.promo') }}">Promo</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Informasi Pelanggan</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('informasipelanggan.pelanggan') }}">Pelanggan</a></li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{ route('informasipelanggan.kebijakan') }}">Kebijakan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{ route('informasipelanggan.penagihan') }}">Penagihan</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('informasipelanggan.klaim') }}">Klaim</a></li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('landingpage.hubungikami') }}">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->

                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item d-none d-md-block">
                            <a href="{{ route('login') }}" class="fs-16 btn btn-sm btn-primary rounded-pill">Masuk</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>
</div>

    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="../assets/img/petani.jpg">
        <div class="container py-md-15">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-header">
                        <div class="post-category text-line text-white">
                        <h1 class="display-1 mb-3 text-white">Asuransi Mikro</h1>
                        <p class="lead fs-14">"Segera lindungi diri Anda dan keluarga dengan <span class="underline-3 style-2 blue">Perlindungan Mikro</span> kami yang terjangkau! Dapatkan ketenangan pikiran dengan perlindungan dasar mulai dari sekarang. Daftar hari ini!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="wrapper">
  <div class="container px-10 py-14 py-md-16">
    <div class="row">
      <div class="col-lg-6 col-xl-5 col-xxl-4">
        <h2 class="fs-15 text-uppercase text-muted mb-3">Perlindungan Mikro</h2>
        <h3 class="display-4 mb-7 mt-n2">Jenis Asuransi Yang Kami Tawarkan</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row gx-md-8 gy-8 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/mikro/sehat.png" alt="" />
          <div class="card-body">
            <h4>Asuransi Kesehatan Dasar</h4>
            <p class="mb-3">Jaga kesehatan tanpa khawatir! Dapatkan perlindungan rawat inap yang terjangkau.</p>
            <a href="#" class="more hover link-primary">Pelajari Selengkapnya</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/mikro/jiwa.png" alt="" />
          <div class="card-body">
            <h4>Asuransi Jiwa Berjangka</h4>
            <p class="mb-3">Berikan ketenangan bagi keluarga Anda! Daftar sekarang untuk perlindungan jiwa yang terjangkau dan pastikan mereka tetap aman.</p>
            <a href="#" class="more hover link-primary">Pelajari Selengkapnya</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/mikro/barang.png" alt="" />
          <div class="card-body">
            <h4>Perlindungan Barang Berharga</h4>
            <p class="mb-3">Jangan biarkan kerugian menghancurkan harimu! Amankan barang berharga Anda dari kehilangan.</p>
            <a href="#" class="more hover link-blue">Pelajari Selengkapnya</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/mikro/alam.png" alt="" />
          <div class="card-body">
            <h4>Asuransi Bencana Alam</h4>
            <p class="mb-3">Lindungi properti Anda dari kerusakan akibat bencana alam dengan perlindungan khusus.</p>
            <a href="#" class="more hover link-blue">Pelajari Selengkapnya</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/mikro/bisnis.png" alt="" />
          <div class="card-body">
            <h4>Asuransi Usaha Mikro</h4>
            <p class="mb-3"> Amankan bisnismu dengan perlindungan yang dirancang khusus untuk usaha mikro.</p>
            <a href="#" class="more hover link-primary">Pelajari Selengkapnya</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /.swiper-container -->

<footer class="footer-section">
    <div class="footer-content pt-5 pb-5">
        <div class="row mt-10">
            <div class="col-xl-4 col-lg-4 mb-50">
                <div style="padding-left: 60px;" class="footer-widget">
                    <div class="footer-logo">
                        <a href="{{ route('landingpage.index') }}"><img src="./assets/img/logo.png" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="footer-text mb-7">
                        <p>
                                SentrySafe adalah perusahaan asuransi yang berbasis di Indonesia. Didirikan pada tahun 2024, SentrySafe menyediakan berbagai produk asuransi, termasuk asuransi properti, kecelakaan, kendaraan bermotor, dan asuransi jiwa.</p>                    </div>
                    <div class="footer-social-icon mb-5">
                        <h3 class="fs-20 fw-medium text-white">Sosial Media Kami</h3>
                        <a href="#"><i class="fa-brands fa-facebook fa-xl"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter fa-xl"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram fa-xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                    <div class="footer-widget-heading">
                        <h3>Layanan Kami</h3>
                    </div>
                    <ul>
                        <li><a href="{{ route('layanan.servis.perlindunganindividu') }}">Perlindungan Individu</a></li>
                        <li><a href="{{ route('layanan.servis.perlindunganmikro') }}">Perlindungan Mikro</a></li>
                        <li><a href="{{ route('layanan.servis.solusikorporat') }}">Solusi Korporat</a></li>
                        <li><a href="{{ route('layanan.servis.perlindungansyariah') }}">Perlindungan Syariah</a></li>
                        <li><a href="{{ route('layanan.servis.perlindunganprestige') }}">Perlindungan Prestige</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                <div class="footer-widget mt-5">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt fa-2xs"></i>
                        <div class="cta-text ms-1 mb-5 mt-n3">
                            <h3 class="text-white fw-medium fs-18" style="margin-bottom: 2px;">Temukan Kami</h3>
                            <a class="footer-widget-right fs-16 mt-1 mb-n1" href="">1010 Avenue, sw 54321, chandigarh</a>
                        </div>
                    </div>
                    <div class="single-cta py-3">
                        <i class="fas fa-phone fa-2xs"></i>
                        <div class="cta-text mb-5 mt-n3">
                            <h3 class="text-white fw-medium fs-18" style="margin-bottom: 2px;">Telepon</h3>
                            <a class="footer-widget-right fs-16 mt-1 mb-n1" href="">98765432100</a>
                        </div>
                    </div>
                    <div class="single-cta">
                        <i class="far fa-envelope-open fa-2xs"></i>
                        <div class="cta-text mb-5 mt-n3">
                            <h3 class="text-white fw-medium fs-18" style="margin-bottom: 2px;">E-mail</h3>
                            <a class="footer-widget-right fs-16 mt-1 mb-n1" href="">mail@info.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                    <div class="copyright-text">
                        <p class="text-center">Copyright &copy; 2018, All Right Reserved <a href="">SentrySafe</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    <div class="progress-wrap ">
        <svg class="progress-circle svg-content " width="100% " height="100% " viewBox="-1 -1 102 102 ">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98 " />
        </svg>
    </div>
    <script src="https://kit.fontawesome.com/1bd9aad39c.js " crossorigin="anonymous "></script>
    <script src="../assets/js/plugins.js "></script>
    <script src="../assets/js/theme.js "></script>

</body>

</html>
