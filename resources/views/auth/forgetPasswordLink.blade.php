<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tersimpan Cerita - Reset Password</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/') }}css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-image: url('{{ asset('/') }}img/login-bg.png'); background-size: cover; background-position: center;" class="bg-white">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('/') }}landing/img/bg-img/fastbooking.jpg'); background-size: cover; background-position: center;" class="col-lg-5 d-none d-lg-flex justify-content-center align-items-center bg-login-image">
                                <img style="width: 80%" src="{{ asset('/') }}landing/img/core-img/logotc.png" alt="" class="img-fluid ml-5">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                                        <p class="mb-4">Masukkan email Anda dan kata sandi baru untuk mereset password Anda.</p>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('reset.password.post') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email_address" name="email"
                                                placeholder="Masukkan Alamat Email ..." value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password"
                                                placeholder="Masukkan Kata Sandi Baru ..." required>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password-confirm" name="password_confirmation"
                                                placeholder="Konfirmasi Kata Sandi Baru ..." required>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-user btn-block" style="background-color: #000; color: #fff;">
                                            Reset Password
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Kembali ke Login</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Buat Akun Baru!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/') }}vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('/') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/') }}vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/') }}js/sb-admin-2.min.js"></script>
    @include('validasi.notifikasi')
    @include('validasi.notifikasi-error')

</body>

</html>
