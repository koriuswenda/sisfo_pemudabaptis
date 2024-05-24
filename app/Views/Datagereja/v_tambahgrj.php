<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"> <i class="fa fa-church coll-100 size-500"></i><b> <?= $judul ?></b></h3>


            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <?php
            session();
            $validation = \Config\Services::validation();
            ?>



            <?php echo form_open('tambahgereja') ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Nama Gereja</label>
                        <input Nama="nama_gereja" value="<?= old('nama_gereja') ?>" class=" form-control">
                        <p class="text_danger"> <?= ($validation->hasError('nama_gereja')) ?  $validation->getError('nama_gereja')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="">Alamat Gereja</label>
                        <input Nama="alamat_gereja" value="<?= old('alamat_gereja') ?>" class=" form-control">
                        <p class="text_danger"> <?= ($validation->hasError('alamat_gereja')) ?  $validation->getError('alamat_gereja')  :  ' '  ?></p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Kode Gereja</label>
                        <input Nama="kode_gereja" value="<?= old('kode_gereja') ?>" class=" form-control">
                        <p class="text_danger"> <?= ($validation->hasError('kode_gereja')) ?  $validation->getError('kode_gereja')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Profile Gereja</label>
                        <input name="profile_gereja" value="<?= old('profile_gereja')  ?>" class="form-control form-control-Lg" id="formFileLg" type="file">
                        <p class="text_danger"> <?= ($validation->hasError('profile_gereja')) ?  $validation->getError('profile_gereja')  :  ' '  ?></p>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary p-2 mt-2">Simpan</button>
            <a href="<?= base_url('Datagereja'); ?>" class="btn btn-success p-2 mt-2">Kembali</a>

            <?php echo form_close() ?>

        </div>
    </div>
</div>