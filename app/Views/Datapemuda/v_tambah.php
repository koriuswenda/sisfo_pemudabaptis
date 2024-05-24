<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="far fa-folder"> </i><b><?= $judul ?></b></h3>


        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <form action="" method="post">
                <?php
                session();
                $validation = \Config\Services::validation();
                ?>

                <?php echo form_open('Datapemuda/tambah') ?>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input Nama="nama_lengkap" value="<?= old('nama_lengkap') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('nama_lengkap')) ?  $validation->getError('nama_lengkap')  :  ' '  ?></p>
                        </div>
                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" value="<?= old('jenis_kelamin') ?>" class="form-control">
                                <option value="">---Plih Jenis Kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <p class="text_danger"> <?= ($validation->hasError('jenis_kelamin')) ?  $validation->getError('jenis_kelamin')  :  ' '  ?></p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">No Hp</label>
                            <input Nama="no_hp" value="<?= old('no_hp') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('no_hp')) ?  $validation->getError('no_hp')  :  ' '  ?></p>
                        </div>
                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="">Alamat </label>
                            <input Nama="alamat" value="<?= old('alamat') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('alamat')) ?  $validation->getError('alamat')  :  ' '  ?></p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Usia</label>
                            <input Nama="usia" value="<?= old('usia') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('usia')) ?  $validation->getError('usia')  :  ' '  ?></p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input Nama="tempat_lahir" value="<?= old('tempat_lahir') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('tempat_lahir')) ?  $validation->getError('tempat_lahir')  :  ' '  ?></p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" Nama="tanggal_lahir" value="<?= old('tanggal_lahir') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('tanggal_lahir')) ?  $validation->getError('tanggal_lahir')  :  ' '  ?></p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Asal Gereja</label>
                            <input Nama="asal_gereja" value="<?= old('asal_gereja') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('tempat_lahir')) ?  $validation->getError('tempat_lahir')  :  ' '  ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Status</label>
                            <input Nama="status" value="<?= old('status') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('status')) ?  $validation->getError('status')  :  ' '  ?></p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Kode Gereja</label>
                            <input Nama="kode_gereja" value="<?= old('kode_gereja') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('kode_gereja')) ?  $validation->getError('kode_gereja')  :  ' '  ?></p>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Profile </label>
                            <input name="profile" value="<?= old('profile')  ?>" class="form-control form-control-Lg form-active" id="formFileLg form-active" type="file">
                            <p class="text_danger"> <?= ($validation->hasError('profile')) ?  $validation->getError('profile')  :  ' '  ?></p>
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary p-2 mt-2">Simpan</button>
                <a href="<?= base_url('Datapemuda'); ?>" class="btn btn-success p-2 mt-2">Kembali</a>
                <?php echo form_close() ?>

        </div>
        </form>
    </div>
</div>