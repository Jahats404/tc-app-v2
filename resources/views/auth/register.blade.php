<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tersimpan Cerita - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-image: url('img/login-bg.png'); background-size: cover; background-position: center;" class="bg-white">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('landing/img/bg-img/fastbooking.jpg'); background-size: cover; background-position: center;" class="col-lg-5 d-none d-lg-flex justify-content-center align-items-center bg-login-image">
                                <img style="width: 80%" src="landing/img/core-img/logotc.png" alt="" class="img-fluid ml-5">
                            </div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                                    </div>
                                    <form class="user" action="{{ route('action.register') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="Nama Lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="Alamat Email" name="email" value="{{ old('email') }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukkan Password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-user btn-block" style="background-color: #000; color: #fff;">
                                            Buat Akun
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('forget.password.get') }}">Lupa Password?</a>
                                        {{-- <a class="small" href="">Lupa Password?</a> --}}
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Sudah memiliki Akun? Login!</a>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    @include('validasi.notifikasi')
    @include('validasi.notifikasi-error')

</body>

</html>