<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"> <i class="far fa-calendar sp-2"></i><b><?= $judul ?></b></h3>


            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <?php
            session();
            $validation = \Config\Services::validation();
            ?>

            <?php echo form_open('Jadwal Ibadah') ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Nama Events</label>
                        <input Nama="nama_event" value="<?= old('nama_event') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('nama_event')) ?  $validation->getError('nama_event')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="">Deskripsi Events</label>
                        <input Nama="deskripsi_event" value="<?= old('deskripsi_event') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('deskripsi_event')) ?  $validation->getError('deskripsi_event')  :  ' '  ?></p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Tanggal Mulai</label>
                        <input type="date" Nama="tanggal_mulai" value="<?= old('tanggal_mulai') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('tanggal_mulai')) ?  $validation->getError('tanggal_mulai')  :  ' '  ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Tanggal Selesai</label>
                        <input type="date" Nama="tanggal_selesai" value="<?= old('tanggal_selesai') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('tanggal_selesai')) ?  $validation->getError('tanggal_selesai')  :  ' '  ?></p>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary p-2 mt-2">Simpan</button>
            <a href="<?= base_url('Events'); ?>" class="btn btn-success p-2 mt-2">Kembali</a>

            <?php echo form_close() ?>





        </div>
    </div>
</div>