<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SentrySafe | Jasa Asuransi</title>
    <link rel="shortcut icon" href="../assets/img/logo-title.png">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>
    <div class="content-wrapper">
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

        <section class="wrapper bg-light">
            <div class="container pt-8 pt-md-9">
                <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-13 align-items-center">
                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
                        <figure style="width: 70%; " class="rounded"><img class="ms-12 mt-5" src="./assets/img/illustrations/Insurance-amico.png" srcset="./assets/img/illustrations/Insurance-amico.png" alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-1 mb-5 fs-28">Jangan Biarkan Risiko Mengganggu Ketenangan Anda</h1>
                        <p class="lead fs-18 lh-sm mb-3 px-md-10 px-lg-0">Peroleh perlindungan maksimal dengan asuransi terbaik kami. Lindungi diri dan keluarga Anda sekarang!</p>
                        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                            <span>
                                <a href="{{ route('informasi.produk') }}" class="btn btn-lg btn-primary rounded-pill me-2" style="font-size: 0.675rem; padding: 0.45rem 0.9rem;">Dapatkan Perlindungan Sekarang</a>
                            </span>
                        </div>

                    </div>
                    <!--/column -->
                </div>
                <!-- /.row -->
        </section>
        <!-- /section -->

        <!-- /header -->

        <section class="wrapper bg-soft-primary">
            <div class="container py-14 py-md-12">
                <div class="row text-center">
                    <div class="col-xl-10 mx-auto">
                        <h3 class="display-4 mb-10 px-xxl-15 text-capitalize">Solusi perlindungan untuk anda</h3>
                    </div>
                    <!-- /column -->
                </div>

                <div class="row gy-6 justify-content-center">
                    <div class="col-md-2 col-lg-3">
                        <a href="{{ route('layanan.servis.perlindunganindividu') }}" class="card shadow-lg lift" style="text-decoration: none; color: inherit; border: none; border-radius: 10px; transition: transform 0.2s;">
                            <div class="card-body p-4 d-flex align-items-center" style="display: flex; align-items: center; padding: 1rem; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); transition: transform 0.2s;">
                                <i class="fa-solid fa-user fa-lg" style="margin-right: 10px;"></i>
                                <h4 class="mb-0" style="font-size: 16px; margin-bottom: 0;">Perlindungan Individu</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 col-lg-3">
                        <a href="{{ route('layanan.servis.perlindunganmikro') }}" class="card shadow-lg lift" style="text-decoration: none; color: inherit; border: none; border-radius: 10px; transition: transform 0.2s;">
                            <div class="card-body p-4 d-flex align-items-center" style="display: flex; align-items: center; padding: 1rem; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); transition: transform 0.2s;">
                                <i class="fa-solid fa-comment-dots fa-lg" style="margin-right: 10px;"></i>
                                <h4 class="mb-0" style="font-size: 16px; margin-bottom: 0;">Perlindungan Mikro</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 col-lg-3">
                        <a href="{{ route('layanan.servis.solusikorporat') }}" class="card shadow-lg lift" style="text-decoration: none; color: inherit; border: none; border-radius: 10px; transition: transform 0.2s;">
                            <div class="card-body p-4 d-flex align-items-center" style="display: flex; align-items: center; padding: 1rem; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); transition: transform 0.2s;">
                                <i class="fa-solid fa-handshake fa-lg" style="margin-right: 10px;"></i>
                                <h4 class="mb-0" style="font-size: 16px; margin-bottom: 0;">Solusi Korporat</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-2 col-lg-3">
                        <a href="{{ route('layanan.servis.online') }}" class="card shadow-lg lift" style="text-decoration: none; color: inherit; border: none; border-radius: 10px; transition: transform 0.2s;">
                            <div class="card-body p-4 d-flex align-items-center" style="display: flex; align-items: center; padding: 1rem; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); transition: transform 0.2s;">
                                <i class="fa-solid fa-basket-shopping fa-lg" style="margin-right: 10px;"></i>
                                <h4 class="mb-0" style="font-size: 16px; margin-bottom: 0;">Online</h4>
                            </div>
                        </a>
                    </div>

                    <div class="row justify-content-center ">
                        <div class="col-md-2 col-lg-3 mt-6">
                            <a href="{{ route('layanan.servis.perlindungansyariah') }}" class="card shadow-lg lift" style="text-decoration: none; color: inherit; border: none; border-radius: 10px; transition: transform 0.2s;">
                                <div class="card-body p-4 d-flex align-items-center" style="display: flex; align-items: center; padding: 1rem; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); transition: transform 0.2s;">
                                    <i class="fa-solid fa-mosque fa-lg" style="margin-right: 10px;"></i>
                                    <h4 class="mb-0" style="font-size: 16px; margin-bottom: 0;">Perlindungan Syariah</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-2 col-lg-3 mt-6">
                            <a href="{{ route('layanan.servis.perlindunganprestige') }}" class="card shadow-lg lift" style="text-decoration: none; color: inherit; border: none; border-radius: 10px; transition: transform 0.2s;">
                                <div class="card-body p-4 d-flex align-items-center" style="display: flex; align-items: center; padding: 1rem; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); transition: transform 0.2s;">
                                    <i class="fa-solid fa-gem fa-lg" style="margin-right: 10px;"></i>
                                    <h4 class="mb-0" style="font-size: 16px; margin-bottom: 0;">Perlindungan Prestige</h4>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-2 col-lg-3 mt-6">
                            <a href="{{ route('layanan.servis.kreditkumpulan') }}" class="card shadow-lg lift" style="text-decoration: none; color: inherit; border: none; border-radius: 10px; transition: transform 0.2s;">
                                <div class="card-body p-4 d-flex align-items-center" style="display: flex; align-items: center; padding: 1rem; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); transition: transform 0.2s;">
                                    <i class="fa-solid fa-newspaper fa-lg" style="margin-right: 10px;"></i>
                                    <h4 class="mb-0" style="font-size: 16px; margin-bottom: 0;">Kredit Kumpulan</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--/column -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-12">
                <div class="row text-center">
                    <div class="col-xl-10 mx-auto">
                        <h3 class="display-4 mb-10 px-xxl-15">Layanan Untuk Anda</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row gy-6 justify-content-center">
                    <div class="col-lg-4">
                        <a href="#" class="card shadow-lg lift h-100">
                            <div class="card-body p-5 d-flex flex-row">
                                <div style="text-align: -webkit-center;">
                                    <img class=" d-flex align-items-center " src="./assets/img/illustrations/compare.png " alt=" " width="10% ">
                                    <h4 class="mb-1 text-center mt-5">Bandingkan Produk</h4>
                                    <p class="mb-0 text-body text-center ">Lihat dan bandingkan produk asuransi</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 ">
                        <a href="# " class="card shadow-lg lift h-100 ">
                            <div class="card-body p-5 d-flex flex-row ">
                                <div style="text-align: -webkit-center; ">
                                    <img class="d-flex align-items-center " src="./assets/img/illustrations/downloads.png " alt=" " width="10% ">
                                    <h4 class="mb-1 text-center mt-5">Unduh Formulir</h4>
                                    <p class="mb-0 text-body text-center ">Temukan kemudahan dalam mengakses formulir untuk segala layanan</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 ">
                        <a href="# " class="card shadow-lg lift h-100 ">
                            <div class="card-body p-5 d-flex flex-row ">
                                <div style="text-align: -webkit-center; ">
                                    <img class="d-flex align-items-center " src="./assets/img/illustrations/insurance.png " alt=" " width="10% ">
                                    <h4 class="mb-1 text-center mt-5">Pengajuan Klaim</h4>
                                    <p class="mb-0 text-body text-center ">Ajukan klaim asuransi dengan mudah dan cepat melalui formulir yang tersedia.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-soft-primary rounded-pill">Lihat Semua Layanan</a>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <!-- /section -->
        <section class="wrapper bg-soft-primary ">
            <div class="container py-14 py-md-12 ">
                <div class="row gx-lg-8 gx-xl-12 gy-10 ">
                    <div class="col-lg-6 mb-0 ">
                        <h2 class="fs-15 text-uppercase text-primary mb-3 ">FAQ</h2>
                        <h3 class="display-5 mb-4 ">Tidak menemukan jawaban? Hubungi kami melalui formulir kontak.</h3>
                        <p class="lead mb-4 ">Jika Anda tidak menemukan jawaban atas pertanyaan Anda, Anda dapat melihat di halaman pengetahuan atau Anda dapat mengirim email kepada kami melalui formulir kontak.</p>
                        <a href="{{ route('informasi.pengetahuan') }}"  class="btn btn-primary rounded-pill" style="font-size: 0.675rem; padding: 0.45rem 0.9rem;">Baca Selengkapnya <i class=" ms-2 fa-solid fa-arrow-right" style="color: #ffffff;"></i></a>
                    </div>

                    <div class="col-lg-6">
                        <div class="accordion accordion-wrapper mt-10" id="accordionExample">
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingOne">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Apa itu asuransi dan mengapa saya membutuhkannya?</button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Asuransi adalah kontrak di mana perusahaan asuransi setuju untuk memberikan kompensasi kepada pemegang polis dalam hal kerugian tertentu. Ini memberikan perlindungan finansial terhadap risiko yang tidak terduga
                                            seperti kecelakaan, bencana alam, atau penyakit. Asuransi penting karena dapat membantu Anda mengelola risiko dan melindungi aset Anda.</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Apa saja jenis-jenis asuransi yang tersedia di perusahaan ini?</button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Kami menawarkan berbagai jenis asuransi, termasuk asuransi jiwa, asuransi kesehatan, asuransi kendaraan, asuransi properti, dan asuransi perjalanan. Masing-masing jenis asuransi dirancang untuk memenuhi kebutuhan
                                            spesifik Anda.</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Apa perbedaan antara asuransi jiwa berjangka dan asuransi jiwa seumur hidup?</button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Asuransi jiwa berjangka memberikan perlindungan untuk jangka waktu tertentu, misalnya 10, 20, atau 30 tahun. Premi biasanya lebih rendah, tetapi tidak ada nilai tunai yang terkumpul. Asuransi jiwa seumur hidup memberikan
                                            perlindungan selama hidup pemegang polis dan termasuk komponen tabungan yang dapat tumbuh seiring waktu.</p>
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
        </section>



        <!-- /section -->

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

        <div class="progress-wrap ">
            <svg class="progress-circle svg-content " width="100% " height="100% " viewBox="-1 -1 102 102 ">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98 " />
            </svg>
        </div>
        <script src="https://kit.fontawesome.com/1bd9aad39c.js " crossorigin="anonymous "></script>
        <script src="./assets/js/plugins.js "></script>
        <script src="./assets/js/theme.js "></script>
</body>

</html>
