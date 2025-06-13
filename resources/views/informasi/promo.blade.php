<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SentrySafe | Promo</title>
    <link rel="shortcut icon" href="../assets/img/logo-title.png">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
        <!-- /header -->
        <section class="wrapper bg-light">
            <div class="container pt-10 pt-md-5 pb-14 pb-md-5 text-center">
                <div class="row gx-lg-8 gx-xl-12 gy-10 gy-xl-0 mb-7 align-items-center">
                    <div class="col-lg-5 order-lg-2">
                        <figure><img class="img-auto" src="../assets/img/illustrations/promo.png" srcset="../assets/img/illustrations/promo.png 2x" alt="" /></figure>
                    </div>
                    <!-- /column -->
                    <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-7 text-center text-lg-start">
                        <h1 class="display-1 fs-40 mb-5 mx-md-n5 mx-lg-0 mt-7">Agen Khusus <br class="d-md-none">Asuransi<br class="d-md-none"><span class="rotator-fade text-primary">Kesehatan , Pendidikan, Kendaraan</span></h1>
                        <p class="lead fs-20 mb-7">Kami adalah agen asuransi pemenang penghargaan yang percaya kuat pada kekuatan perlindungan inovatif.</p>
                        <span><a class="btn btn-lg btn-primary rounded-pill me-2" style="font-size: 0.70rem; padding: 0.5rem 0.8rem;" >Dapatkan Promo Asuransi</a></span>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="overflow-hidden">
                <div class="divider text-soft-primary mx-n2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
            <path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
          </svg>
                </div>
            </div>
            <!-- /.overflow-hidden -->
        </section>

        <section>
            <div class="container py-14 py-md-3">
                <div class="row gx-lg-8 gx-xl-12 gy-6 mt-3 mb-14 mb-md-7">
                    <h3 class="display-4 mb-15 mb-md-6 px-lg-15 text-center">Berikut Adalah Alasan Anda Harus Mempunyai Asuransi.</h3>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>

                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="fas fa-hand-holding-usd"></i> </div>
                            </div>
                            <div>
                                <h4>Perlindungan Finansial</h4>
                                <p class="mb-2">Asuransi memberikan perlindungan finansial terhadap risiko tak terduga, seperti kecelakaan, penyakit, atau kerugian materi.</p>
                                <a href="#" class="more hover">Pelajari Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="fas fa-spa"></i> </div>
                            </div>
                            <div>
                                <h4>Ketentraman Pikiran</h4>
                                <p class="mb-2">Memiliki asuransi memberikan rasa ketentraman karena Anda tahu bahwa risiko besar yang dapat mempengaruhi keuangan Anda.</p>
                                <a href="#" class="more hover">Pelajari Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="uil uil-phone-volume"></i> </div>
                            </div>
                            <div>
                                <h4>Biaya Medis Tak Terduga</h4>
                                <p class="mb-2">Biaya medis bisa saja sangat mahal, terutama dalam situasi darurat atau perawatan jangka panjang yang memerlukan spesialis tertentu. </p>
                                <a href="#" class="more hover">Pelajari Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="fas fa-user-shield"></i> </div>
                            </div>
                            <div>
                                <h4>Proteksi untuk Keluarga</h4>
                                <p class="mb-2">Asuransi jiwa dan asuransi kesehatan memberikan perlindungan penuh bagi setiap anggota keluarga Anda yang sangat tercinta.</p>
                                <a href="#" class="more hover">Pelajari Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="uil uil-laptop-cloud"></i> </div>
                            </div>
                            <div>
                                <h4>Pengelolaan Risiko Bisnis</h4>
                                <p class="mb-2">Untuk pemilik bisnis, asuransi membantu melindungi aset dan operasional dari risiko bisnis, seperti kebakaran, pencurian, atau tanggung jawab hukum.</p>
                                <a href="#" class="more hover">Pelajari Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="uil uil-chart-line"></i> </div>
                            </div>
                            <div>
                                <h4>Perencanaan Keuangan Jangka Panjang</h4>
                                <p class="mb-2">Beberapa jenis asuransi, seperti asuransi pensiun, juga berfungsi sebagai instrumen perencanaan keuangan jangka panjang. </p>
                                <a href="#" class="more hover">Pelajari Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
            </div>
        </section>

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-14">
                <div class="row">
                    <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
                        <h2 class="fs-15 text-uppercase text-muted mb-3">Promo Kami</h2>
                        <h3 class="display-4 mb-15 mb-md-6 px-lg-10">Harga terbaik, produk unggulan, dan layanan berkualitas untuk asuransi Anda.</h3>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="pricing-wrapper position-relative">
                    <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
                    <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
                    <div class="pricing-switcher-wrapper switcher">
                        <p class="mb-0 pe-3">Bulanan</p>
                        <div class="pricing-switchers">
                            <div class="pricing-switcher pricing-switcher-active"></div>
                            <div class="pricing-switcher"></div>
                            <div class="switcher-button bg-primary"></div>
                        </div>
                        <p class="mb-0 ps-3">Tahunan</p>
                    </div>
                    <div class="pricing-scroll-wrapper">
                        <div class="row gy-6 mt-3 mt-md-5">
                            <div class="col-md-6 col-lg-4">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <img src="../assets/img/icons/lineal/pendidikan.png" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                        <h4 class="card-title">Asuransi Pendidikan</h4>
                                        <div class="prices text-dark">
                                            <h6 class="card-title price price-show strikethrough">Rp. 250.000/bln</h6>
                                            <h6 class="card-title price price-hide price-hidden strikethrough">Rp.3.000.000/thn</h6>
                                        </div>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">Rp</span><span class="price-value">210.000</span> <span class="price-duration">bln</span></div>
                                            <div class="price price-hide price-hidden"><span class="price-currency">Rp</span><span class="price-value">2.400.000</span> <span class="price-duration">thn</span></div>
                                        </div>
                                        <!--/.prices -->
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span> Dana Pendidikan Terjamin </span></li>
                                            <li><i class="uil uil-check"></i><span> Perlindungan Finansial </span></li>
                                            <li><i class="uil uil-check"></i><span> Manfaat Investasi </span></li>
                                            <li><i class="uil uil-check"></i><span> Perlindungan Komprehensif </span></li>
                                            <li><i class="uil uil-check"></i><span> Bonus Dan Manfaat Tambahan </span></li>
                                        </ul>
                                        <a href="#" class="btn btn-primary rounded-pill">Pilih Asuransi</a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.pricing -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 col-lg-4 popular">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <img src="../assets/img/icons/lineal/aid.png" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                        <h4 class="card-title">Asuransi Kesehatan</h4>
                                        <div class="prices text-dark">
                                            <h6 class="card-title price price-show strikethrough">Rp. 150.000/bln</h6>
                                            <h6 class="card-title price price-hide price-hidden strikethrough">Rp.1.800.000/thn</h6>
                                        </div>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">Rp</span><span class="price-value">120.000</span> <span class="price-duration">bln</span></div>
                                            <div class="price price-hide price-hidden"><span class="price-currency">Rp</span><span class="price-value">1.400.000</span> <span class="price-duration">thn</span></div>
                                        </div>
                                        <!--/.prices -->
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span> Biaya Medis </span></li>
                                            <li><i class="uil uil-check"></i><span> Biaya Obat </span></li>
                                            <li><i class="uil uil-check"></i><span> Rawat Inap, Jalan dan Darurat </span></li>
                                            <li><i class="uil uil-check"></i><span> Perawatan Spesialis</span></li>
                                            <li><i class="uil uil-check"></i><span> Pemeriksaan dan Tes </span></li>
                                        </ul>
                                        <a href="#" class="btn btn-primary rounded-pill">Pilih Asuransi</a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.pricing -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <img src="../assets/img/icons/lineal/car.png" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                        <h4 class="card-title">Asuransi Kendaraan</h4>
                                        <div class="prices text-dark">
                                            <h6 class="card-title price price-show strikethrough">Rp. 200.000/bln</h6>
                                            <h6 class="card-title price price-hide price-hidden strikethrough">Rp.2.400.000/thn</h6>
                                        </div>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">Rp</span><span class="price-value">150.000</span> <span class="price-duration">bln</span></div>
                                            <div class="price price-hide price-hidden"><span class="price-currency">Rp</span><span class="price-value">1.800.000</span> <span class="price-duration">thn</span></div>
                                        </div>
                                        <!--/.prices -->
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span> Kerusakan Kendaraan </span></li>
                                            <li><i class="uil uil-check"></i><span> Kehilangan Kendaraan </span></li>
                                            <li><i class="uil uil-check"></i><span> Biaya Perawatan Darurat </span></li>
                                            <li><i class="uil uil-check"></i><span> Perlindungan Pihak Ketiga </span></li>
                                            <li><i class="uil uil-check"></i><span> Layanan Pengganti Sementara </span></li>
                                        </ul>
                                        <a href="#" class="btn btn-primary rounded-pill">Pilih Asuransi</a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.pricing -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.pricing-scroll-wrapper -->
                </div>
                <!--/.pricing-wrapper -->
            </div>
            <!-- /.container -->
        </section>

        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-15 py-md-8">
                <h2 class="display-5 mb-4 text-center">Testimoni Pelanggan</h2>
                <div class="swiper-container dots-closer dots-light dots-light-75" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card d-flex flex-column white-900">
                                        <div class="card-body d-flex flex-column">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="flex-grow-1">
                                                <p>“Layanan billing asuransi ini sangat efisien. Saya bisa melihat semua riwayat pembayaran dengan mudah dan tidak perlu repot lagi.”</p>
                                                <div class="blockquote-details">
                                                    <div class="info p-0">
                                                        <h5 class="mb-0">Rudy Hartono</h5>
                                                        <p class="mb-0">Pelanggan</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card d-flex flex-column white-900">
                                        <div class="card-body d-flex flex-column">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="flex-grow-1">
                                                <p>“Fleksibilitas metode pembayaran memudahkan pengaturan keuangan dan menghindari keterlambatan.”</p>
                                                <div class="blockquote-details">
                                                    <div class="info p-0">
                                                        <h5 class="mb-0">Cory Zamora</h5>
                                                        <p class="mb-0">Pelanggan</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card d-flex flex-column white-900">
                                        <div class="card-body d-flex flex-column">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="flex-grow-1">
                                                <p>“Saya puas dengan kemudahan akses tagihan melalui portal online yang menyediakan informasi jelas dan cepat.”</p>
                                                <div class="blockquote-details">
                                                    <div class="info p-0">
                                                        <h5 class="mb-0">Nikolas Brooten</h5>
                                                        <p class="mb-0">Pelanggan</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card d-flex flex-column white-900">
                                        <div class="card-body d-flex flex-column">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="flex-grow-1">
                                                <p>“Layanan asuransi ini sangat memudahkan saya dalam mengelola keuangan. Semua tagihan jelas dan mudah diakses!”</p>
                                                <div class="blockquote-details">
                                                    <div class="info p-0">
                                                        <h5 class="mb-0">Coriss Ambady</h5>
                                                        <p class="mb-0">Pelanggan</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card d-flex flex-column white-900">
                                        <div class="card-body d-flex flex-column">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="flex-grow-1">
                                                <p>“Saya senang dengan fleksibilitas pembayaran yang memudahkan pengaturan sesuai jadwal saya.”</p>
                                                <div class="blockquote-details">
                                                    <div class="info p-0">
                                                        <h5 class="mb-0">Kevin Dyarga</h5>
                                                        <p class="mb-0">Pelanggan</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card d-flex flex-column white-900">
                                        <div class="card-body d-flex flex-column">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="flex-grow-1">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus facilisis sociis natoque penatibus.”</p>
                                                <div class="blockquote-details">
                                                    <div class="info p-0">
                                                        <h5 class="mb-0">Winda Amelia</h5>
                                                        <p class="mb-0">Pelanggan</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
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
                    <!-- /.container -->
                </section>
                <!-- /section -->

                <section class="wrapper bg-color-white">
                    <div class="container pb-14 py-md-12">
                        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                            <div class="col-lg-6">
                                <figure style="width: 350px "><img style="margin-left: 50px;" class="img-auto" src="../assets/img/illustrations/file.png" srcset="../assets/img/illustrations/file.png 2x" alt="" /></figure>
                            </div>
                            <!--/column -->
                            <div class="col-lg-5">
                                <h2 class="fs-15 text-uppercase text-primary mb-3">Kenapa Harus Memilih Ciptadra Asuransi?</h2>
                                <h3 class="display-5 mb-7">Karena Kami Mempunyai</h3>
                                <div class="accordion accordion-wrapper" id="accordionExample">
                                    <div class="card plain accordion-item">
                                        <div class="card-header" id="headingOne">
                                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Harga Termurah </button>
                                        </div>
                                        <!--/.card-header -->
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Asuransi dengan harga termurah menawarkan premi yang sangat terjangkau, sehingga dapat diakses oleh berbagai kalangan masyarakat, termasuk pelajar, pekerja baru, dan keluarga muda. Dengan biaya bulanan yang
                                                    rendah, Anda tetap bisa mendapatkan perlindungan dasar yang esensial tanpa perlu mengorbankan anggaran bulanan Anda.</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.accordion-collapse -->
                                    </div>
                                    <!--/.accordion-item -->
                                    <div class="card plain accordion-item">
                                        <div class="card-header" id="headingTwo">
                                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Layanan Terbaik </button>
                                        </div>
                                        <!--/.card-header -->
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Keunggulan lain dari perusahaan asuransi yang sukses adalah layanan pelanggan yang responsif dan berkualitas tinggi. Mereka memiliki tim dukungan yang siap membantu pelanggan dengan cepat dan efisien, baik
                                                    dalam proses klaim, pertanyaan umum, atau penanganan keluhan. Layanan pelanggan yang baik memastikan kepuasan dan loyalitas pelanggan.</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.accordion-collapse -->
                                    </div>
                                    <!--/.accordion-item -->
                                    <div class="card plain accordion-item">
                                        <div class="card-header" id="headingThree">
                                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Kemudahan Proses Klaim </button>
                                        </div>
                                        <!--/.card-header -->
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Perusahaan asuransi yang baik menawarkan proses klaim yang mudah dan cepat. Mereka menggunakan teknologi terkini untuk memudahkan pelanggan dalam mengajukan klaim secara online, serta memberikan transparansi
                                                    dan update berkala mengenai status klaim. Hal ini membantu pelanggan mendapatkan manfaat asuransi mereka tanpa hambatan yang berarti.</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.accordion-collapse -->
                                    </div>
                                    <!--/.accordion-item -->
                                </div>
                                <!--/.accordion -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.container -->
                    <!-- /.overflow-hidden -->
                </section>
                <!-- /section -->
            </div>

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

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>
