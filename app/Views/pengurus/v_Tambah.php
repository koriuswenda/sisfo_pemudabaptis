<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="far fa-user"></i><b><?= $judul ?></b></h3>

            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <?php
            session();
            $validation = \Config\Services::validation();
            ?>

            <?php echo form_open('Tambah') ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input Nama="nama_lengkap" value="<?= old('nama_lengkap') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('nama_lengkap')) ?  $validation->getError('nama_lengkap')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group form-active">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" value="<?= old('jenis_kelamin') ?>" class="form-control form-active">
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
                        <label for="">Usia</label>
                        <input Nama="usia" value="<?= old('usia') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('usia')) ?  $validation->getError('usia')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Jabatan Pengurus</label>
                        <select name="jabatan" value="<?= old('jabatan') ?>" class="form-control">

                            <option value=""> ---Plih Jabatan Pengurus</option>
                            <option value="ketua">Ketua Umum</option>
                            <option value="wakil">Wakil Ketua Umum</option>
                            <option value="sekretaris">Sekretaris Umum</option>
                            <option value="wakil">Wakil Sekretaris Umum</option>
                            <option value="bendahara">Bendahara Umum</option>
                            <option value="bendahara">Wakil bendahara Umum</option>
                            <option value="kordinator">Kordinator Kerohanian</option>
                            <option value="kordinator">Kordinator Minat & Bakat</option>
                            <option value="kordinator">Kordinator Infokom</option>
                            <option value="kordinator">Kordinator Sosial & Kesehatan</option>
                            <option value="kordinator">Kordinator Bidang Usaha</option>
                            <option value="kordinator">Kordinator Bidang Pend. & Penalaran</option>
                            <option value="anggota">Anggota Kerohanian</option>
                            <option value="anggota">Anggota Minat & Bakat</option>
                            <option value="anggota">Anggota Infokom</option>
                            <option value="anggota">Anggota Sosial & Kesehatan</option>
                            <option value="anggota">Anggota Bidang Usaha</option>
                            <option value="anggota">Anggota Bidang Pend. & Penalaran</option>

                        </select>
                        <p class="text_danger"> <?= ($validation->hasError('jenis_kelamin')) ?  $validation->getError('jenis_kelamin')  :  ' '  ?></p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Asal Gereja</label>
                        <input Nama="asal_gereja" value="<?= old('asal_gereja') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('asal_gereja')) ?  $validation->getError('asal_gereja')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Masa Layan</label>
                        <input Nama="masa_layan" value="<?= old('masa_layan') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('masa_layan')) ?  $validation->getError('masa_layan')  :  ' '  ?></p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Masa Akhir</label>
                        <input Nama="masa_akhir" value="<?= old('masa_akhir') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('masa_akhir')) ?  $validation->getError('masa_akhir')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Profile </label>
                        <input name="profile" value="<?= old('profile')  ?>" class="form-control form-control-Lg form-active" id="formFileLg form-active" type="file">
                        <p class="text_danger"> <?= ($validation->hasError('profile')) ?  $validation->getError('profile')  :  ' '  ?></p>
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
            </div>

            <button type="submit" class="btn btn-primary p-2 mt-2">Simpan</button>
            <a href="<?= base_url('Datapemuda'); ?>" class="btn btn-success p-2 mt-2">Kembali</a>
            <?php echo form_close() ?>



        </div>
    </div>
</div>