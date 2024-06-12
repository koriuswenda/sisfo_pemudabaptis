<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Pemuda Baptis</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="<?= base_url(); ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/check-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url() ?>" class="logo-logo"><b>Siakad</b>Pemudabaptis</a>

        </div>

        <!-- /.login-logo -->
        <div class="card">
            <img src="assets/dist/img/p.jpg" class="img-circle btn-sm" alt="Cinque Terre">
            <div class="card-body login-card-body">
                <p class="login-box-msg btn-sm"><b>Silahakan Masuk</b></p>

                <form class="form-horisontal m-t-2 " action="ceklogin" method="post">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="level" placeholder="Level">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-inbox"></span>
                            </div>
                        </div>
                    </div> -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <!-- <div class="col-6">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember text-center">
                                    Remember Me
                                </label>
                            </div>
                        </div> -->
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" name="login" class="btn btn-success btn-block mb-3">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- 
                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> -->
                <!-- /.social-auth-links -->

                <p class="mb-1 p-3 m-3">
                    <a href="<?= base_url() ?> " class="text-primary">Lupa Password</a>

                    <a href="<?= base_url('register') ?>" class="text-center text-success">Register Akun</a>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>assets//dist/js/adminlte.min.js"></script>
</body>

</html>