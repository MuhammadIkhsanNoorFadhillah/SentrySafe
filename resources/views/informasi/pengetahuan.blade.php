<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SentrySafe | Pengetahuan</title>
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
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-17 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
        </div>
            <!-- /.post-category -->
            <h1 class="fs-50 fw-bolder   mb-4">Pengetahuan Asuransi</h1>
            <ul class="post-meta mb-5">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>9 Agustus 2024</span></li>
                <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>Oleh SentrySafe</span></a></li>
                <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3<span> Komentar</span></a></li>
                <li class="post-likes"><a href="#"><i class="uil uil-heart-alt"></i>3<span> Suka</span></a></li>
            </ul>
            <!-- /.post-meta -->
            </div>
            <!-- /.post-header -->
            </div>
        <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-10 mx-auto">
            <div class="blog single mt-n17">
                <figure class="card-img-top" ><img class="ichan" src="../assets/img/illustrations/diskusi.png" alt="" /></figure>
                <div class="card-body">
                    <div class="classic-view">
                    <article class="post">
                        <div class="post-content mb-5">
                        <h2 class="h1 mb-4">Selamat Datang di Pusat Pengetahuan Asuransi Kami</h2>
                        <p>Di sini, Anda dapat menemukan berbagai informasi yang berguna tentang asuransi. Kami menyediakan artikel mendalam, panduan praktis, FAQ, dan banyak lagi untuk membantu Anda memahami asuransi dengan lebih baik. Apakah Anda baru mengenal asuransi atau ingin memperdalam pengetahuan, pusat pengetahuan ini dirancang untuk menjawab semua pertanyaan Anda.</p>
                        <p>Selain itu, kami juga menyajikan studi kasus nyata dan kisah sukses dari pemegang polis yang telah memanfaatkan asuransi untuk melindungi diri dan keluarga mereka. Dengan video tutorial, kalkulator interaktif, serta sumber daya tambahan seperti eBook dan webinar, Anda akan mendapatkan pemahaman yang komprehensif tentang bagaimana asuransi dapat menjadi bagian penting dalam perencanaan keuangan Anda. Semua informasi yang kami sediakan bertujuan untuk membantu Anda membuat keputusan yang lebih tepat dan menguntungkan dalam memilih dan menggunakan produk asuransi.</p>
                        <div class="row g-2 mt-3 md mb-">
                        <h2 class="h1 pt-md-10 mb-4">Apa Itu Asuransi?</h2>
                        <p>Asuransi adalah sebuah perjanjian di mana perusahaan asuransi memberikan jaminan kompensasi atas kerugian, kerusakan, penyakit, atau kematian dengan imbalan pembayaran premi oleh tertanggung. Asuransi merupakan alat penting untuk mengelola risiko dan melindungi diri Anda serta orang yang Anda cintai dari ketidakpastian hidup.</p>
                        <div class="comment">
                            <h2 class="h1 pt-md-10 mb-8">Panduan Memilih Asuransi yang Tepat</h2>
                            <p>Memilih asuransi yang tepat memerlukan pemahaman yang baik tentang kebutuhan pribadi dan keluarga Anda. Pertimbangkan jenis perlindungan yang Anda butuhkan, seperti asuransi kesehatan, jiwa, atau properti, dan sesuaikan dengan anggaran yang tersedia. Periksa juga reputasi perusahaan asuransi, ketentuan polis, serta kemudahan klaim. Memilih asuransi yang tepat akan membantu Anda mendapatkan perlindungan optimal tanpa membebani keuangan Anda di masa depan,berikut adalah tata caranya :</p>
                            <div class="comment-header d-md-flex align-items-center">
                            <div class="d-flex flex-column align-items-start">
                                <!-- Accordion 1 -->
                                <div class="d-flex align-items-left mb-3">
                                    <i style="margin-right: 15px; margin-top: 5px;" class="fa-solid fa-magnifying-glass custom-icon"></i>
                                    <div class="accordion accordion-wrapper" id="accordionExample">
                                        <div class="card plain accordion-item">
                                            <div class="card-header" id="headingOne">
                                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Identifikasi Kebutuhan Anda
                                                </button>
                                            </div>
                                            <!--/.card-header -->
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Tentukan jenis asuransi yang sesuai dengan kebutuhan Anda, seperti asuransi kesehatan, jiwa, mobil, atau rumah. Pertimbangkan apakah Anda memerlukan perlindungan untuk kondisi medis tertentu, aset, atau tanggung jawab finansial.</p>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!--/.accordion-collapse -->
                                        </div>
                                        <!--/.accordion-item -->
                                    </div>
                                </div>

                                <!-- Accordion 2 -->
                                <div class="d-flex align-items-left mb-3">
                                    <i style="margin-right: 17px; margin-top: 5px;" class="fas fa-clipboard-list custom-icon"></i>
                                    <div class="accordion accordion-wrapper" id="accordionExample">
                                        <div class="card plain accordion-item">
                                            <div class="card-header" id="headingTwo">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Pahami Jenis Polis Asuransi
                                                </button>
                                            </div>
                                            <!--/.card-header -->
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Memahami jenis-jenis polis asuransi penting untuk memilih perlindungan yang tepat. Asuransi jiwa melindungi ahli waris jika terjadi kematian, asuransi kesehatan menanggung biaya medis, asuransi mobil melindungi kendaraan dan tanggung jawab hukum, dan asuransi rumah melindungi properti dari risiko seperti kebakaran atau pencurian. Setiap polis memiliki manfaat yang berbeda, jadi pastikan untuk memilih yang sesuai dengan kebutuhan Anda.</p>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!--/.accordion-collapse -->
                                        </div>
                                        <!--/.accordion-item -->

                                </div>
                            </div>
                                <div class="d-flex align-items-left mb-3">
                                    <i style="margin-right: 10px; margin-top: 5px;" class="fas fa-balance-scale custom-icon"></i>
                                    <div class="accordion accordion-wrapper" id="accordionExample">
                                        <div class="card plain accordion-item">
                                            <div class="card-header" id="headingThree">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Bandingkan Polis Asuransi
                                                </button>
                                            </div>
                                            <!--/.card-header -->
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Bandingkan manfaat yang ditawarkan oleh berbagai polis, termasuk manfaat utama dan tambahan. Pertimbangkan juga premi dan deductible untuk menemukan yang sesuai dengan anggaran dan kebutuhan Anda.
                                                    </p>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!--/.accordion-collapse -->
                                        </div>
                                        <!--/.accordion-item -->

                                </div>
                            </div>
                                <div class="d-flex align-items-left mb-3">
                                    <i style="margin-right: 18px; margin-top: 5px;" class="fas fa-award custom-icon"></i>
                                    <div class="accordion accordion-wrapper" id="accordionExample">
                                        <div class="card plain accordion-item">
                                            <div class="card-header" id="headingFour">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Pertimbangkan Reputasi Perusahaan Asuransi
                                                </button>
                                            </div>
                                            <!--/.card-header -->
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Reputasi perusahaan asuransi mencerminkan keandalan dan kualitas layanannya. Pilih perusahaan dengan pengalaman baik, ulasan positif, stabilitas keuangan, dan layanan pelanggan yang responsif untuk memastikan perlindungan yang andal. Perusahaan yang memanfaatkan teknologi terbaru dan mematuhi regulasi juga menunjukkan integritas dan komitmen terhadap kepuasan pelanggan.</p>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!--/.accordion-collapse -->
                                        </div>
                                        <!--/.accordion-item -->

                                </div>
                            </div>
                            <div class="d-flex align-items-left mb-3">
                                <i style="margin-right: 18px; margin-top: 5px;" class="fas fa-file-alt custom-icon"></i>
                                <div class="accordion accordion-wrapper" id="accordionExample">
                                    <div class="card plain accordion-item">
                                        <div class="card-header" id="headingFive">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Baca Syarat dan Ketentuan Polis
                                            </button>
                                        </div>
                                        <!--/.card-header -->
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Membaca syarat dan ketentuan polis asuransi sangat penting untuk memahami hak dan kewajiban Anda. Pastikan untuk memeriksa detail seperti cakupan, pengecualian, dan prosedur klaim agar Anda tahu persis apa yang dilindungi dan bagaimana prosesnya. Dengan memahami syarat dan ketentuan, Anda dapat membuat keputusan yang lebih baik dan menghindari kejutan di masa depan.</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.accordion-collapse -->
                                    </div>
                                    <!--/.accordion-item -->
                                </div>
                            </div>
                        </div>
                        </div>
                            <div class="d-flex align-items-left mb-3">
                                <i style="margin-right: 15px; margin-top: 5px;" class="fas fa-phone custom-icon"></i>
                                <div class="accordion accordion-wrapper" id="accordionExample">
                                    <div class="card plain accordion-item">
                                        <div class="card-header" id="headingSix">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Konsultasikan dengan Agen Asuransi
                                            </button>
                                        </div>
                                        <!--/.card-header -->
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Diskusikan pilihan dengan agen asuransi untuk mendapatkan rekomendasi yang sesuai dengan kebutuhan spesifik Anda. Minta penjelasan tentang istilah teknis atau detail polis yang tidak Anda pahami.</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.accordion-collapse -->
                                    </div>
                                    <!--/.accordion-item -->
                                </div>
                            </div>
                            <div class="d-flex align-items-left mb-3">
                                <i style="margin-right: 13px; margin-top: 5px;" class="fas fa-star custom-icon"></i>
                                <div class="accordion accordion-wrapper" id="accordionExample">
                                    <div class="card plain accordion-item">
                                        <div class="card-header" id="headingSeven">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Periksa Ulasan dan Rekomendasi
                                            </button>
                                        </div>
                                        <!--/.card-header -->
                                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Baca ulasan online dan tanyakan pada teman atau keluarga untuk mendapatkan wawasan tentang pengalaman dengan perusahaan asuransi. Ulasan dan rekomendasi dapat memberikan pandangan yang berharga.
                                                    </p>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!--/.accordion-collapse -->
                                        </div>
                                        <!--/.accordion-item -->
                                    </div>
                                </div>
                                <div class="d-flex align-items-left mb-3">
                                <i style="margin-right: 21px; margin-top: 5px;" class="fas fa-dollar-sign custom-icon"></i>
                                <div class="accordion accordion-wrapper" id="accordionExample">
                                    <div class="card plain accordion-item">
                                        <div class="card-header" id="headingEight">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Tentukan Anggaran Anda
                                            </button>
                                        </div>
                                        <!--/.card-header -->
                                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Pilih polis yang sesuai dengan anggaran Anda tanpa mengorbankan manfaat penting. Pertimbangkan bagaimana asuransi dapat berkontribusi pada keamanan finansial jangka panjang Anda.</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.accordion-collapse -->
                                    </div>
                                    <!--/.accordion-item -->

                            </div>
                        </div>
                        </div>
                        <div class="comment">
                            <h2 class="h1 pt-md-10 mb-8">Pertanyaan Yang Sering Diajukan</h2>
                            <div class="comment-header d-md-flex align-items-center">
                            <div class="d-flex flex-column align-items-start">
                                <!-- Accordion 1 -->
                                <div class="d-flex align-items-left mb-3">
                                    <div class="accordion accordion-wrapper" id="accordionExample">
                                        <div class="card plain accordion-item">
                                            <div class="card-header" id="headingOne">
                                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Apa itu asuransi dan mengapa saya membutuhkannya?
                                                </button>
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
                                    </div>
                                </div>

                                <!-- Accordion 2 -->
                                <div class="d-flex align-items-left mb-3">
                                    <div class="accordion accordion-wrapper" id="accordionExample">
                                        <div class="card plain accordion-item">
                                            <div class="card-header" id="headingTwo">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Apa saja jenis-jenis asuransi yang tersedia di perusahaan ini?
                                                </button>
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

                                </div>
                            </div>
                                <div class="d-flex align-items-left mb-3">
                                    <div class="accordion accordion-wrapper" id="accordionExample">
                                        <div class="card plain accordion-item">
                                            <div class="card-header" id="headingThree">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Apa perbedaan antara asuransi jiwa berjangka dan asuransi jiwa seumur hidup?
                                                </button>
                                            </div>
                                            <!--/.card-header -->
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Asuransi jiwa berjangka memberikan perlindungan untuk jangka waktu tertentu, misalnya 10, 20, atau 30 tahun. Premi biasanya lebih rendah, tetapi tidak ada nilai tunai yang terkumpul. Asuransi jiwa seumur hidup memberikan
                                                        perlindungan selama hidup pemegang polis dan termasuk komponen tabungan yang dapat tumbuh seiring waktu.
                                                    </p>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!--/.accordion-collapse -->
                                        </div>
                                        <!--/.accordion-item -->

                                </div>
                            </div>
                                <div class="d-flex align-items-left mb-3">
                                    <div class="accordion accordion-wrapper" id="accordionExample">
                                        <div class="card plain accordion-item">
                                            <div class="card-header" id="headingFour">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Apa yang dimaksud dengan premi?
                                                </button>
                                            </div>
                                            <!--/.card-header -->
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Premi adalah jumlah uang yang Anda bayar secara berkala kepada perusahaan asuransi sebagai imbalan atas perlindungan yang diberikan. Besarnya premi biasanya tergantung pada faktor-faktor seperti jenis asuransi, tingkat risiko, dan cakupan perlindungan.</p>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!--/.accordion-collapse -->
                                        </div>
                                        <!--/.accordion-item -->

                                </div>
                            </div>
                            <div class="d-flex align-items-left mb-3">
                                <div class="accordion accordion-wrapper" id="accordionExample">
                                    <div class="card plain accordion-item">
                                        <div class="card-header" id="headingFive">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Bagaimana cara mengajukan klaim asuransi?
                                            </button>
                                        </div>
                                        <!--/.card-header -->
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Untuk mengajukan klaim, Anda perlu menghubungi perusahaan asuransi Anda dan mengisi formulir klaim. Anda juga perlu menyediakan dokumen pendukung seperti laporan medis, bukti kerugian, atau kwitansi biaya. Setelah itu, perusahaan asuransi akan meninjau klaim Anda dan memutuskan apakah klaim tersebut dapat diterima dan berapa jumlah kompensasi yang akan diberikan.</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.accordion-collapse -->
                                    </div>
                                    <!--/.accordion-item -->
                                </div>
                            </div>
                        </div>
                        </div>
                            <div class="d-flex align-items-left mb-3">
                                <div class="accordion accordion-wrapper" id="accordionExample">
                                    <div class="card plain accordion-item">
                                        <div class="card-header" id="headingSix">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Apakah premi akan naik setiap tahun?
                                            </button>
                                        </div>
                                        <!--/.card-header -->
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Premi dapat naik setiap tahun, tergantung pada jenis asuransi dan faktor risiko yang berubah, seperti usia, kondisi kesehatan, atau inflasi. Perubahan ini biasanya dijelaskan dalam polis asuransi Anda.</p>
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!--/.accordion-collapse -->
                                    </div>
                                    <!--/.accordion-item -->
                                </div>
                            </div>
                        </div>
                            <div class="d-flex align-items-left mb-3">
                                <div class="accordion accordion-wrapper" id="accordionExample">
                                    <div class="card plain accordion-item">
                                        <div class="card-header" id="headingSeven">
                                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Apakah ada masa tunggu dalam asuransi?
                                            </button>
                                        </div>
                                        <!--/.card-header -->
                                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Ya, beberapa jenis asuransi memiliki masa tunggu, yaitu periode waktu di awal masa polis di mana Anda belum bisa mengajukan klaim. Misalnya, asuransi kesehatan sering memiliki masa tunggu untuk penyakit tertentu atau kehamilan. Masa tunggu ini biasanya dijelaskan dalam polis.
                                                    </p>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!--/.accordion-collapse -->
                                        </div>
                                        <!--/.accordion-item -->
                                    </div>
                                </div>
                            </div>
                                <div class="d-flex align-items-left mb-3">
                                    <div class="accordion accordion-wrapper" id="accordionExample">
                                        <div class="card plain accordion-item">
                                            <div class="card-header" id="headingEight">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                    Apa itu polis asuransi?
                                                </button>
                                            </div>
                                            <!--/.card-header -->
                                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Polis asuransi adalah dokumen kontrak yang merinci hak dan kewajiban Anda sebagai pemegang polis dan perusahaan asuransi. Polis ini mencakup jenis perlindungan, jumlah pertanggungan, premi yang harus dibayar, dan syarat serta ketentuan lainnya.
                                                    </p>
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!--/.accordion-collapse -->
                                        </div>
                                        <!--/.accordion-item -->

                                </div>
                            </div>
                        </div>
                        <!-- /.comment-header -->
                    </div>
                <h3 class="mb-3 mt-10">Apakah Kamu Punya Pertanyaan?</h3>
                    <p class="mb-7">Tanyakan Pada kolom di bawah dan email kamu tidak akan di publish</p>
                        <form class="comment-form">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Name*" id="c-name">
                                <label for="c-name">Nama</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" placeholder="Email*" id="c-email">
                                <label for="c-email">Email</label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea name="textarea" class="form-control" placeholder="Comment" style="height: 150px"></textarea>
                                <label>Comment *</label>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill mb-0">Kirim</button>
                        </form>
                    <!-- /.comment-form -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    </section>
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
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>
