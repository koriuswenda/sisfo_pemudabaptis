<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"> <i class="fas fa-sign-out-alt fa-sm   text-gray-400"></i><b><?= $judul ?></b></h3>
            <!-- /.card-tools -->
            <div class="card-tools">
                <a href="<?= base_url('Logout') ?>" class="btn btn-primary">
                    <i class="fas fa-sign-out-alt fa-sm   text-gray-400"><b> Data Logout</b></i>
                    <!-- <i class="fas fa-key"> <b>Logout</b></i> -->
                </a>
            </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <table class="table table-bordered">
                <thead>

                    <div class="container">
                        <!-- Outer Row -->
                        <div class="row justify-content-center">

                            <div class="col-xl-10-col-lg-0-col-md-0">

                                <div class="card 0-hidden border-0 shadow-lg my-5 md-0">
                                    <div class="card-body p-5">
                                        <!-- Nested Row within Card Body -->
                                        <div class="row">
                                            <div class="col-lg-5-none d-lg-block bg-login-image"></div>
                                            <div class="col-lg-20">
                                                <div class="p-0">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="card" style="width: 22rem;">
                                                                <img src="assets/dist/img/avatar2.png" class="card-img-top" alt="...">
                                                            </div>
                                                            <div class="text-center">
                                                                <h1 class="h4 text-gray-900 mb-0"><b> Welcome Pemuda Baptis </b></h1>
                                                            </div>
                                                            <form class="user">

                                                                <div class="form-group">
                                                                    <input type="username" class="form-control form-control-name" id="masukan username" placeholder="Masukan Nama Anda...">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control form-control-email" id="masukan email" aria-describedby="emailHelp" placeholder="Masukan Alamat Email...">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control form-control-password" id="masukan password" placeholder="Masukan Password...">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-checkbox small">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                                                        <label class="custom-control-label" for="customCheck">Remember
                                                                            Me</label>
                                                                    </div>
                                                                </div>
                                                                <a href="<?= $judul ?>" class="btn btn-primary btn-user btn-block">
                                                                    Masuk Akun
                                                                </a>
                                                                <hr>
                                                                <a href="<?= $judul ?>" class="btn btn-google btn-user btn-block">
                                                                    <i class="fab fa-google fa-fw"></i> Masuk dengan Google
                                                                </a>
                                                                <!-- <a href="#" class="btn btn-facebook btn-user btn-block">
                                                                    <i class="fab fa-facebook-f fa-fw"></i> Masuk dengan Facebook
                                                                </a> -->
                                                            </form>
                                                            <hr>
                                                            <div class="text-center">
                                                                <a class="small" href="<?= $judul ?>">Lupa Password?</a>
                                                            </div>
                                                            <div class="text-center">
                                                                <a class="small" href="<?= $judul ?>">Membuat Akun Baru!</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                </thead>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>