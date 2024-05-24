<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"> <i class="far fa-calendar-check"></i><b><?= $judul ?></b></h3>

            <div class="card-tools">
                <!-- <a href="download-excel-Datapemuda.php" class="btn btn-success mb-0 pw-0 p-2">
                    <i class="fas fa-file-excel mb-0 pw-0"> Download EXCEL</i></a> -->
                <a href="print-file-Datapemuda.php" class="btn btn-secondary mb-0 pw-0 p-2">
                    <i class="fas fa-print mb-0 pw-0"> Print FILE</i></a>
                <a href="download-pdf-Datapemuda.php" class="btn btn-danger mb-0 pw-0 p-2">
                    <i class="fas fa-file-pdf mb-0 pw-0"> Download PDF</i></a>
                <a href="<?= base_url('tambahjadwal') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"><b>Tambah Jadwal</b></i>
                </a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Tempat Ibadah </th>
                        <th>Kode Gereja</th>
                        <th>Hari Ibadah</th>
                        <th>Waktu</th>
                        <th>Petugas Ibadah</th>
                        <th>Pelayan Firman</th>
                        <th>Doa Syafaat </th>
                        <th>Doa Syukur</th>
                        <th>opsi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php $no = 1;
                    foreach ($jadwalibadah as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td> <?= $value['tempat_ibadah'] ?></td>
                            <td> <?= $value['kode_gereja'] ?></td>
                            <td><?= $value['hari'] ?>,<?= date('d-m-Y ', strtotime($value['tanggal_ibadah'])) ?></td>
                            <td> <?= $value['waktu_ibadah'] ?></td>
                            <td> <?= $value['petugas_ibadah'] ?></td>
                            <td> <?= $value['pelayan_firman'] ?></td>
                            <td> <?= $value['doa_syafaat'] ?></td>
                            <td> <?= $value['doa_syukur'] ?></td>
                            <td class='..d-flex gap-1'>
                                <a href='#' class='btn btn-sm btn-outline-success rounded-0'>Edit</a>
                                <a href='#' class='btn btn-sm btn-outline-danger rounded-0'>Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>