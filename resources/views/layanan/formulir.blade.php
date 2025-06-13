<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SentrySafe | Formulir</title>
    <link rel="shortcut icon" href="../assets/img/logo-title.png">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
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

        <section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="../assets/img/photos/writing-form.jpg">
            <div class="container py-md-15 text-center">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <div class="post-header">
                            <!-- /.post-category -->
                            <h1 class="display-1 mb-3 text-white">Formulir</h1>
                            <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18">Temukan dokumen dan formulir penting yang Anda butuhkan untuk memudahkan pelayanan kami.</p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <section class="wrapper bg-light">
            <section class="wrapper bg-soft-primary">
                <div class="container py-14 py-md-16">
                    <h2 class="display-4">Bagaimana caranya?</h2>
                    <p class="lead fs-lg mb-8">Berikut adalah urutan pengisian formulir :</p>
                    <div class="row justify-content-center gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
                        <div class="col-md-6 col-lg-4"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">01</span></span>
                            <h4 class="mb-1">Lengkapi Formulir</h4>
                            <p class="mb-0">Lengkapi formulir pengajuan sesuai dengan perubahan yang diinginkan. Pelanggan diharuskan untuk mengisi formulir dengan lengkap dan detail sesuai dengan pertanyaan pada formulir.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">02</span></span>
                            <h4 class="mb-1">Lampirkan Dokumen Pelengkap</h4>
                            <p class="mb-0">Lampirkan semua dokumen pelengkap yang diperlukan sesuai dengan pengajuan yang diinginkan seperti fotokopi KTP, KK, dan lain lain.</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">03</span></span>
                            <h4 class="mb-1">Kirim Formulir</h4>
                            <p class="mb-0">Jika formulir pengajuan sudah diisi dan semua dokumen yang dibutuhkan sudah lengkap. Mohon serahkan kepada kami.</p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.container -->
            </section>

            <!-- /section -->
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <h2 class="display-4 mb-3 text-center mt-7 mb-5">Pilih Tipe Formulir</h2>
                    <form class="filter-form mb-10">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <input class="form-control" type="text" name="search" placeholder="Cari formulir...">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <div class="form-select-wrapper">
                                    <select class="form-select" id="form-select" aria-label="">
                                        <option selected>Pilih Tipe</option>
                                        <option value="formulir1">Formulir Pembelian</option>
                                        <option value="formulir2">Formulir Pembatalan</option>
                                        <option value="formulir3">Formulir Klaim</option>
                                    </select>
                                </div>
                            </div>

                            {{-- <!-- Formulir Pembelian --> --}}
                            <div id="formulir1" class="wizard-container" style="display:none;">
                                <div class="wizard-header">
                                    <h2>Formulir Pembelian</h2>
                                </div>
                                <div class="wizard-steps">
                                    <div class="step active">Biodata</div>
                                    <div class="step">Kontak</div>
                                    <div class="step">Alamat</div>
                                </div>
                                <form id="form-wizard">
                                    <!-- Biodata Step -->
                                    <div class="form-step active">
                                        <label for="textInputExample">Nama Lengkap :</label>
                                        <div class="form-floating mb-4">
                                            <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
                                            <label for="textInputExample">Masukan Nama Lengkap Anda</label>
                                        </div>
                                        <div class="d-flex col-md-12">
                                            <div class="form-group col-md-5">
                                                <label for="flexRadioDefault">Jenis Kelamin :</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1"> Laki-Laki </label>
                                                </div>
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2"> Perempuan </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-7">
                                                <label for="tanggal_lahir">Tanggal Lahir:</label>
                                                <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                                            </div>
                                        </div>
                                        <label for="textInputExample">No KTP :</label>
                                        <div class="form-floating mb-4">
                                            <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
                                            <label for="textInputExample">Masukan Nomer KTP Anda</label>
                                        </div>
                                        <label for="textInputExample">NPWP :</label>
                                        <div class="form-floating mb-4">
                                            <input id="textInputExample" type="text" class="form-control" placeholder="Text Input">
                                            <label for="textInputExample">Masukan NPWP Anda</label>
                                        </div>
                                        <button type="button" class="next-btn">Next</button>
                                    </div>

                                    <!-- Kontak Step -->
                                    <div class="form-step">
                                        <label for="textInputExample">No HP :</label>
                                        <div class="form-floating mb-4">
                                            <input id="textInputExample" type="text" class="form-control" placeholder="Masukan Nomer Handphone Anda">
                                            <label for="textInputExample">Masukan Nomer Handphone Anda</label>
                                          </div>
                                          <label for="textInputExample"> E-mail :</label>
                                          <div class="form-floating mb-4">
                                            <input id="textInputExample" type="text" class="form-control" placeholder="Masukan Alamat Email Anda">
                                            <label for="textInputExample">Masukan Alamat Email Anda</label>
                                          </div>
                                        <button type="button" class="prev-btn">Previous</button>
                                        <button type="button" class="next-btn">Next</button>
                                    </div>

                                    <!-- Alamat Step -->
                                    <div class="form-step">
                                        <label for="textInputExample">Alamat Lengkap :</label>
                                        <div class="form-floating mb-4">
                                            <textarea id="textareaExample" class="form-control" placeholder="Textarea" style="height: 150px" required></textarea>
                                            <label for="textareaExample">Masukan Alamat Lengkap Anda</label>
                                          </div>
                                          <label for="textInputExample"> Kode Pos :</label>
                                          <div class="form-floating mb-4">
                                            <input id="textInputExample" type="text" class="form-control" placeholder="Masukan Kode Anda">
                                            <label for="textInputExample">Masukan Kode Pos Anda</label>
                                          </div>
                                        <button type="button" class="prev-btn">Previous</button>
                                        <button type="submit" class="submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>

                            {{-- <!-- Formulir Klaim --> --}}
                            <div id="formulir3" class="wizard-container" style="display:none;">
                                <div class="wizard-header">
                                    <h2>Formulir Klaim Asuransi</h2>
                                </div>
                                <div class="wizard-steps">
                                    <div class="step active">Informasi Pribadi</div>
                                    <div class="step">Detail Klaim</div>
                                    <div class="step">Dokumen Pendukung</div>
                                </div>
                                <form id="form-wizard-step" action="/submit-claim" method="POST" enctype="multipart/form-data">
                                    <!-- Informasi Pribadi Step -->
                                    <div class="form-step active">
                                        <label for="namaLengkap">Nama Lengkap :</label>
                                        <div class="form-floating mb-4">
                                            <input id="namaLengkap" type="text" class="form-control" placeholder="Nama Lengkap" required>
                                            <label for="namaLengkap">Masukan Nama Lengkap Anda</label>
                                        </div>
                                        <div class="d-flex col-md-12">
                                            <div class="form-group col-md-5">
                                                <label for="jenisKelamin">Jenis Kelamin :</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenisKelamin" id="kelaminLaki" value="Laki-Laki" required>
                                                    <label class="form-check-label" for="kelaminLaki"> Laki-Laki </label>
                                                </div>
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" type="radio" name="jenisKelamin" id="kelaminPerempuan" value="Perempuan" required>
                                                    <label class="form-check-label" for="kelaminPerempuan"> Perempuan </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-7">
                                                <label for="tanggalLahir">Tanggal Lahir:</label>
                                                <input class="form-control" type="date" id="tanggalLahir" name="tanggalLahir" required>
                                            </div>
                                        </div>
                                        <label for="nomorKTP">No KTP :</label>
                                        <div class="form-floating mb-4">
                                            <input id="nomorKTP" type="text" class="form-control" placeholder="Nomor KTP" required>
                                            <label for="nomorKTP">Masukan Nomor KTP Anda</label>
                                        </div>
                                        <label for="npwp">NPWP :</label>
                                        <div class="form-floating mb-4">
                                            <input id="npwp" type="text" class="form-control" placeholder="NPWP">
                                            <label for="npwp">Masukan NPWP Anda (Opsional)</label>
                                        </div>
                                        <button type="button" class="next-btn">Next</button>
                                    </div>

                                    <!-- Detail Klaim Step -->
                                    <div class="form-step">
                                        <label for="nomorPolis">Nomor Polis :</label>
                                        <div class="form-floating mb-4">
                                            <input id="nomorPolis" type="text" class="form-control" placeholder="Nomor Polis" required>
                                            <label for="nomorPolis">Masukan Nomor Polis Anda</label>
                                        </div>
                                        <label for="jenisKlaim">Jenis Klaim :</label>
                                        <div class="form-floating mb-4">
                                            <select id="jenisKlaim" class="form-control" required>
                                                <option value="" disabled selected>Pilih Jenis Klaim</option>
                                                <option value="kesehatan">Kesehatan</option>
                                                <option value="kendaraan">Kendaraan</option>
                                                <option value="properti">Properti</option>
                                                <option value="jiwa">Jiwa</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                            <label for="jenisKlaim">Pilih Jenis Klaim</label>
                                        </div>
                                        <label for="tanggalKejadian">Tanggal Kejadian :</label>
                                        <div class="form-floating mb-4">
                                            <input id="tanggalKejadian" type="date" class="form-control" required>
                                            <label for="tanggalKejadian">Masukan Tanggal Kejadian</label>
                                        </div>
                                        <label for="deskripsiKejadian">Deskripsi Kejadian :</label>
                                        <div class="form-floating mb-4">
                                            <textarea id="deskripsiKejadian" class="form-control" placeholder="Deskripsi Kejadian" style="height: 150px" required></textarea>
                                            <label for="deskripsiKejadian">Jelaskan Kejadian yang Terjadi</label>
                                        </div>
                                        <button type="button" class="prev-btn">Previous</button>
                                        <button type="button" class="next-btn">Next</button>
                                    </div>

                                    <!-- Dokumen Pendukung Step -->
                                    <div class="form-step">
                                        <label for="unggahDokumen">Unggah Dokumen Pendukung :</label>
                                        <div class="form-floating mb-4">
                                            <input id="unggahDokumen" type="file" class="form-control" multiple required>
                                            <label for="unggahDokumen">Unggah Foto, Laporan Polisi, dll.</label>
                                        </div>
                                        <label for="bank">Nama Bank :</label>
                                        <div class="form-floating mb-4">
                                            <input id="bank" type="text" class="form-control" placeholder="Nama Bank" required>
                                            <label for="bank">Masukan Nama Bank Anda</label>
                                        </div>
                                        <label for="nomorRekening">Nomor Rekening :</label>
                                        <div class="form-floating mb-4">
                                            <input id="nomorRekening" type="text" class="form-control" placeholder="Nomor Rekening" required>
                                            <label for="nomorRekening">Masukan Nomor Rekening Anda</label>
                                        </div>
                                        <label for="cabangBank">Alamat Cabang Bank :</label>
                                        <div class="form-floating mb-4">
                                            <input id="cabangBank" type="text" class="form-control" placeholder="Alamat Cabang Bank" required>
                                            <label for="cabangBank">Masukan Alamat Cabang Bank Anda</label>
                                        </div>
                                        <button type="button" class="prev-btn">Previous</button>
                                        <button type="submit" class="submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
            <!-- /column -->
    </div>
    <!-- /.row -->
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

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="https://kit.fontawesome.com/1bd9aad39c.js " crossorigin="anonymous "></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>
