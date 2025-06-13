<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SentrySafe | Masuk</title>
    <link rel="shortcut icon" href="../assets/img/logo-title.png">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- /section -->
    <section class="wrapper bg-light">
              <div class="row justify-content-center gx-0 text-center">
                <a href=""></a><div class="col-lg-4 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="./assets/img/masuk.png" href="{{ route('landingpage.index') }}">
                </div>
                <!--/column -->
                <div class="col-lg-4">
                  <div class="p-10 p-md-11 p-lg-13">
                    <a href="{{ route('landingpage.index') }}">
                        <img src="./assets/img/logo.png" class="img-fluid" style="width: 45%">
                      </a>
                    <p class="lead fs-15 mb-6 text-start text-center">Masukkan email dan password anda untuk masuk</p>
                    <form action="{{ route('login') }}" method="POST" class="text-start mb-3">
                        @csrf
                      <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control" placeholder="Email" id="loginEmail">
                        <label for="loginEmail">Email</label>
                      </div>
                      <div class="form-floating password-field mb-4">
                        <input type="password" name="password" class="form-control" placeholder="Password" id="loginPassword">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPassword">Password</label>
                      </div>
                      <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Masuk</button>
                    </form>
                    <!-- /form -->
                    <p class="mb-1"><a href="#" class="hover">Lupa password?</a></p>
                    <p class="mb-0">Tidak memiliki akun? <a href="{{ route('register') }}" class="hover">Daftar</a></p>
                    <div class="divider-icon my-1">atau</div>
                    <nav class="nav social justify-content-center text-center mb-n10">
                      <a href="https://www.google.com/intl/id/gmail/about/" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                      <a href="https://www.facebook.com/?locale=id_ID" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                      <a href="https://x.com/?lang=id" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
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
      {{-- </div>
      <!-- /.container -->
    </section>
    <!-- /section --> --}}

    <script src="https://kit.fontawesome.com/1bd9aad39c.js " crossorigin="anonymous "></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>
</html>
