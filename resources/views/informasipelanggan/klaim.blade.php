<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SentrySafe | Klaim</title>
    <link rel="shortcut icon" href="../assets/img/logo-title.png">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>
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
        <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="../assets/img/asuransi.jpg">
            <div class="container py-md-12 text-center">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <div class="post-header">
                            <div class="post-category text-line text-white">
                                <a href="#" class="text-reset" rel="category">Asuransi - klaim</a>
                            </div>
                            <!-- /.post-category -->
                            <h1 class="display-1 mb-3 text-white">Pengajuan Klaim Asuransi</h1>
                            <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18 fs-14">Kami berkomitmen untuk membantu Anda melakukan proses klaim yang cepat & mudah. Agar proses klaim berjalan dengan lancar</p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <!-- /section main-content -->
        <section class="wrapper bg-light wrapper-border">
            <div class="container py-md-12">
                <div class="row align-items-center">
                    <div class="col-md-12 ">
                        <article>
                            <div class="row gx-0">
                                <div class="col-md-7 text-justify-content">
                                    <h2 class="display-6 mb-4">Klaim Asuransi</h2>
                                    <p class="lead mb-3">Asuransi menawarkan berbagai jenis klaim untuk melindungi tertanggung dalam situasi kesehatan dan kehidupan yang berbeda. Klaim Kesehatan meliputi biaya pengobatan dan perawatan medis, sedangkan Klaim Penyakit Kritis
                                        memberikan dukungan finansial saat tertanggung didiagnosis dengan penyakit serius seperti kanker atau serangan jantung. Klaim Tidak Mampu menawarkan manfaat finansial jika tertanggung tidak dapat bekerja karena
                                        kondisi medis atau kecelakaan yang menyebabkan disabilitas.</p>
                                    <p class="mb-4"> Klaim Asuransi Jiwa memberikan pembayaran kepada ahli waris atau penerima manfaat setelah tertanggung Asuransi Jiwa, yang dapat digunakan untuk menutupi biaya pemakaman dan membantu keuangan keluarga yang ditinggalkan.
                                        Dengan demikian, klaim asuransi ini memberikan perlindungan komprehensif untuk memastikan dukungan finansial bagi tertanggung dan keluarganya dalam berbagai situasi darurat dan kritis.</p>
                                </div>
                                <!--/column -->
                                <div class="col-lg-5 d-flex justify-content-center">
                                    <img style="width: 330px " src="../assets/img/klaim.png">
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </article>
                        <!-- /.project -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
        </section>
        <section class="wrapper bg-light wrapper-border">
            <div class="container py-md-4">
                <div class="row">
                    <div class="col-lg-12">
                        <article>
                            <h2 class="display-6 mb-4 text-center">Tata Cara Pengisian Dokumen</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Jenis Klaim</th>
                                            <th scope="col">Tata Cara Pengisian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Klaim Kesehatan</td>
                                            <td>
                                                <ul>
                                                    <li>Mengisi dan melengkapi Formulir Klaim Kesehatan.</li>
                                                    <li>Pengisian formulir klaim wajib diisi oleh Pemegang Polis/Tertanggung dan Termaslahat atau wali (Jika pemegang Polis atau Tertanggung telah Asuransi Jiwa).</li>
                                                    <li>Informasi yang wajib diisi:
                                                        <ol>
                                                            <li>Nomor Polis</li>
                                                            <li>Data Tertanggung</li>
                                                            <li>Jenis Klaim</li>
                                                            <li>Rincian Riwayat Inap</li>
                                                            <li>Alasan keterlambatan pengajuan klaim <b>(wajib diisi jika pengajuan klaim lebih dari 30 hari)</b></li>
                                                            <li>Pernyataan dan Kuasa</li>
                                                            <li>Tanggal dan Tanda Tangan Pemohon sesuai Kartu Pengenal Pemegang Polis, Termaslahat, atau Wali yang mengisi.</li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Klaim Penyakit Kritis dan Tidak Mampu</td>
                                            <td>
                                                <ul>
                                                    <li>Mengisi dan melengkapi Formulir Klaim Penyakit Kritis dengan lengkap dan benar.</li>
                                                    <li>Untuk Pengisian Formulir Klaim wajib diisi oleh Pemegang Polis/Tertanggung.</li>
                                                    <li>Informasi yang wajib diisi:
                                                        <ol>
                                                            <li>Nomor Polis</li>
                                                            <li>Data Tertanggung</li>
                                                            <li>Diagnosis Penyakit</li>
                                                            <li>Laporan medis</li>
                                                            <li>Tanda Tangan Tertanggung sesuai Kartu Pengenal (KTP/ID)</li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Klaim Asuransi Jiwa</td>
                                            <td>
                                                <ul>
                                                    <li>Mengisi dan melengkapi Formulir Klaim Asuransi Jiwa dengan lengkap dan benar.</li>
                                                    <li>Formulir Klaim harus sesuai dengan jenis klaim yang diajukan.</li>
                                                    <li>Pengisian Formulir Klaim wajib diisi oleh Termaslahat atau Wali (jika termaslahat berusia di bawah 17 tahun atau ada penetapan pengadilan).</li>
                                                    <li>Informasi yang wajib diisi:
                                                        <ol>
                                                            <li>Nomor Polis</li>
                                                            <li>Data Almarhum/Almahurmah</li>
                                                            <li>Informasi Kontak</li>
                                                            <li>Jenis kelamin</li>
                                                            <li>Rincian Kematian (tanggal, tempat, dan kronologis kematian)</li>
                                                            <li>Informasi Asuransi Lainnya</li>
                                                            <li>Alasan Keterlambatan Pengajuan Klaim <b>(jika pengajuan klaim lebih dari 90 hari sejak tanggal meninggal)</b></li>
                                                            <li>Informasi Nomor Rekening Pembayaran Klaim</li>
                                                            <li>Informasi Tentang Pajak (khusus WNA)</li>
                                                            <li>Pernyataan dan Kuasa</li>
                                                            <li>Tanggal dan Tanda Tangan Termaslahat atau Wali (jika termaslahat berusia di bawah 17 tahun)</li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
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

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="https://kit.fontawesome.com/1bd9aad39c.js " crossorigin="anonymous "></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>

</html>
