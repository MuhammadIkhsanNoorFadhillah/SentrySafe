<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detailed information about insurance policies, including benefits, coverage, and how to contact support.">
    <meta name="keywords" content="insurance, policies, benefits, coverage, support">
    <meta name="author" content="elemis">
    <title>SentrySafe | Kebijakan</title>
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


        <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="../assets/img/polis.jpg">
            <div class="container py-md-8 text-center">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <div class="post-header">
                            <div class="post-category md-3 text-line text-white">
                                <a href="#" class="text-reset" rel="category">Kebijakan</a>
                            </div>
                            <h1 class="display-1 text-white">Kebijakan Asuransi</h1>
                            <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18 fs-14">Pelajari semua tentang kebijakan asuransi kami, termasuk manfaat, perlindungan, dan cara mendapatkan dukungan jika diperlukan.</p>
                            <a href="#policy-details" class="btn btn-primary btn-lg mt-4 fs-13">Lihat Detail Kebijakan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="policy-details" class="wrapper bg-light wrapper-border">
            <div class="container mt-12">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <article>
                            <div class="row">
                                <div class="col-md-8 text-justify-content">
                            <h2 class="display-6  mb-4">Detail Kebijakan Asuransi</h2>
                                    <p>Di sini Anda akan menemukan semua informasi penting tentang polis asuransi kami, termasuk rincian manfaat, perlindungan, dan ketentuan-ketentuan yang berlaku.</p>
                                    <p>Kami menyediakan informasi lengkap untuk membantu Anda memahami apa yang termasuk dalam polis Anda, serta bagaimana Anda bisa memanfaatkannya dengan maksimal.</p>
                                </div>
                                <div class="col-md-4 justify-content">
                                    <img style="width: 330px"  src="../assets/img/kebijakan1.png" alt="">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper">
            <div class="container py-12">
                <div class="row gx-lg-8">
                    <h3 class="display-6 mb-15 mb-md-10 px-lg-15 text-center">Manfaat dan Perlindungan</h3>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="bi bi-award-fill"></i> </div>
                            </div>
                            <div>
                                <h4>Manfaat Polis</h4>
                                <p class="mb-2">Ketahui manfaat polis kami, termasuk perlindungan finansial, kesehatan, dan manfaat lainnya.</p>
                                <a href="#" class="more hover">Pelajari Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="bi bi-shield-fill-check"></i> </div>
                            </div>
                            <div>
                                <h4>Jenis Perlindungan</h4>
                                <p class="mb-2">Pahami perlindungan dasar dan tambahan yang ditawarkan oleh polis sesuai kebutuhan khusus.</p>
                                <a href="#" class="more hover">Pelajari Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-primary me-4"> <i class="bi bi-file-earmark-text-fill"></i> </div>
                            </div>
                            <div>
                                <h4>Cara mengajukan klaim</h4>
                                <p class="mb-2">Dapatkan informasi tentang cara mengajukan klaim, mulai dari proses hingga dokumen yang diperlukan.</p>
                                <a href="#" class="more hover">Pelajari Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-soft-white py-12">
            <div class="container">
                <div class="row gx-lg-8 text-center">
                    <h3 class="display-6 mb-15 mb-md-10 px-lg-15">Ketentuan Polis Asuransi</h3>
                    <div class="col-lg-6 mb-8">
                        <div class="icon btn btn-circle pe-none btn-primary mb-4">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                        <h4>Kewajiban Pemegang Polis</h4>
                        <p class="mb-4">Setiap pemegang polis diwajibkan untuk memahami dan memenuhi semua persyaratan yang tercantum dalam polis, termasuk pembayaran premi tepat waktu dan pelaporan perubahan signifikan.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                    </div>
                    <div class="col-lg-6 mb-8">
                        <div class="icon btn btn-circle pe-none btn-primary mb-4">
                            <i class="bi bi-x-octagon"></i>
                        </div>
                        <h4>Proses Pembatalan Polis</h4>
                        <p class="mb-4">Pembatalan polis dilakukan dengan prosedur tertentu, yang mungkin melibatkan pengembalian premi atau pemberhentian manfaat, tergantung pada ketentuan yang berlaku.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-light py-12">
            <div class="container">
                <div class="row gx-lg-8 text-center">
                    <h3 class="display-6 mb-15 mb-md-10 px-lg-15">Pertanyaan Umum</h3>
                    <div class="col-lg-4 mb-8">
                        <div class="icon btn btn-circle pe-none btn-primary mb-4">
                            <i class="bi bi-info-circle"></i>
                        </div>
                        <h4>Apa yang termasuk dalam polis asuransi ini?</h4>
                        <p class="mb-4">Polis ini mencakup berbagai jenis perlindungan, termasuk kesehatan, jiwa, dan aset, tergantung pada paket yang Anda pilih.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Pelajari Lebih Lanjut</a>
                    </div>
                    <div class="col-lg-4 mb-8">
                        <div class="icon btn btn-circle pe-none btn-primary mb-4">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <h4>Bagaimana cara memperbarui polis saya?</h4>
                        <p class="mb-4">Pembaruan polis dapat dilakukan melalui portal pelanggan kami atau dengan menghubungi layanan pelanggan.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Pelajari Lebih Lanjut</a>
                    </div>
                    <div class="col-lg-4 mb-8">
                        <div class="icon btn btn-circle pe-none btn-primary mb-4">
                            <i class="bi bi-card-list"></i>
                        </div>
                        <h4>Apa yang harus saya lakukan jika terjadi klaim?</h4>
                        <p class="mb-4">Hubungi layanan klaim kami dan siapkan semua dokumen yang diperlukan untuk panduan langkah demi langkah.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
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
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>

</html>
