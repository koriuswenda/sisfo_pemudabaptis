<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"> <i class="far fa-calendar-check"></i><b><?= $judul ?></b></h3>


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
                        <label for="">Tempat Ibadah</label>
                        <input Nama="tempat_ibadah" value="<?= old('tempat_ibadah') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('tempat_ibadah')) ?  $validation->getError('tempat_ibadah')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="">Hari Ibadah</label>
                        <input Nama="hari" value="<?= old('hari') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('hari')) ?  $validation->getError('hari')  :  ' '  ?></p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Tanggal Ibadah</label>
                        <input type="date" Nama="tanggal_ibadah" value="<?= old('tanggal_ibadah') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('tanggal_ibadah')) ?  $validation->getError('tanggal_ibadah')  :  ' '  ?></p>
                    </div>
                </div>



                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Waktu Ibadah</label>
                        <input type="time" Nama="waktu_ibadah" value="<?= old('waktu_ibadah') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('waktu_ibadah')) ?  $validation->getError('waktu_ibadah')  :  ' '  ?></p>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Petugas Ibadah</label>
                        <input Nama="Petugas_ibadah" value="<?= old('petugas_ibadah') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('petugas_ibadah')) ?  $validation->getError('petugas_ibadah')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Pelayan Firman</label>
                        <input Nama="pelayan_firman" value="<?= old('pelayan_firman') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('pelayan_firman')) ?  $validation->getError('pelayan_firman')  :  ' '  ?></p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Doa Syafaat</label>
                        <input type="doa_syafaat" Nama="doa_syafaat" value="<?= old('doa_syafaat') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('doa_syafaat')) ?  $validation->getError('doa_syafaat')  :  ' '  ?></p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Doa Syukur</label>
                        <input Nama="doa_syukur" value="<?= old('doa_syukur') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('doa_syukur')) ?  $validation->getError('doa_syukur')  :  ' '  ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="">Kode Gereja</label>
                        <input Nama="kode_gereja" value="<?= old('kode_gereja') ?>" class="form-control">
                        <p class="text_danger"> <?= ($validation->hasError('kode_gereja')) ?  $validation->getError('kode_gereja')  :  ' '  ?></p>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary p-2 mt-2">Simpan</button>
            <a href="<?= base_url('Jadwalibadah'); ?>" class="btn btn-success p-2 mt-2">Kembali</a>

            <?php echo form_close() ?>


        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>