<div class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title"> <i class="fa fa-church coll-100 size-500"></i><b> <?= $judul ?></b></h3>

      <div class="card-tools">
        <!-- <a href="download-excel-Datapemuda.php" class="btn btn-success mb-0 pw-0 p-2">
          <i class="fas fa-file-excel mb-0 pw-0"> Download EXCEL</i></a> -->
        <a href="print-file-Datapemuda.php" class="btn btn-secondary mb-0 pw-0 p-2">
          <i class="fas fa-print mb-0 pw-0"> Print FILE</i></a>
        <a href="download-pdf-Datapemuda.php" class="btn btn-danger mb-0 pw-0 p-2">
          <i class="fas fa-file-pdf mb-0 pw-0"> Download PDF</i></a>
        <a href="<?= base_url('tambahgereja') ?>" class="btn btn-primary">
          <i class="fas fa-plus"> <b> Tambah Gereja </b></i>
        </a>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead class="text-center">
          <tr>
            <th>No</th>
            <th>Nama Gereja</th>
            <th>Alamat Gereja</th>
            <th>kode Gereja</th>
            <th>Profile Gereja</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($Datagereja as $key => $value) { ?>
            <tr>
              <td><?= $no++ ?></td>
              <td> <?= $value['nama_gereja'] ?></td>
              <td> <?= $value['alamat_gereja'] ?></td>
              <td><?= $value['kode_gereja'] ?></td>
              <td><?= $value['profile_gereja'] ?></td>
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