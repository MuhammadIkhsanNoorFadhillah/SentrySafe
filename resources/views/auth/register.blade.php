<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SentrySafe | Daftar</title>
    <link rel="shortcut icon" href="../assets/img/logo-title.png">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <section class="wrapper bg-light">
            <div class="row justify-content-center gx-0 text-center">
                <div  class="col-lg-4 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block"  data-image-src="./assets/img/daftar1.png">
                </div>
                <div class="col-lg-4">
                <div class="p-10 p-md-11 p-lg-2">
                    <a href="{{ route('landingpage.index') }}">
                        <img src="./assets/img/logo.png" class="img-fluid" style="width: 40%">
                      </a>
                    <p class="lead mb-6 text-start text-center">Pendaftaran memakan waktu kurang dari satu menit.</p>
                    <form action="{{ route('register') }}" method="POST" class="text-start mb-3">
                        @csrf
                    <div class="form-floating mb-4">
                        <input type="text" name="name" class="form-control" placeholder="Name" id="loginName">
                        <label for="loginName">Nama</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control" placeholder="Email" id="loginEmail">
                        <label for="loginEmail">Email</label>
                    </div>
                    <div class="form-floating password-field mb-4">
                        <input type="password" name="password" class="form-control" placeholder="Password" id="loginPassword">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPassword">Password</label>
                    </div>
                    <div class="form-floating password-field mb-4">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPasswordConfirm">Konfirmasi Password</label>
                    </div>
                    <button href="{{ route('login') }}" type="submit" class="btn btn-primary rounded-pill btn-register w-100 mb-2">Daftar</button>
                    </form>
                    <!-- /.form -->
                    <p class="mb-0">Sudah memiliki akun? <a href="{{ route('login') }}" class="hover">Masuk</a></p>
                    <div class="divider-icon my-4"></div>
                    <nav class="nav social justify-content-center text-center">
                    <a href="https://www.google.com/intl/id/gmail/about/" class="btn btn-circle btn-sm btn-google"><i class="fa-brands fa-google"></i></a>
                    <a href="https://www.facebook.com/?locale=id_ID" class="btn btn-circle btn-sm btn-facebook-f"><i class="fa-brands fa-facebook fa-xl"></i></a>
                    <a href="https://x.com/?lang=id" class="btn btn-circle btn-sm btn-twitter"><i class="fa-brands fa-twitter"></i></a>
                    </nav>
                    <!--/.social -->
                </div>
                <!--/div -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    </section>
    <!-- /section -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="https://kit.fontawesome.com/1bd9aad39c.js " crossorigin="anonymous "></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>
</html>
