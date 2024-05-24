<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"> <i class="fas fa-bullhorn"></i><b><?= $judul ?></b></h3>


            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <?php
            session();
            $validation = \Config\Services::validation();
            ?>

            <?php echo form_open('Data Pengumuman') ?>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Judul Pengumuman</label>
                        <input type="text" Nama="judul_pengumuman" value="<?= old('judul_pengumuman') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('judul_pengumuman')) ?  $validation->getError('judul_pengumuman')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="">Nama Penulis</label>
                        <input Nama="Penulis_pengumuman" value="<?= old('penulis_pengumuman') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('penulis_pengumuman')) ?  $validation->getError('penulis_pengumuman')  :  ' '  ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Waktu Penulis Pengumuman </label>
                        <input type="time" Nama="waktu_pengumuman" value="<?= old('waktu_pengumuman') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('waktu_pengumuman')) ?  $validation->getError('waktu_pengumuman')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="">Tangal Pengumuman</label>
                        <input type="date" Nama="tanggal_pengumuman" value="<?= old('tanggal_pengumuman') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('tanggal_pengumuman')) ?  $validation->getError('tanggal_pengumuman')  :  ' '  ?></p>
                    </div>
                </div>
            </div>

            <div class="row  ">
                <div class="col-sm">
                    <div class="form-group  mb-5">
                        <label for="">Isi Pengumuman </label>
                        <input type="text" Nama="isi_pengumuman" value="<?= old('isi_pengumuman') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('isi_pengumuman')) ?  $validation->getError('isi_pengumuman')  :  ' '  ?></p>
                    </div>
                </div>
            </div>





            <button type="submit" class="btn btn-primary p-2 mt-2">Simpan</button>
            <a href="<?= base_url('Pengumuman'); ?>" class="btn btn-success p-2 mt-2">Kembali</a>

            <?php echo form_close() ?>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>