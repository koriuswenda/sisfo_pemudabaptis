<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="far fa-folder"> </i><b><?= $judul ?></b></h3>


        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action=" " method="post">

                <?php
                session();
                $validation = \Config\Services::validation();
                ?>

                <?php echo form_open('Tambah') ?>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input Nama="nama_user" value="<?= old('nama_user') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('nama_user')) ?  $validation->getError('nama_user')  :  ' '  ?></p>
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
                            <label for="">Umur</label>
                            <input Nama="umur" value="<?= old('umur') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('usia')) ?  $validation->getError('umur')  :  ' '  ?></p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">No Hp</label>
                            <input Nama="no_hp" value="<?= old('no_hp') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('no_hp')) ?  $validation->getError('no_hp')  :  ' '  ?></p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Asal Gereja</label>
                            <input Nama="asal_gereja" value="<?= old('asal_gereja') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('tempat_lahir')) ?  $validation->getError('tempat_lahir')  :  ' '  ?></p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Kode Gereja</label>
                            <input Nama="kode_gereja" value="<?= old('kode_gereja') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('kode_gereja')) ?  $validation->getError('kode_gereja')  :  ' '  ?></p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" Nama="email" value="<?= old('email') ?>" class="form-control">
                            <p class="text_danger"> <?= ($validation->hasError('email')) ?  $validation->getError('email')  :  ' '  ?></p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Status Anggota</label>
                            <select name="status_anggota" value="<?= old('status_anggota') ?>" class="form-control">
                                <option value="">---Plih Status Anggota </option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                            <p class="text_danger"> <?= ($validation->hasError('status')) ?  $validation->getError('status')  :  ' '  ?></p>
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
                <a href="<?= base_url('User'); ?>" class="btn btn-success p-2 mt-2">Kembali</a>
                <?php echo form_close() ?>
            </form>
        </div>
    </div>
</div>