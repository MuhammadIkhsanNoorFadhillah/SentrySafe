<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SentrySafe | Pelanggan</title>
    <link rel="shortcut icon" href="../assets/img/logo-title.png">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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

        <section class="video-wrapper bg-overlay bg-overlay-gradient px-0 mt-0 min-vh-55">
            <video poster="../assets/img/photos/movie2.jpg" src="../assets/media/movie2.mp4" autoplay loop playsinline muted></video>
            <div class="video-overlay"></div> <!-- Tambahkan overlay di sini jika diperlukan -->
            <div class="video-content">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-8 col-xl-6 text-center text-white mx-auto">
                            <h1 class="fs-25 text-white mb-3"><span class="rotator-zoom">Layanan Pelanggan Asuransi</span></h1>
                            <p class="lead fs-16 mb-0 mx-xxl-8">Temukan berbagai informasi penting mengenai layanan pelanggan kami, termasuk detail polis, tagihan, klaim, dan testimoni pelanggan.</p>
                        </div>
                        <!-- /column -->
                    </div>
                </div>
                <!-- /.video-content -->
            </div>
            <!-- /.content-overlay -->
        </section>


        <section id="customer-services" class="wrapper bg-light wrapper-border">
            <!-- Content Layanan Pelanggan Kami -->
            <div class="container mt-10">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <article>
                            <h3 class="display-6 mb-4">Layanan Pelanggan Kami</h3>
                            <p class="lead mb-3">Di sini Anda dapat mengakses berbagai layanan pelanggan kami, termasuk informasi mengenai polis asuransi, tagihan, klaim, dan cara menghubungi dukungan kami jika diperlukan.</p>
                            <p class="mb-4">Untuk kemudahan Anda, kami menyediakan akses ke detail polis, riwayat tagihan, status klaim, dan opsi untuk mengajukan klaim langsung melalui portal kami.</p>
                            <a href="{{ route('landingpage.hubungikami') }}" class="btn btn-primary btn-lg rounded-pill mt-3" aria-label="Hubungi kami" style="font-size: 0.70rem; padding: 0.5rem 0.8rem;">
                                <i class="bi bi-envelope-fill me-2"></i> Hubungi Kami
                            </a>
                        </article>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center">
                        <div class="bg-light p-3 rounded shadow-sm">
                            <img style="width: 330px" src="../assets/img/pelanggan.png" alt="Customer Services Icon" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Content Layanan Pelanggan Kami -->

            <!-- Content Layanan Utama -->
            <div class="container py-12">
                <div class="row gx-lg-8">
                    <h3 class="display-6 mb-15 mb-md-10 px-lg-15 text-center">Layanan Utama</h3>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row align-items-start">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="bi bi-file-text-fill"></i> </div>
                            </div>
                            <div>
                                <h4>Detail Kebijakan</h4>
                                <p class="fs-15 mb-2">Akses informasi lengkap tentang manfaat, perlindungan, dan ketentuan kebijakan asuransi Anda.</p>
                                <a href="{{ route('informasipelanggan.kebijakan') }}" class="more hover btn-soft-primary rounded-pill mt-2 mb-0">Lihat Detail Kebijakan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row align-items-start">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="bi bi-receipt-cutoff"></i> </div>
                            </div>
                            <div>
                                <h4>Tagihan</h4>
                                <p class="fs-15 mb-2">Cek riwayat tagihan Anda, bayar tagihan secara online, dan akses informasi terkait pembayaran polis.</p>
                                <a href="{{ route('informasipelanggan.penagihan') }}" class="more hover btn-soft-primary rounded-pill mt-2 mb-0">Lihat Tagihan Anda</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row align-items-start">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="bi bi-file-earmark-text-fill"></i> </div>
                            </div>
                            <div>
                                <h4>Klaim</h4>
                                <p class="fs-15 mb-2">Ajukan klaim dengan mudah dan lacak status klaim Anda secara online dengan cepat dan efisien</p>
                                <a href="{{ route('informasipelanggan.penagihan') }}" class="more hover btn-soft-primary rounded-pill mt-2 mb-0">Lihat Status Klaim Anda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Content Layanan Utama -->
        </section>


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

    <script src="https://kit.fontawesome.com/1bd9aad39c.js " crossorigin="anonymous "></script>
</body>

</html>
