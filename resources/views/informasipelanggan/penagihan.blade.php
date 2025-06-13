<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A comprehensive insurance billing page with detailed billing management options, FAQs, and customer testimonials.">
    <meta name="keywords" content="insurance, billing, payment, invoice, manage, finance, policy, claims">
    <meta name="author" content="elemis">
    <title>SentrySafe | Penagihan</title>
    <link rel="shortcut icon" href="../assets/img/logo-title.png">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

        <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="../assets/img/billing.jpg">
            <div class="container py-md-8 text-center">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <div class="post-header">
                            <div class="post-category text-line text-white">
                                <a href="#" class="text-reset" rel="category">Finance</a>
                            </div>
                            <h1 class="display-1 mb-3 text-white">Kelola Pembayaran Asuransi Anda</h1>
                            <p class="lead fs-14 px-md-12 px-lg-12 px-xl-15 px-xxl-18">Lihat dan kelola tagihan asuransi Anda dengan mudah. Cek riwayat pembayaran, bayar tagihan, dan unduh invoice langsung dari sini.</p>
                            <a href="#billing-details" class="btn btn-primary btn-lg mt-4" style="font-size: 0.70rem;">Mulai Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="billing-details" class="wrapper bg-light wrapper-border">
            <div class="container mt-10">
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <div class="row gx-0">
                                <div class="col-md-7 text-justify-content">
                                    <h2 class="display-6 mb-4">Detail Tagihan Asuransi Anda</h2>
                                    <p>Di sini Anda dapat melihat semua informasi terkait tagihan asuransi Anda, termasuk detail pembayaran terakhir, jumlah yang harus dibayar, dan tanggal jatuh tempo berikutnya. Jika Anda perlu melakukan pembayaran, kami
                                        menyediakan berbagai metode pembayaran untuk kenyamanan Anda.</p>
                                    <p>Untuk mempermudah, Anda dapat mengatur pembayaran otomatis atau mengunduh riwayat pembayaran Anda dalam format PDF. Dengan demikian, semua informasi yang Anda butuhkan ada di satu tempat yang mudah diakses kapan saja.</p>
                                </div>
                                <div class="col-md-4 ms-auto">
                                    <img style="width: 330px" src="../assets/img/billing2.png" alt="Billing Icon">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="container py-md-4">
                <div class="row">
                    <div class="col-lg-14">
                        <article>
                            <h2 class="display-6 mb-4">Tabel Rincian Tagihan</h2>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-center">Tanggal Tagihan</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12 Juli 2024</td>
                                        <td class="text-center">Rp 1.500.000</td>
                                        <td class="text-center"><span class="badge bg-success">Lunas</span></td>
                                        <td class="text-center"><a href="#" class="btn btn-primary btn-sm"><i class="fas fa-download"></i></a></td>                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>12 Agustus 2024</td>
                                        <td class="text-center">Rp 1.500.000</td>
                                        <td class="text-center"><span class="badge bg-warning">Menunggu Pembayaran</span></td>
                                        <td class="text-center"><a href="#" class="btn btn-primary btn-sm"><i class="fas fa-download"></i></a></td>                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>12 September 2024</td>
                                        <td class="text-center">Rp 1.500.000</td>
                                        <td class="text-center"><span class="badge bg-secondary">Jatuh Tempo</span></td>
                                        <td class="text-center"><a href="#" class="btn btn-primary btn-sm"><i class="fas fa-download"></i></a></td>                                    </tr>
                                </tbody>
                            </table>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Testimoni -->
        <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="../assets/img/testimony.jpg">
            <div class="container py-15 py-md-12">
                <h2 class="display-5 mb-4 text-center text-white">Testimoni Pelanggan</h2>
                <div class="swiper-container dots-closer dots-light dots-light-75" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card d-flex flex-column white-900">
                                        <div class="card-body d-flex flex-column">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="flex-grow-1">
                                                <p>“Layanan billing asuransi ini sangat efisien. Saya bisa melihat semua riwayat pembayaran dengan sangat mudah dan tidak perlu repot lagi.”</p>
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
                                                <p>“Fleksibilitas pembayaran ini benar-benar sangat memudahkan saya untuk mengatur keuangan tanpa khawatir keterlambatan pembayaran.”</p>
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
                                                <p>“Saya sangat puas dengan kemudahan akses tagihan melalui portal online. Segala informasi yang diperlukan tersedia dengan jelas dan cepat.”</p>
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
                                                <p>“Layanan asuransi ini sangat memudahkan saya dalam mengelola keuangan. Semua tagihan dipaparkan dengan jelas dan mudah diakses!”</p>
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
                                                <p>“Saya senang dengan fleksibilitas pembayaran yang ditawarkan. Sangat membantu untuk mengatur pembayaran sesuai dengan jadwal saya.”</p>
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
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section Testimoni -->


        <!-- Section Pertanyaan -->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-10">
                    <div class="col-lg-6 mb-0">
                        <h2 class="fs-15 text-uppercase text-primary mb-3">FAQ</h2>
                        <h3 class="display-5 mb-4">Pertanyaan yang Sering Diajukan</h3>
                        <p class="lead mb-6">Temukan jawaban atas pertanyaan umum mengenai layanan kami di sini. Untuk bantuan lebih lanjut, hubungi tim dukungan kami.</p>
                        <a href="#" class="btn btn-primary rounded-pill">Semua Pertanyaan</a>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <div id="accordion-3" class="accordion-wrapper">
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-3-1">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1" aria-expanded="false" aria-controls="accordion-collapse-3-1">Bagaimana cara membayar tagihan saya?</button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
                                    <div class="card-body">
                                        <p>Anda dapat membayar tagihan melalui transfer bank, kartu kredit atau metode pembayaran digital yang tersedia di portal pembayaran kami.</p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-3-2">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2">Apa yang terjadi jika saya terlambat membayar?</button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                                    <div class="card-body">
                                        <p>Jika anda terlambat membayar, mungkin ada denda keterlambatan yang dikenakan pada tagihan Anda. Harap pastikan untuk membayar tepat waktu untuk menghindari denda.</p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-3-3">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-3" aria-expanded="false" aria-controls="accordion-collapse-3-3">Bisakah saya mengatur pembayaran otomatis?</button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3" data-bs-target="#accordion-3">
                                    <div class="card-body">
                                        <p>Ya, Anda dapat mengatur pembayaran otomatis di portal kami untuk memastikan tagihan Anda selalu dibayar tepat waktu.</p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-3-4">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4" aria-expanded="false" aria-controls="accordion-collapse-3-4">Bagaimana cara melihat riwayat pembayaran saya?</button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4" data-bs-target="#accordion-3">
                                    <div class="card-body">
                                        <p>Anda dapat melihat riwayat pembayaran Anda melalui portal pengguna kami. Masuk ke akun Anda, lalu pilih bagian "Riwayat Pembayaran" untuk mengakses informasi lengkap tentang pembayaran sebelumnya.</p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.accordion-wrapper -->
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
    </div>

    <script src="https://kit.fontawesome.com/1bd9aad39c.js " crossorigin="anonymous "></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>
