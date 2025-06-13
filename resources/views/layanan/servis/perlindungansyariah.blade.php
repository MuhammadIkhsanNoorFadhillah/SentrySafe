<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SentrySafe | Perlindungan Syariah</title>
    <link rel="shortcut icon" href="../../assets/img/logo-title.png">
    <link rel="stylesheet" href="../../assets/css/plugins.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/css.css">
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

    <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="../assets/img/masjid2.jpg">
        <div class="container py-md-15">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-header">
                        <h1 class="display-1 mb-3 text-white">Asuransi Syariah</h1>
                        <p class="lead">Asuransi Jiwa Syariah dan Asuransi Kesehatan Syariah Temukan berbagai solusi perlindungan individu untuk memenuhi kebutuhan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container mt-10">
            <div class="row align-items-center mt-5">
                <div class="col-lg-5 d-flex justify-content-center">
                    <div class="bg-light p-3 rounded shadow-sm img-mask mask-2">
                        <img style="width: 330px" src="./assets/img/photos/syariah.jpg" alt="Customer Services Icon" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-7">
                    <article>
                        <h2 class="display-5 mb-4">MENGAPA ASURANSI SYARIAH?</h2>
                        <p class="lead fs-20">
                            Dirancang untuk melindungi kesehatan seluruh keluarga sehingga memberikan ketenangan bagi Anda. Masalah kesehatan dapat timbul kapan saja sementara biaya perawatan kesehatan semakin melambung. Dengan mengaktifkan polis kesehatan <span class="underline-3 style-2 blue">asuransi anda</span>, Anda meminimalkan risiko keuangan yang bisa ditimbulkan oleh biaya medis dan dapat berfokus pada pemulihan kesehatan. Ketahui lebih lanjut tentang produk <span class="underline-3 style-2 blue">asuransi kesehatan</span>.
                        </p>
                    </article>
                </div>
            </div>
        </div>
        <section class="wrapper bg-light">
        <div class="container pt-8 pt-md-17">
            <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
                <div class="col-lg-7 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-1 mb-5">Layanan Asuransi Syariah Terbaik Untuk Anda</h1>
                    <p class="lead fs-20 lh-sm mb-7 px-md-10 px-lg-0">Kami menyediakan berbagai macam produk perlindungan kesehatan internasional yang melindungi Anda dan keluarga dimanapun berada. Dengan SentrySafe, Anda bisa mendapatkan akses ke jaringan rumah sakit rekanan kami di seluruh dunia, dengan perlindungan menyeluruh baik untuk rawat jalan maupun rawat inap tanpa biaya tambahan</p>
                    <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                    </div>
                </div>
            <div class="col-md-8 offset-md-2 col-lg-4 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
                <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
                <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                <figure class="rounded"><img style="width: 90%" src="./assets/img/masjid1.jpg" alt="" /></figure>
            </div>
            <!--/column -->
            <!--/column -->
            </div>
            <!-- /.row -->
        </section>

<section class="wrapper">
  <div class="container px-10 py-14 py-md-8">
    <div class="row">
      <div class="col-lg-6 col-xl-5 col-xxl-4">
        <h2 class="fs-15 text-uppercase text-muted mb-3">Perlindungan Syariah</h2>
        <h3 class="display-4 mb-7 mt-n2">Jenis Asuransi Yang Kami Tawarkan</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row gx-md-8 gy-8 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/syariah/jiwa.png" alt="" />
          <div class="card-body">
            <h4>Asuransi Jiwa Syariah</h4>
            <p class="mb-3">Perlindungan finansial bagi keluarga peserta, santunan ahli waris tanpa riba sesuai syariah.</p>
            <a href="#" class="more hover link-primary">Pelajari Selengkapnya</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/syariah/bisnis.png" alt="" />
          <div class="card-body">
            <h4>Asuransi Usaha Syariah</h4>
            <p class="mb-3">Perlindungan usaha dari risiko bisnis dengan prinsip saling membantu tanpa riba.</p>
            <a href="#" class="more hover link-primary">Pelajari Selengkapnya</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/syariah/properti.png" alt="" />
          <div class="card-body">
            <h4>Asuransi Properti Syariah</h4>
            <p class="mb-3">Perlindungan kerugian properti akibat bencana alam, kebakaran, atau pencurian.</p>
            <a href="#" class="more hover link-blue">Pelajari Selengkapnya</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/syariah/pendidikan.jpg" alt="" />
          <div class="card-body">
            <h4>Asuransi Pendidikan Syariah</h4>
            <p class="mb-3">Perencanaan dan jaminan biaya pendidikan anak sesuai prinsip syariah tanpa gharar.</p>
            <a href="#" class="more hover link-primary">Pelajari Selengkapnya</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/syariah/sehat.png" alt="" />
          <div class="card-body">
            <h4>Asuransi Kesehatan Syariah</h4>
            <p class="mb-3">Menanggung biaya medis dengan prinsip tolong-menolong tanpa riba.</p>
            <a href="#" class="more hover link-primary">Pelajari Selengkapnya</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="../assets/img/syariah/haji.png" alt="" />
          <div class="card-body">
            <h4>Asuransi Haji dan Umrah Syariah</h4>
            <p class="mb-3">Perlindungan haji atau umrah, termasuk biaya pengobatan dan santunan.</p>
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
                                SentrySafe adalah perusahaan asuransi yang berbasis di Indonesia. Didirikan pada tahun 2024, SentrySafe menyediakan berbagai produk asuransi, termasuk asuransi properti, kecelakaan, kendaraan bermotor, dan asuransi jiwa.</p>                        </div>
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
