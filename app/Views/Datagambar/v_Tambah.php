<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"> <i class="far fa-image"></i><b> <?= $judul ?></b></h3>



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
                        <label for="">Judul Galeri</label>
                        <input type="text" Nama="judul_galeri" value="<?= old('nama_gereja') ?>" class=" form-control">
                        <p class="text_danger"> <?= ($validation->hasError('judul_galeri')) ?  $validation->getError('judul_galeri')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input Nama="deskripsi" value="<?= old('deskripsi') ?>" class=" form-control">
                        <p class="text_danger"> <?= ($validation->hasError('deskripsi')) ?  $validation->getError('deskripsi')  :  ' '  ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">show title</label>
                        <input type="text" Nama="show_title" value="<?= old('show_title') ?>" class=" form-control">
                        <p class="text_danger"> <?= ($validation->hasError('show_title')) ?  $validation->getError('show_title')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Upload Galeri</label>
                        <input name="upload_galeri" value="<?= old('upload_galeri')  ?>" class="form-control form-control-Lg" id="formFileLg" type="file">
                        <p class="text_danger"> <?= ($validation->hasError('upload_galeri')) ?  $validation->getError('upload_galeri')  :  ' '  ?></p>
                    </div>
                </div>
            </div>




            <button type="submit" class="btn btn-primary p-2 mt-2">Simpan</button>
            <a href="<?= base_url('gambar'); ?>" class="btn btn-success p-2 mt-2">Kembali</a>
            <?php echo form_close() ?>




        </div>
    </div>
</div>