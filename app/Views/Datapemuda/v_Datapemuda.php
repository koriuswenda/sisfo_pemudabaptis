<div class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title"><i class="far fa-folder-open"> </i><b><?= $judul ?></b></h3>


      <div class="card-tools">
        <a href="download-excel-Datapemuda.php" class="btn btn-success mb-0 pw-0 p-2">
          <!-- <i class="fas fa-file-excel mb-0 pw-0"> Download EXCEL</i></a>
        <a href="print-file-Datapemuda.php" class="btn btn-secondary mb-0 pw-0 p-2"> -->
          <i class="fas fa-print mb-0 pw-0"> Print FILE</i></a>
        <a href="download-pdf-Datapemuda.php" class="btn btn-danger mb-0 pw-0 p-2">
          <i class="fas fa-file-pdf mb-0 pw-0"> Download PDF</i></a>
        <a href="<?= base_url('tambah') ?>" class="btn btn-flat btn-primary btn-xm">

          <i class="fas fa-plus"> <b>Tambah Data </b></i>

        </a>

      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead class="text-center">
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Usia</th>
            <th>No Hp</th>
            <th>Alamat</th>
            <th>Asal Gereja</th>
            <th>Kode Gereja</th>
            <th>Status</th>
            <th>profile</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($Datapemuda as $key => $value) { ?>
            <tr>
              <td><?= $no++ ?></td>
              <td> <?= $value['nama_lengkap'] ?></td>
              <td><?= $value['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
              <td><?= $value['tempat_lahir'] ?>,<?= date('d-m-Y ', strtotime($value['tanggal_lahir'])) ?></td>
              <td><?= $value['usia'] ?></td>
              <td><?= $value['no_hp'] ?></td>
              <td> <?= $value['alamat'] ?></td>
              <td><?= $value['asal_gereja'] ?></td>
              <td><?= $value['kode_gereja'] ?></td>
              <td><?= $value['status'] ?></td>
              <td><?= $value['profile'] ?></td>
              <td class='..d-flex gap-1'>

                <a href='# ' class='btn btn-sm btn-outline-success rounded-0'>Edit</a>
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