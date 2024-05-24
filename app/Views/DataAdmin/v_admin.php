<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"> <i class="fa fa-user"></i><b> <?= $judul ?></b></h3>

            <div class="card-tools">
                <!-- <a href="download-excel-Datapemuda.php" class="btn btn-success mb-0 pw-0 p-2">
          <i class="fas fa-file-excel mb-0 pw-0"> Download EXCEL</i></a> -->
                <!-- <a href="print-file-Datapemuda.php" class="btn btn-secondary mb-0 pw-0 p-2">
          <i class="fas fa-print mb-0 pw-0"> Print FILE</i></a>
        <a href="download-pdf-Datapemuda.php" class="btn btn-danger mb-0 pw-0 p-2">
          <i class="fas fa-file-pdf mb-0 pw-0"> Download PDF</i></a> -->
                <a href="<?= base_url('tambahadmin') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"> <b> Tambah Admin </b></i>
                </a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php echo form_open('admin') ?>


            <div class="card mb-6" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/dist/img/admin.png" class="img-fluid rounded-start" alt="img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Profile Admin</h5>
                            <input name="profile_gereja" value="<?= old('profile_gereja')  ?>" class="form-control form-control-Lg" id="formFileLg" type="file">
                            <p class="text_danger"></p>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input Nama="username" value="<?= old('username') ?>" class=" form-control">
                                <p class="text_danger"> User name</p>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input Nama="nama" value="<?= old('nama') ?>" class=" form-control">
                                <p class="text_danger"> Nama Lengkap</p>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input Nama="email" value="<?= old('email') ?>" class=" form-control">
                                <p class="text_danger"> Alamat Email </p>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary p-2 mt-2">Simpan</button>
                        <a href="<?= base_url('admin'); ?>" class="btn btn-success p-2 mt-2">Kembali</a>
                    </div>

                </div>

            </div>



            <!-- /.card-body -->
        </div>

        <?php echo form_close() ?>
        <!-- /.card -->
    </div>