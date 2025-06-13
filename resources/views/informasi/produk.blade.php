<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SentrySafe | Produk</title>
    <link rel="shortcut icon" href="../assets/img/logo-title.png">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="bg-soft-primary">
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
                                    <a hr{{  }}{{ route('login') }}" class="fs-16 btn btn-sm btn-primary rounded-pill">Masuk</a>
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

            <section class="video-wrapper bg-overlay bg-overlay-gradient px-0 mt-0 min-vh-55">
                <video poster="../assets/img/photos/movie.jpg" src="../assets/media/movie.mp4" autoplay loop playsinline muted></video>
                <div class="video-content">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 col-xl-6 text-center text-white mx-auto">
                                <h1 class="display-1 fs-33 text-white mb-5"><span class="rotator-zoom">Perlindungan Optimal, Ketentraman Jiwa, Layanan Istimewa</span></h1>
                                <p class="lead fs-18 mb-0 mx-xxl-8">Kami adalah agen asuransi yang menawarkan perlindungan untuk kesehatan, jiwa, kendaraan, properti, dan perjalanan.</p>
                            </div>
                            <!-- /column -->
                        </div>
                    </div>
                    <!-- /.video-content -->
                </div>
                <!-- /.content-overlay -->
            </section>
            <!-- /section -->
            <section class="wrapper bg-light">
                <div class="container py-15 py-md-14">
                    <div class="row text-center mb-10">
                        <div class="col-md-10 col-lg-9 col-xxl-8 mx-auto">
                            <h1 class="fs-20 text-uppercase text-primary text-center">Asuransi Unggulan</h1>
                            <h4 class="fs-30 display-3 px-xl-8 mb-0">Kami Menawarkan Berbagai Pilihan Perlindungan Yang Fleksibel Untuk Melindungi Apa Yang Paling Penting Bagi Anda</h4>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="row gx-lg-0 gy-10 mb-15 mb-md-11 align-items-center">
                        <div style="margin-left: 50px;" class="col-lg-6">
                            <figure class="rounded mb-0"><img class="img-fluid-1" src="../assets/img/illustrations/askes.jpg" srcset="../assets/img/illustrations/askes.jpg 2x" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-5 ms-auto">
                            <h3 class="fs-28 mb-3">Asuransi Kesehatan</h3>
                            <p>Asuransi kesehatan melindungi Anda dari biaya medis tak terduga, memastikan akses ke perawatan dan pengobatan yang diperlukan seperti</p>
                            <ul class="icon-list bullet-bg bullet-soft-primary">
                                <li><span><i class="uil uil-check"></i></span><span>Berbagai Penyakit.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Cacat Fisik.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Kematian.</span></li>
                            </ul>
                            <a href="#" class="btn btn-soft-primary rounded-pill mt-2 mb-0">Selengkapnya</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <div class="row gx-lg-0 gy-10 mb-15 mb-md-11 align-items-center">
                        <div class="col-lg-6 order-lg-2 ms-auto">
                            <figure class="rounded mb-0"><img class="img-fluid-1" src="../assets/img/illustrations/asken.jpg" srcset="../assets/img/illustrations/asken.jpg 2x" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div style="margin-left: 50px;" class="col-lg-5">
                            <h3 class="fs-28 mb-3">Asuransi Kendaraan</h3>
                            <p>Asuransi kendaraan melindungi Anda dari kerugian finansial akibat kerusakan atau kehilangan kendaraan, memastikan perlindungan dan perbaikan yang diperlukan saat menghadapi risiko di jalan.</p>
                            <ul class="icon-list bullet-bg bullet-soft-primary">
                                <li><span><i class="uil uil-check"></i></span><span>Kerusakan Ringan.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Kerusakan Sedang.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Kerusakan Berat.</span></li>
                            </ul>
                            <a href="#" class="btn btn-soft-primary rounded-pill mt-2 mb-0">Selengkapnya</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <div class="row gx-lg-0 gy-10 align-items-center">
                        <div class="col-lg-6">
                            <figure style="width: 80%; height: 80%;" class="rounded mb-0"><img style="margin-left: 50px;" class="img-fluid-1" src="../assets/img/illustrations/aspen.png" srcset="../assets/img/illustrations/aspen.png 2x" alt="" /></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-5 ms-auto">
                            <h3 class="fs-28 mb-3">Asuransi Pendidikan</h3>
                            <p>Asuransi pendidikan memastikan dana pendidikan anak terjamin, memberikan perlindungan finansial dan ketenangan pikiran untuk masa depan mereka.</p>
                            <ul class="icon-list bullet-bg bullet-soft-primary">
                                <li><span><i class="uil uil-check"></i></span><span>Dana Pendidikan Terjamin.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Perlindungan Finansial.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Bonus dan Manfaat Tambahan.</span></li>
                            </ul>
                            <a href="#" class="btn btn-soft-primary rounded-pill mt-2 mb-0">Selengkapnya</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.container -->
            </section>

            <section class="wrapper bg-light">
                <div class="container py-14 py-md-10">
                    <div class="row">
                        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                            <h2 class="fs-25 text-uppercase text-primary text-center">Asuransi Lainnya</h2>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="position-relative">
                        <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
                        <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item-inner">
                                            <article>
                                                <div class="card">
                                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                                        <a href="#"> <img src="../assets/img/illustrations/asjiw.jpg" alt="" /></a>
                                                    </figure>
                                                    <div class="card-body">
                                                        <div class="post-header">
                                                            <!-- /.post-category -->
                                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="">Asuransi Jiwa</a></h2>
                                                        </div>
                                                        <!-- /.post-header -->
                                                        <div class="post-content">
                                                            <p>Memberikan manfaat finansial kepada ahli waris jika terjadi kematian........</p>
                                                        </div>
                                                        <!-- /.post-content -->
                                                    </div>
                                                    <!--/.card-body -->
                                                    <div class="card-footer">
                                                        <ul class="post-meta d-flex mb-0">
                                                            <a href="#" class="more hover btn-soft-primary rounded-pill mt-2 mb-0">Selengkapnya</a>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.card-footer -->
                                                </div>
                                                <!-- /.card -->
                                            </article>
                                            <!-- /article -->
                                        </div>
                                        <!-- /.item-inner -->
                                    </div>
                                    <!--/.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="item-inner">
                                            <article>
                                                <div class="card">
                                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                                        <a href="#"> <img src="../assets/img/illustrations/aspro.jpg" alt="" /></a>
                                                    </figure>
                                                    <div class="card-body">
                                                        <div class="post-header">
                                                            <!-- /.post-category -->
                                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Asuransi Properti</a></h2>
                                                        </div>
                                                        <!-- /.post-header -->
                                                        <div class="post-content">
                                                            <p>Menyediakan perlindungan terhadap kerusakan properti seperti rumah........</p>
                                                        </div>
                                                        <!-- /.post-content -->
                                                    </div>
                                                    <!--/.card-body -->
                                                    <div class="card-footer">
                                                        <ul class="post-meta d-flex mb-0">
                                                            <a href="#" class="more hover btn-soft-primary rounded-pill mt-2 mb-0">Selengkapnya</a>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.card-footer -->
                                                </div>
                                                <!-- /.card -->
                                            </article>
                                            <!-- /article -->
                                        </div>
                                        <!-- /.item-inner -->
                                    </div>
                                    <!--/.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="item-inner">
                                            <article>
                                                <div class="card">
                                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                                        <a href="#"> <img src="../assets/img/illustrations/asper.png" alt="" /></a>
                                                    </figure>
                                                    <div class="card-body">
                                                        <div class="post-header">
                                                            <!-- /.post-category -->
                                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Asuransi Perjalanan</a></h2>
                                                        </div>
                                                        <!-- /.post-header -->
                                                        <div class="post-content">
                                                            <p>Asuransi Perjalanan memberikan perlindungan selama perjalanan............</p>
                                                        </div>
                                                        <!-- /.post-content -->
                                                    </div>
                                                    <!--/.card-body -->
                                                    <div class="card-footer">
                                                        <ul class="post-meta d-flex mb-0">
                                                            <a href="#" class="more hover btn-soft-primary rounded-pill mt-2 mb-0">Selengkapnya</a>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.card-footer -->
                                                </div>
                                                <!-- /.card -->
                                            </article>
                                            <!-- /article -->
                                        </div>
                                        <!-- /.item-inner -->
                                    </div>
                                    <!--/.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="item-inner">
                                            <article>
                                                <div class="card">
                                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                                        <a href="#"> <img src="../assets/img/illustrations/askeb.png" alt="" /></a>
                                                    </figure>
                                                    <div class="card-body">
                                                        <div class="post-header">
                                                            <!-- /.post-category -->
                                                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Asuransi Kebakaran</a></h2>
                                                        </div>
                                                        <!-- /.post-header -->
                                                        <div class="post-content">
                                                            <p>Asuransi Kebakaran melindungi properti dari kerugian akibat kebakaran.........</p>
                                                        </div>
                                                        <!-- /.post-content -->
                                                    </div>
                                                    <!--/.card-body -->
                                                    <div class="card-footer">
                                                        <ul class="post-meta d-flex mb-0">
                                                            <a href="#" class="more hover btn-soft-primary rounded-pill mt-2 mb-0">Selengkapnya</a>
                                                        </ul>
                                                        <!-- /.post-meta -->
                                                    </div>
                                                    <!-- /.card-footer -->
                                                </div>
                                                <!-- /.card -->
                                            </article>
                                            <!-- /article -->
                                        </div>
                                        <!-- /.item-inner -->
                                    </div>
                                    <!--/.swiper-slide -->
                                </div>
                                <!--/.swiper-wrapper -->
                            </div>
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                    </div>
                    <!-- /.position-relative -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->
            <!-- /section -->
            <section class="wrapper bg-light">
                <div class="container py-15 py-md-8">
                    <div class="row text-center">
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <div class="row text-center mt-10">
                        <div class="col-lg-10 mx-auto">
                            <h3 class="display-3 text-center fs-34 px-xl-10 px-xxl-15 mb-10">Dapatkan Informasi Lengkap Mengenai Pendaftaran Asuransi.</h3>
                            <div class="row gx-lg-8 gx-xl-12 process-wrapper arrow text-center">
                                <div class="col-md-4"> <img src="../assets/img/icons/solid/choice.png" class="svg-inject icon-svg icon-svg-sm solid-duo text-purple-pink mb-4" alt="" />
                                    <h3 class="fs-22">1. Pilih Asuransinya</h3>
                                    <p>Pilih Asuransi Yang Tepat Untuk Kebutuhan Anda.</p>
                                </div>
                                <!--/column -->
                                <div class="col-md-4"> <img src="../assets/img/icons/solid/exam.png" class="svg-inject icon-svg icon-svg-sm solid-duo text-purple-pink mb-4" alt="" />
                                    <h3 class="fs-22">2. Daftar Sekarang</h3>
                                    <p>Daftar Sekarang Untuk Mulai Mendapatkan Perlindungan.</p>
                                </div>
                                <!--/column -->
                                <div class="col-md-4"> <img src="../assets/img/icons/solid/gift.png" class="svg-inject icon-svg icon-svg-sm solid-duo text-purple-pink mb-4" alt="" />
                                    <h3 class="fs-22">3. Nikmati Manfaatnya</h3>
                                    <p>Gunakan Dan Nikmati Manfaat Dari Asuransi Anda.</p>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->

            <!-- /section -->
        </div>
        <!-- /.content-wrapper -->
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
                                SentrySafe adalah perusahaan asuransi yang berbasis di Indonesia. Didirikan pada tahun 2024, SentrySafe menyediakan berbagai produk asuransi, termasuk asuransi properti, kecelakaan, kendaraan bermotor, dan asuransi jiwa.</p>                            </div>
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
    <!-- /.page-frame -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>
